<?php

/*

 Template Name: Contact

 */

?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>

<h1>Any questions ? N'hésitez pas à nous contacter !</h1>

    <form>
        Adresse : <?php the_field('adresse'); ?> <br> <br>
        CP : <?php the_field('code_postal'); ?> <br> <br>Ville :  <?php the_field('ville'); ?> <br> <br>
        tel :  <?php the_field('telephone'); ?> <br> <br>
        mail :  <?php the_field('mail'); ?><br> <br>
    </form>


<?php endwhile; endif; ?>