<? get_header(); ?>

  <div class="container">

      <? if (have_posts()) : ?>
        <? while (have_posts()) : the_post(); ?>
          <h1><? the_title(); ?></h1>
          <? the_content(); ?>
        <? endwhile; ?>
      <? endif; ?>
      
  </div>    

<? get_footer(); ?>