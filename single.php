<?php get_header();?>
<div class="container distance">
<div class="row">
	<div class="col-md-9">
     <div class="main">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article class="block post">
             <span class="round-date">
                 <span class="month"><?php the_time('m月'); ?></span>
                 <span class="day"><?php the_time('d'); ?></span>
             </span>
             <p class="title"><?php the_title(); ?></p>
             <p class="article-meta"><em><?php the_time('l, F jS, Y'); ?></em><?php edit_post_link('Edit', ' &#124; ', ''); ?></p>
             <p class="ui teal ribbon label"><?php the_category(', ');?></p>
             <div class="article-content">
                 <?php the_content(); ?>
             </div>
             <p class="tags"><?php _e('Tags：'); ?><?php the_tags('','&bull;',''); ?></p>
         </article>
         <?php comments_template(); ?>  
         <?php endwhile; else: ?>
         <p><?php _e('Sorry, this page does not exist.'); ?></p>
         <?php endif; ?>
     </div>
	</div>
    <div class="col-md-3">
        <?php get_sidebar();?>
    </div>
</div>
</div>
<?php get_footer();?>
