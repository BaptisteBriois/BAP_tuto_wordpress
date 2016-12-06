<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h1><?php the_title(); ?></h1>

    <?php the_excerpt(); ?>

    <a href="<?php the_permalink(); ?>">Lire la suite</a>

    Publié par <?php the_author_meta(user_firstname); ?> le <?php the_date('d/m/Y'); ?> à <?php the_time(); ?>


<?php endwhile; endif; ?>

</body>
</html>