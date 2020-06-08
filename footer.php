<footer class="p-5">
    <div class="d-flex justify-content-around align-items-center flex-column flex-md-row-reverse">
        <div class="footer-menu">
            <?php if (is_active_sidebar('footer-sidebar')) :
                dynamic_sidebar('footer-sidebar');
            endif; ?>
        </div>
        <p class="mb-0"><?php echo get_theme_mod('footerMessage'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>