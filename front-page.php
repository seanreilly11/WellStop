<?php get_header('home'); ?>
<div class="banner-wrapper container">
    <div class="banner-text">
        <h2><?php bloginfo('description') ?></h2>
        <p class="banner-text-padded"><?php echo get_theme_mod('bannerText'); ?></p>
        <a href="contact" class="btn btn-main-color"><?php echo get_theme_mod('bannerBtn'); ?></a>
    </div>
</div>
</div>
<div class="container">
    <div class="py-5">
        <?php get_template_part('includes/section', 'content'); ?>
        <div class="mt-5 text-center">
            <a class="btn btn-lg btn-main-color btn-block" href="donate">Donate</a>
        </div>
    </div>

</div>
<?php get_footer(); ?>