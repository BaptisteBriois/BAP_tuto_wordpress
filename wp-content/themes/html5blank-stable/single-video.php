<?php 
/* Template Name: Vidéos */
 ?>
<?php get_header();?>
    <section class="videolist">
        <div class="container">
            <section class="col-md-12 myshow">
                <h1>Les vidéos</h1>
                <h4>Regardez</h4>
            </section>
            <section class="col-md-12 grid">
                <div class="row">
                    <?php
                    $my_query = new WP_Query(array(
                        'post_type' => 'video',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    ));
                    ?>
                    <?php if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>
                        <article class="col-md-3">
                            <iframe width="100%" height="auto" src="//www.youtube.com/embed/<?php the_field('video'); ?>" frameborder="0" allowfullscreen></iframe>
                        </article>
                    <?php endwhile; endif; ?>
                </div>
            </section>
        </div>
    </section>
<?php get_footer(); ?>