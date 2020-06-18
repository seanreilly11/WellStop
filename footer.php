<footer class="p-5">
    <div class="footer-group container">
        <?php if (is_active_sidebar('footer-sidebar')) :
            dynamic_sidebar('footer-sidebar');
        endif; ?>
    </div>
    <p class="mt-5 text-center">&copy; 2020 Copyright <a href="http://seanreilly11.github.io" target="_blank">Sean Reilly</a></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>