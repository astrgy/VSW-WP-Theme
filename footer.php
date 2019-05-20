    <footer>
        <? wp_nav_menu( array( 'theme_location' => 'foot1' ) ); ?>
        <? wp_nav_menu( array( 'theme_location' => 'foot2' ) ); ?>
        <? wp_nav_menu( array( 'theme_location' => 'foot3' ) ); ?>
        <? wp_nav_menu( array( 'theme_location' => 'foot4' ) ); ?>

        <span>
            <p>&copy; <? echo date('Y');?> <? bloginfo('name');?> | <a href="<? bloginfo('url');?>/legal-notice/" title="">Legal Notice</a> |  <a href="<? bloginfo('url');?>/privacy-policy/" title="">Privacy Policy</a> | <a href="<? bloginfo('url'); ?>/site/wp-admin/" title="website admin">W</a></p>
        </span>

    </footer>

<? wp_footer();?>

<script src="<? bloginfo('stylesheet_url'); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<? bloginfo('stylesheet_url'); ?>/js/bootstrap.min.js"></script>
<script src="<? bloginfo('stylesheet_url'); ?>/js/toggles.js"></script>


</body>

</html>