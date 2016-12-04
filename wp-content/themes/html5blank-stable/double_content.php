<?php /* template Name: double contenu */ ?>

<?php get_header(); ?>


		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>
		

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<iframe width="560" height="315" src="//www.youtube.com/embed/xzCEdSKMkdU"

frameborder="0" allowfullscreen></iframe>
<?php echo of_get_option('header_phrase',''); ?>
<img src="<?php echo of_get_option('image', ''); ?>" />

			<!-- /article -->

		<?php endif; ?>

		</section>
		

		<!-- /section -->
	
<?php get_sidebar(); ?>
<?php echo get_field('deuxieme_contenu'); ?>


