<?php
/*
Template Name: Archives
*/
?>
<?php get_header();?>
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