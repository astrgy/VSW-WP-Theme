<?php get_header(); ?>

  <div class="container">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1>Error 404 - Page not found!</h1>
            <p>The page you trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.</p>
        <?php endwhile; ?>
      <?php endif; ?>
      
  </div>    

<?php get_footer(); ?>