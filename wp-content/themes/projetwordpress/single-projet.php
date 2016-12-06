
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h1>NOM DU PROJET: <?php the_title(); ?></h1>
    <?php the_post_thumbnail('large'); ?>
    <?php the_content(); ?>
    <a href="<?php the_permalink(); ?>">Lire la suite</a>
 <?php   $currentID = get_the_ID(); ?>

    <?php endwhile; endif; ?>

<h2>Autres projets : </h2>
    <?php


    $my_query = new WP_Query(array(

        'post_type' => 'Projet',
        ' post_par_page' => -1,
        'order' => 'rand',
        'post__not_in' => array($currentID)
    ));

    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();

        ?>



            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>

    <?php endwhile; endif; ?>
