<?php get_header('home'); ?>
<div class="banner-wrapper container">
    <div class="banner-text">
        <h3><?php bloginfo('description') ?></h3>
        <p><?php echo get_theme_mod('bannerText'); ?></p>
        <button class="btn btn-info">GET HELP</button>
    </div>
    <div class="banner-image">
        <h1>Image</h1>
    </div>
</div>
</div>
<?php get_template_part('includes/section', 'content'); ?>

<?php get_footer(); ?>