<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<section class="block">',
		'after_widget' => '</section>',
		'before_title' => '<p class="ui teal ribbon label">',
		'after_title' => '</p>',
	));

/* Archives list by zwwooooo */
function archives_list_SHe() {
     global $wpdb,$month;
     $lastpost = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_date <'" . current_time('mysql') . "' AND post_status='publish' AND post_type='post' AND post_password='' ORDER BY post_date DESC LIMIT 1");
     $output = get_option('SHe_archives_'.$lastpost);
     if(empty($output)){
         $output = '';
         $wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE 'SHe_archives_%'");
         $q = "SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month, count(ID) as posts FROM $wpdb->posts p WHERE post_date <'" . current_time('mysql') . "' AND post_status='publish' AND post_type='post' AND post_password='' GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC";
         $monthresults = $wpdb->get_results($q);
         if ($monthresults) {
             foreach ($monthresults as $monthresult) {
             $thismonth    = zeroise($monthresult->month, 2);
             $thisyear    = $monthresult->year;
             $q = "SELECT ID, post_date, post_title, comment_count FROM $wpdb->posts p WHERE post_date LIKE '$thisyear-$thismonth-%' AND post_date AND post_status='publish' AND post_type='post' AND post_password='' ORDER BY post_date DESC";
             $postresults = $wpdb->get_results($q);
             if ($postresults) {
                 $text = sprintf('%s %d', $month[zeroise($monthresult->month,2)], $monthresult->year);
                 $postcount = count($postresults);
                 $output .= '<ul class="archives-list"><li><span class="archives-yearmonth">' . $text . ' &nbsp;(' . count($postresults) . '&nbsp;篇文章)</span><ul class="archives-monthlisting">' . "\n";
             foreach ($postresults as $postresult) {
                 if ($postresult->post_date != '0000-00-00 00:00:00') {
                 $url = get_permalink($postresult->ID);
                 $arc_title    = $postresult->post_title;
                 if ($arc_title)
                     $text = wptexturize(strip_tags($arc_title));
                 else
                     $text = $postresult->ID;
                     $title_text = 'View this post, &quot;' . wp_specialchars($text, 1) . '&quot;';
                     $output .= '<li>' . mysql2date('d日', $postresult->post_date) . ':&nbsp;' . "<a href='$url' title='$title_text'>$text</a>";
                     //$output .= '&nbsp;(' . $postresult->comment_count . ')';
                     $output .= '</li>' . "\n";
                 }
                 }
             }
             $output .= '</ul></li></ul>' . "\n";
             }
         update_option('SHe_archives_'.$lastpost,$output);
         }else{
             $output = '<div class="errorbox">Sorry, no posts matched your criteria.</div>' . "\n";
         }
     }
     echo $output;
 }

?>