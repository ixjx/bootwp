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
                    <p class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                    <div class="ui teal ribbon label"><?php the_category(', ');?></div>
                </article>
                <?php endwhile;?>
                <ol class="page-navigator">
                    <? posts_nav_link(' ','<< 上一页','下一页 >>');?>
                </ol>
                <?php else: ?>
                <p><?php _e('Sorry, there are no posts.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-3">
            <?php get_sidebar();?>
        </div>
    </div>
</div>
<?php get_footer();?>