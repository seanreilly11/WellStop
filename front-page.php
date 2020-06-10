<?php get_header('home'); ?>
<div class="banner-wrapper container">
    <div class="banner-text">
        <h2 class="main-color"><?php bloginfo('description') ?></h2>
        <p class="banner-text-padded"><?php echo get_theme_mod('bannerText'); ?></p>
        <a href="#" class="btn btn-main-color">GET HELP NOW</a>
    </div>
    <div class="banner-image">
        <h1>Image</h1>
    </div>
</div>
</div>
<div class="container">
    <?php get_template_part('includes/section', 'content'); ?>
</div>
<?php get_footer(); ?>