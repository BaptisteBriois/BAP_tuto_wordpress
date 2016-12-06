<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>


    <?php if(is_page(6)) : ?>

        <h1> Mention spé: <?php the_title(); ?></h1>

        <?php else : ?>

        <h1 style="color: <?php the_field('couleurtitre');?> "><?php the_title(); ?></h1>

        <?php endif; ?>


    <?php the_content(); ?>
    <h3>Pour en savoir plus : <a href="<?php the_field('mail_de_lexpert')?>"> <?php the_field('mail_de_lexpert')?></a></h3>
    Publié par <?php the_author_meta(user_firstname); ?> le <?php the_date('d/m/Y'); ?> à <?php the_time('h:m'); ?>
<?php endwhile; endif; ?>

<?php
$currentID = get_the_ID();
echo $currentID;

?>

Autres articles :
<div id="coucou"></div>

<?php

$my_query = new WP_Query(array(

    'post_type' => 'post',
    'post_par_page' => -1,
    'order' => 'rand',
   'post__not_in' => array($currentID)
));

if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();

    ?>

    <a href="<?php the_permalink(); ?>">   <h4><?php the_title(); ?></h4></a>

<?php endwhile; endif; ?>


</body>
</html>