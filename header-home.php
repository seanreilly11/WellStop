<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?> - The Animal Sanctuary</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="banner">
        <header class="py-3 bg-transparent">
            <div class="container d-flex justify-content-between align-items-center">
                <a href="<?php echo get_home_url(); ?>">
                    <!-- <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo"> -->
                    WellStop
                </a>
                <?php
                wp_nav_menu(
                    array('theme-location' => 'top-menu')
                )
                ?>
            </div>
        </header>