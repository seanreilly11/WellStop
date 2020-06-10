<?php get_header('home'); ?>
<div class="banner-wrapper container">
    <div class="banner-text">
        <h2><?php bloginfo('description') ?></h2>
        <p class="banner-text-padded"><?php echo get_theme_mod('bannerText'); ?></p>
        <a href="#" class="btn btn-main-color">GET HELP NOW</a>
    </div>
</div>
</div>
<div class="container">
    <div class="py-5">
        <?php get_template_part('includes/section', 'content'); ?>
    </div>
</div>
<?php get_footer(); ?>