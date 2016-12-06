<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h1>NOM DU PROJET: <?php the_title(); ?></h1>
    <?php the_post_thumbnail('large'); ?>
    <?php the_content(); ?>

    <h3><?php the_field('prix'); ?></h3>

    <ul>Couleurs disponibles
        <li>Jaune</li>
        <li>Vert</li>
        <li>Bleu</li>
    </ul>
<?php endwhile; endif; ?>