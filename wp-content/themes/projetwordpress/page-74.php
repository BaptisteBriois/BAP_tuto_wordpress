<?php
/*
  * Template Name : Boutique
  */
?>

<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h1> <?php the_title(); ?></h1>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>


    <h2>RETROUVEZ TOUS NOS PRODUITS</h2>


    <?php
    $currentID = get_the_ID();

    $my_query = new WP_Query(array(

        'post_type' => 'Boutique',
        ' post_par_page' => -1,
        'order' => 'rand',
        'post__not_in' => array($currentID)
    ));

    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();

        ?>
        <hr>
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
            <?php the_post_thumbnail(medium); ?>
            <a href="<?php the_permalink(); ?>">Acheter</a>

    <?php endwhile; endif; ?>
<?php endwhile; endif; ?>