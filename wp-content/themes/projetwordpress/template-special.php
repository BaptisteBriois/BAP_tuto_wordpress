<?php /*

    Template Name: Spécial
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>


    <h1 class="vert"> PAGE SPECIAL : <?php the_title(); ?></h1>

    <?php the_content(); ?>
    Publié par <?php the_author_meta(user_firstname); ?> le <?php the_date('d/m/Y'); ?> à <?php the_time('h:m'); ?>
<?php endwhile; endif; ?>

</body>
</html>