<?php get_header(); ?>
<h1> Search results </h1>

<h1> <?php echo single_cat_title(); ?> </h1>
<?php get_template_part('includes/section', 'archive'); ?>
<!-- Pagination Method 1 -->
<?php previous_posts_link();  ?>
<?php next_posts_link();  ?>

<?php get_footer(); ?>