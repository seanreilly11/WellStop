<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (single_cat_title()) :
                single_cat_title();
            elseif (post_type_archive_title()) :
                post_type_archive_title();
            endif; ?> - <?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <?php if (function_exists('the_custom_logo')) :
                the_custom_logo();
            else :
                echo '<a href="' . get_home_url() . '">' . get_bloginfo('name') . '</a>';
            endif;
            ?>
            <?php
            wp_nav_menu(
                array('theme-location' => 'top-menu')
            )
            ?>
        </div>
    </header>