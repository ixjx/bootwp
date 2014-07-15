<?php get_header();?>
<div class="container distance">
	<div class="row">
		<div class="col-md-9">
			<div class="main">
			   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			   	<article class="block post">
			   		<span class="round-date">
			   			<span class="month"><?php the_time('m月'); ?></span>
            			<span class="day"><?php the_time('d'); ?></span>
			   		</span>
			   		<p class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
			   		<p class="ui teal ribbon label"><?php the_category(', ');?></p>
			   		<div class="article-content">
			   			<?php the_content();?>
			   		</div>
			   	</article>
				<?php endwhile;?> 
				<ol class="page-navigator">
    				<li><? posts_nav_link(' ','<< 上一页','下一页 >>');?></li>
   				</ol>
				<?php else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-3">
            <?php get_sidebar();?>
        </div>
	</div>
</div>
<!-- Duoshuo Comment BEGIN -->
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
<?php get_footer();?>
