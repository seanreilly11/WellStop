<?php get_header('home'); ?>
<div class="banner-wrapper container">
    <div class="banner-text">
        <h2 class="main-color"><?php bloginfo('description') ?></h2>
        <p><?php echo get_theme_mod('bannerText'); ?></p>
        <button class="btn btn-main-color">GET HELP</button>
    </div>
    <div class="banner-image">
        <h1>Image</h1>
    </div>
</div>
</div>
<?php get_template_part('includes/section', 'content'); ?>

<?php get_footer(); ?>