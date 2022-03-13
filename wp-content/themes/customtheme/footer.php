<footer class="site-footer">
    <nav class="footer-menu">
                
    <?php $args = ['theme_location' => 'footer'];?>
            <?php wp_nav_menu($args); ?>
    </nav>
    <p><?php bloginfo( 'name' ) ?></p>
</footer>
</div> <!-- closes <div class=container"> -->

<?php wp_footer() ?>

</body>
</html> 
