<!DOCTYPE html>
<html>
<head>
    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/main.css"/>
</head>
<body>

<header>
    <?php
    wp_nav_menu(array('mainmenu'));
            ?>
</header>