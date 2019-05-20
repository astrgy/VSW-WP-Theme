<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>

    <title><?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/standard.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap-reboot.min.css" />

    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class(); ?>>
      
    <!-- HEADER -->
    <header class="container-fluid">
      <a href="<?php bloginfo('url');?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt=" logo" title=" logo"/></a> 
    </header>    

    <!-- NAVIGATION -->
    <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
    </nav>