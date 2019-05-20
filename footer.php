    <footer>
        <?php wp_nav_menu( array( 'theme_location' => 'foot1' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'foot2' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'foot3' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'foot4' ) ); ?>

        <span>
            <p>&copy; <?php echo date('Y');?> <?php bloginfo('name');?> | <a href="<?php bloginfo('url');?>/legal-notice/" title="">Legal Notice</a> |  <a href="<?php bloginfo('url');?>/privacy-policy/" title="">Privacy Policy</a> | <a href="<?php bloginfo('url'); ?>/site/wp-admin/" title="website admin">W</a></p>
        </span>

    </footer>

<?php wp_footer();?>

<script src="<?php bloginfo('stylesheet_url'); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_url'); ?>/js/toggles.js"></script>


</body>

</html>