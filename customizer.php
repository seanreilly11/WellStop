<?php
//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register($wp_customize)
{
    // Background Colour
    $wp_customize->add_setting('backgroundColour', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'backgroundColourControl', array(
        'label'      => __('Background Colour', 'gardenTheme'),
        'description' => 'Change the background Colour',
        'section'    => 'colors',
        'settings'   => 'backgroundColour',
    )));

    // Body font Colour
    $wp_customize->add_setting('textColour', array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'textColourControl', array(
        'label'      => __('Text Colour', 'gardenTheme'),
        'description' => 'Change the Text Colour',
        'section'    => 'colors',
        'settings'   => 'textColour',
    )));

    // header backgroundColour
    $wp_customize->add_setting('headerColour', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'headerColourControl', array(
        'label'      => __('Header Background Colour', 'gardenTheme'),
        'description' => 'Change the Header Background Colour',
        'section'    => 'colors',
        'settings'   => 'headerColour',
    )));

    // header text color
    $wp_customize->add_setting('headerTextColour', array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'headerTextColourControl', array(
        'label'      => __('Header Menu Text Colour', 'gardenTheme'),
        'description' => 'Change the Header Menu Text Colour',
        'section'    => 'colors',
        'settings'   => 'headerTextColour',
    )));

    // header menu hover color
    $wp_customize->add_setting('headerMenuHoverColour', array(
        'default'   => '#3cb42c',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'headerMenuHoverColourControl', array(
        'label'      => __('Header Menu Hover Colour', 'gardenTheme'),
        'description' => 'Change the Header Menu Hover Colour',
        'section'    => 'colors',
        'settings'   => 'headerMenuHoverColour',
    )));

    // footer backgroundColour
    $wp_customize->add_setting('footerColour', array(
        'default'   => '#343a40',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footerColourControl', array(
        'label'      => __('Footer Background Colour', 'gardenTheme'),
        'description' => 'Change the Footer Background Colour',
        'section'    => 'colors',
        'settings'   => 'footerColour',
    )));

    // footer text color
    $wp_customize->add_setting('footerTextColour', array(
        'default'   => '#f8f9fa',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footerTextColourControl', array(
        'label'      => __('Footer Text Colour', 'gardenTheme'),
        'description' => 'Change the Footer Text Colour',
        'section'    => 'colors',
        'settings'   => 'footerTextColour',
    )));

    // footer menu hover color
    $wp_customize->add_setting('footerMenuHoverColour', array(
        'default'   => '#333',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footerMenuHoverColourControl', array(
        'label'      => __('Footer Menu Hover Colour', 'gardenTheme'),
        'description' => 'Change the Footer Menu Hover Colour',
        'section'    => 'colors',
        'settings'   => 'footerMenuHoverColour',
    )));

    // Create text section
    $wp_customize->add_section('text', array(
        'title'      => __('Text', 'gardenTheme'),
        'priority'   => 30,
    ));

    // Banner Message
    $wp_customize->add_setting('bannerText', array(
        'default'   => 'Our ambition is of communities free from harmful sexual behaviour. We work proactively with clients and partners in the community to achieve this ambition.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bannerTextControl', array(
        'label'      => __('Banner Text', 'gardenTheme'),
        'section'    => 'text',
        'settings'   => 'bannerText',
    )));

    // Footer Message
    $wp_customize->add_setting('footerMessage', array(
        'default'   => '&copy; 2020',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footerMessageControl', array(
        'label'      => __('Footer Text', 'gardenTheme'),
        'section'    => 'text',
        'settings'   => 'footerMessage',
    )));
}

add_action('customize_register', 'mytheme_customize_register');

//Hook2: wp_head to output custom-generated CSS
function mytheme_customize_css()
{
?>
    <style type="text/css">
        body {
            background-color: <?php echo get_theme_mod('backgroundColour', '#ffffff'); ?> !important;
            color: <?php echo get_theme_mod('textColour', '#000000'); ?> !important;
        }

        header {
            background-color: <?php echo get_theme_mod('headerColour', '#ffffff'); ?> !important;
        }

        #menu-top-menu li a {
            color: <?php echo get_theme_mod('headerTextColour', '#000000'); ?> !important;
        }

        #menu-top-menu .current-menu-item::after,
        #menu-top-menu li:hover::after {
            background: <?php echo get_theme_mod('headerMenuHoverColour', '#3cb42c'); ?> !important;
        }

        footer {
            background-color: <?php echo get_theme_mod('footerColour', '#343a40'); ?> !important;
        }

        footer p,
        #menu-top-menu-1 li a {
            color: <?php echo get_theme_mod('footerTextColour', '#f8f9fa'); ?> !important;
        }

        #menu-top-menu-1 li:hover {
            background: <?php echo get_theme_mod('footerMenuHoverColour', '#f8f9fa'); ?> !important;
        }
    </style>
<?php
}
add_action('wp_head', 'mytheme_customize_css');
?>