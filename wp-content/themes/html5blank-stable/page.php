<?php /* Template Name: Double contenu */ ?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
				<?php the_content(); ?>

			</article>
			<!-- /article -->
			
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
<?php echo get_field('deuxieme_contenu'); ?>

<?php get_footer(); ?>
