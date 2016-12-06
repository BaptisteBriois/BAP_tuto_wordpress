<?php

add_theme_support( 'post-thumbnails' );

register_nav_menu('mainmenu', 'Menu principal');

 add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'projet',
        array(
            'labels' => array(
                'name' => 'Projets',
                'singular_name' => 'Projet'
            ),
            'public' => true,
            'supports' =>array('title', 'editor', 'author', 'thumbnail')

        )
    );

        register_post_type( 'boutique',
            array(
                'labels' => array(
                    'name' => 'Boutique',
                    'singular_name' => 'Boutique'
                ),
                'public' => true,
                'supports' =>array('title', 'editor', 'author', 'thumbnail')

            )
        );

}



