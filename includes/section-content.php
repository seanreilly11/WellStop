<?php
if (have_posts()) :
    while (have_posts()) : ?>
            <?php
            the_post();
            the_content();
            ?>
<?php
    endwhile;
endif;
?>