<footer class="site-footer">
    <nav class="navigation-menu">
                
    <?php $args = ['theme_location' => 'fotter'];?>
            <?php wp_nav_menu($args); ?>
    </nav>
    <p><?php bloginfo( 'name' ) ?></p>
</footer>
</div> <!-- closes <div class=container"> -->

<?php wp_footer() ?>

</body>
</html> 
