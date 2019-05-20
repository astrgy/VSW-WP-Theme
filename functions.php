<?

	// ------------------
	// register menu
	// ------------------

function register_my_menu() {
  register_nav_menu('main',__( 'Main' ));
  register_nav_menu('foot1',__( 'Footer 1' ));
  register_nav_menu('foot2',__( 'Footer 2' ));
  register_nav_menu('foot3',__( 'Footer 3' ));
  register_nav_menu('foot4',__( 'Footer 4' ));
  register_nav_menu('foot5',__( 'Footer 5' ));
  register_nav_menu('extra',__( 'Extra' ));
}
add_action( 'init', 'register_my_menu' );


    // ------------------
	// register widget
	// ------------------

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
       'name'          => __( 'sidebar' ),
	   'id'            => 'sidebar',
	   'description'   => '',
       'class'         => '',
	   'before_widget' => '<li id="%1$s" class="widget %2$s">',
	   'after_widget'  => '</li>',
	   'before_title'  => '<h2 class="widgettitle">',
	   'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
       'name'          => __( 'Search' ),
	   'id'            => 'search',
    ) );
}

	// ------------------
	// custom excerpt length
	// ------------------

function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); 

add_action('init', 'my_custom_init');

function my_custom_init() {
	add_post_type_support( 'page', 'excerpt' );}

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );}  
?>