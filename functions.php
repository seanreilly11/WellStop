<?php
// load font awesome
function load_fa()
{
    wp_enqueue_script('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_fa');

// load css
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action("wp_enqueue_scripts", "load_css");

// load js
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}

add_action("wp_enqueue_scripts", "load_js");

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-logo');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

//custom image size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);

// Register sidebars
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Footer Sidebar',
            'id' => 'footer-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

add_action('widgets_init', 'my_sidebars');

// custom post type
function add_locations_post()
{
    $args = array(
        'labels' => array(
            'name' => 'Locations',
            'singular_name' => 'Location',
        ),
        'hierarchical' => true, //boolean value toggles between pages & posts without labels
        'menu_icon' => 'dashicons-admin-site-alt2',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );
    register_post_type('locations', $args);
}

add_action('init', 'add_locations_post');

// custom taxonomy
function locations_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Regions',
            'singular_name' => 'Region',
        ),
        'hierarchical' => true, //boolean value toggles between pages & posts without labels
        'public' => true,

    );
    register_taxonomy('regions', array('locations'), $args);
}

add_action('init', 'locations_taxonomy');

// customise api
require_once get_template_directory() . '/customizer.php';
