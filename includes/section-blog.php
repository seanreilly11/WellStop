<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_content();
        $terms = get_the_terms($post->ID, 'regions');
        if ($terms) :
            foreach ($terms as $term) {
                echo "<p>Region: " . $term->name . "</p>";
            }
        endif;
        $categories = get_the_category();
        if ($categories) :
            foreach ($categories as $cat) : ?>
                <a class="text-dark" href="<?php echo get_category_link($cat->term_id); ?>">
                    <?php echo "<p>Categories: " . $cat->name . "</p>"; //go and add single_cat_title() in archive 
                    ?>
                </a>
<?php endforeach;
        endif;
    endwhile;
else :
endif;
