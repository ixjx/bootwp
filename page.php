<?php get_header();?>
<div class="container distance">
    <div class="row">
        <div class="col-md-9">
            <div class="main">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="block">
                    <p class="title"><?php the_title(); ?><p>  
                    <div><?php the_content(); ?><div>
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </article>
                <!-- Duoshuo Comment BEGIN -->
                <div class="ds-thread"></div>
                <script type="text/javascript">
                    var duoshuoQuery = {short_name:"shurrik"};
                    (function() {
                        var ds = document.createElement('script');
                        ds.type = 'text/javascript';ds.async = true;
                        ds.src = 'http://ixjx.sinaapp.com/git/js/duoshuo.js';
                        ds.charset = 'UTF-8';
                        (document.getElementsByTagName('head')[0] 
                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                    })();
                </script>
                <!-- Duoshuo Comment END -->
            </div> 
        </div>
        <div class="col-md-3">
            <?php get_sidebar();?>
        </div>
    </div>
</div>
<?php get_footer();?>
