<?php
/*
  * Template Name : Portfolio
  */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<h1> <?php the_title(); ?></h1>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>


    <h2>Nos fabuleux projets</h2>


    <?php
    $currentID = get_the_ID();

    $my_query = new WP_Query(array(

        'post_type' => 'Projet',
        ' post_par_page' => -1,
        'order' => 'rand',
        'post__not_in' => array($currentID)
    ));

    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();

        ?>
    <article>
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <?php the_post_thumbnail(medium); ?>
        <a href="<?php the_permalink(); ?>">Lire la suite</a></article>

    <?php endwhile; endif; ?>
<?php endwhile; endif; ?>