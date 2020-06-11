<?php get_header('archive'); ?>
<div class="container pb-5">
    <h1 class='page-title'>
        <?php if (single_cat_title()) :
            single_cat_title();
        elseif (post_type_archive_title()) :
            post_type_archive_title();
        endif; ?>
    </h1>
    <div>
        <?php get_template_part('includes/section', 'archive'); ?>
        <?php previous_posts_link();  ?>
        <?php next_posts_link();  ?>
    </div>
    <div class="widget">
        <?php if (is_active_sidebar('blog-sidebar')) :
            dynamic_sidebar('blog-sidebar');
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>