<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_content();
        $terms = get_the_terms($post->ID, 'regions');
        if ($terms) :
            foreach ($terms as $term) { ?>
                <p class="mt-3">
                    <a class="text-dark" href="<?php echo get_term_link($term->term_id, 'regions'); ?>">
                        <?php echo "Region: " . $term->name; //go and add single_cat_title() in archive 
                        ?>
                    </a>
                </p>
            <?php
            }
        endif;
        $categories = get_the_category();
        if ($categories) :
            foreach ($categories as $cat) : ?>
                <p class="mt-3">
                    <a class="text-dark" href="<?php echo get_category_link($cat->term_id); ?>">
                        <?php echo "Categories: " . $cat->name; //go and add single_cat_title() in archive 
                        ?>
                    </a>
                </p>
<?php endforeach;
        endif;
    endwhile;
else :
endif;
