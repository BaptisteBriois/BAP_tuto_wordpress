<?php get_header(); ?><!--
		--><section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>


			<iframe width="560" height="315" src="//www.youtube.com/embed/xzCEdSKMkdU"
			frameborder="0" allowfullscreen></iframe>
			<?php echo of_get_option('header_phrase',''); ?>
			<img src="<?php echo of_get_option('image', ''); ?>" />
		</section>


		<!-- /section -->


<?php get_sidebar(); ?>


