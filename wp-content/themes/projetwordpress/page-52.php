<?php
/*
 * Template Name: Blog
 */

?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>


    <h1 class="vert"> Bienvenue dans le <?php the_title(); ?></h1>

    <?php the_content(); ?>
    Publié par <?php the_author_meta(user_firstname); ?> le <?php the_date('d/m/Y'); ?> à <?php the_time('h:m'); ?>


<?php endwhile; endif; ?>

  <h3>  Tous les articles du blog : </h3>

<?php

$my_query = new WP_Query(array(

    'post_type' => 'post',
   ' post_par_page' => -1,
    'order' => 'rand'
 ));

if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();

?>
    <?php the_post_thumbnail(); ?>
<h4><?php the_title(); ?></h4>
    <?php the_content(); ?>
    <a href="<?php the_permalink(); ?>">Lire la suite</a>

<?php endwhile; endif; ?>



</body>
</html>