<?php get_header(); ?>
<div class="container">
    <h1> <?php echo single_cat_title(); ?> </h1>
    <?php get_template_part('includes/section', 'archive'); ?>
    <?php previous_posts_link();  ?>
    <?php next_posts_link();  ?>
    <?php if (is_active_sidebar('blog-sidebar')) :
        dynamic_sidebar('blog-sidebar');
    endif; ?>
</div>
<?php get_footer(); ?>