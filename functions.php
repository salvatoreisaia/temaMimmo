<?php
// adding CSS and JS
function load_stylesheets(){
	wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Inconsolata');
}
add_action('wp_enqueue_scripts','load_stylesheets');
function loadjs()
{
	wp_register_script('customjs',get_template_directory_uri().'/js/scripts.js','',1,true);
	wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts','loadjs');
add_theme_support('menus');
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' ); 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
function wpb_social_menu() {
  register_nav_menu('social-menu',__( 'Social Menu' ));
}
add_action( 'init', 'wpb_social_menu' );

function slider(){
$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
);

$query_images = new WP_Query( $query_images_args );

$images = array();
foreach ( $query_images->posts as $image ) {
    
    
    if(strpos($image->post_title,'noslider')==false){
      $images[] = wp_get_attachment_url( $image->ID );


    }

  
   /* if (strpos(wp_get_attachment_url( $image->ID ), 'are') != 0) {
    echo 'true';
}*/
 }
 $output=array();
 foreach ($images as $key => $value) {
   array_push($output, $value);
 }
 
 echo "<script>var imagesList=";
 echo json_encode($images);
 echo ";var loadinggif='";
 echo get_template_directory_uri();

 echo "/images/ajax-loader.gif';</script>";
/*


*/

}
/*
add_action('wp_enqueue_scripts','loadjs');

// Adding theme support

/*function gt_init(){
	
}
add_action('after_setup_theme','gt-init');*/
?>