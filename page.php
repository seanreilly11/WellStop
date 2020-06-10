<?php get_header(); ?>
<div class="container">
    <h1> <?php the_title(); ?> </h1>

    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-thumbnail">
    <?php endif; ?>

    <?php get_template_part('includes/section', 'content'); ?>

    <?php if (is_active_sidebar('page-sidebar')) :
        dynamic_sidebar('page-sidebar');
    endif; ?>
</div>

<?php get_footer(); ?>