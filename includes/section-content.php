<?php
if (have_posts()) :
    while (have_posts()) : ?>
        <div class="py-5">
            <?php
            the_post();
            the_content();
            ?>
        </div>
<?php
    endwhile;
endif;
?>