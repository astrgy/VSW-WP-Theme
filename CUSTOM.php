<?/** CONTENT FROM PAGE ID UNDER PARENT**/?>

<? $postslist = get_posts('numberposts=10&post_parent=305446&post_type=page');
foreach ($postslist as $post) : setup_postdata($post); ?>
<a href="<? the_permalink() ?>"  title="<? the_title(); ?>"> 
<div class="col5"><p><span><? the_title(); ?></span>
<? the_excerpt(); ?></p></div></a>
  
<? endforeach; ?>
    
<?/** CONTENT FROM PAGE ID **/?>

<? $recent = new WP_Query("page_id=1488"); while($recent->have_posts()) : $recent->the_post();?>
<h2><? the_title(); ?></h2>
<? the_content(); ?>
<? endwhile; ?>


<?/** IMAGE FROM CAT **/?>

<? $categories = get_the_category();
foreach ( $categories as $category )  {
echo '<img src="' ;
bloginfo('stylesheet_directory');   
echo '/img/'.esc_attr( $category->name ).'.jpg"  alt="'.esc_attr( $category->name ).'" />'; } ?>

<?/** LATEST POST **/?>

    
<? $postslist = get_posts('numberposts=1&category=18,19,20,21,27'); foreach ($postslist as $post) : setup_postdata($post); ?>
<h3><a href="<? the_permalink() ?>" rel="bookmark" title="<? the_title(); ?>"><? the_title(); ?></a></h3>
<p><em><? the_time('F j, Y'); ?></em></p>
<? the_content(); ?>
<a href="<? the_permalink() ?>" rel="nofollow" title="<? the_title(); ?>"><button>READ MORE</button></a>
<? endforeach; ?>