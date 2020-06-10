<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="banner">
        <header class="py-3 bg-transparent">
            <div class="container d-flex justify-content-between align-items-center">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . get_home_url() . '">' . get_bloginfo('name') . '</a>';
                }
                ?>
                <?php
                wp_nav_menu(
                    array('theme-location' => 'top-menu')
                )
                ?>
            </div>
        </header>