<?php get_header(); ?>
<div class="row container mx-auto px-0 pb-3">
    <div class="col-12 col-md-9">
        <h1 class="page-title">Page not found</h1>
        <h4 class="text-info my-5"> It looks like nothing was found at this location. Maybe try a search?</h4>
        <?php get_search_form(); ?>
    </div>
    <div class="col-12 col-md-3 widget">
        <?php if (is_active_sidebar('page-sidebar')) :
            dynamic_sidebar('page-sidebar');
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>