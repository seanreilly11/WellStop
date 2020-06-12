<?php get_header(); ?>
<div class="row container mx-auto px-0 pb-3">
    <div class="col-12 col-md-9">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-thumbnail">
        <?php endif; ?>
        <?php get_template_part('includes/section', 'content'); ?>
    </div>
    <div class="col-12 col-md-3 widget">
        <?php if (is_active_sidebar('page-sidebar')) :
            dynamic_sidebar('page-sidebar');
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>