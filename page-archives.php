<?php
/*
Template Name: Archives
*/
?>
<?php get_header();?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
    /* 存档页面 jQ伸缩 */
    $('#expand_collapse,.archives-yearmonth').css({cursor:"pointer"});
    $('#archives ul li ul.archives-monthlisting').hide();
    $('#archives ul li ul.archives-monthlisting:first').show();
    $('#archives ul li span.archives-yearmonth').click(function(){$(this).next().slideToggle('fast');return false;});
    //以下下是全局的操作
    $('#expand_collapse').toggle(function(){
      $('#archives ul li ul.archives-monthlisting').slideDown('fast');
      },function(){
        $('#archives ul li ul.archives-monthlisting').slideUp('fast');
      });
  });
</script>
<div class="container distance">
    <div class="row">
      <div class="main">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="block">
              <p class="title"><?php the_title(); ?><p>  
              <?php the_content(); ?>
              <a id="expand_collapse" href="#" class="title">全部展开/收缩 (点击月份可展开)</a>
              <div id="archives"><?php archives_list_SHe(); ?></div>
              <?php endwhile; else: ?>
              <p><?php _e('Sorry, this page does not exist.'); ?></p>
              <?php endif; ?>
          </article>
          <?php //comments_template(); ?> 
      </div>
    </div>
</div>
<?php get_footer();?>