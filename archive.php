<?php get_header('archive'); ?>
<div class="row container mx-auto px-0 pb-3">
    <div class="col-12 col-md-9">
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
    </div>
    <div class="col-12 col-md-3 widget">
        <?php if (is_active_sidebar('page-sidebar')) :
            dynamic_sidebar('page-sidebar');
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>