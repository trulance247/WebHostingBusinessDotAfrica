<?php

/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  /* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );

  // Font awesome links
  wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/cdn/css/font-awesome.min.css');
  
  /* template's primary css file */
  wp_enqueue_style( 'africawebhosting-boostrap-css' , get_template_directory_uri() . '/cdn/css/main.css' );
  
  /* boostrap resources from theme files */
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/cdn/css/bootstrap.min.css' );
  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/cdn/js/bootstrap.min.js' , array( 'jquery' ) , false , true );

  // More styling Resources
  wp_enqueue_style('africawebhosting-animate-css', get_template_directory_uri() . '/cdn/css/animate.min.css');
  wp_enqueue_style('africawebhosting-superfish-css', get_template_directory_uri() . '/cdn/css/superfish.min.css');
  wp_enqueue_style('africawebhosting-slicknav-css', get_template_directory_uri() . '/cdn/css/slicknav.min.css');
  wp_enqueue_style('africawebhosting-owl-carousel-css', get_template_directory_uri() . '/cdn/css/owl.carousel.min.css');
  wp_enqueue_style('africawebhosting-responsive-css', get_template_directory_uri() . '/cdn/css/responsive.css');
  wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
  // wp_enqueue_style('', get_template_directory_uri() . '');
  // wp_enqueue_style('', get_template_directory_uri() . '');

  //enlist more javaScript Resources
  wp_enqueue_script('africawebhosting-vide-js', get_template_directory_uri() . '/cdn/js/jquery.vide.min.js');
  wp_enqueue_script('africawebhosting-superfish-js', get_template_directory_uri() . '/cdn/js/superfish.min.js');
  wp_enqueue_script('africawebhosting-wow-js', get_template_directory_uri() . '/cdn/js/wow.min.js');
  wp_enqueue_script('africawebhosting-owlcarousel-js', get_template_directory_uri() . '/cdn/js/owl.carousel.min.js');
  wp_enqueue_script('africawebhosting-slicknav-js', get_template_directory_uri() . '/cdn/js/jquery.slicknav.min.js');
  wp_enqueue_script('africawebhosting-scrollUp-js', get_template_directory_uri() . '/cdn/js/jquery.scrollUp.min.js');
  wp_enqueue_script('africawebhosting-custom-js', get_template_directory_uri() . '/cdn/js/custom.js');
  
  /*conditional resources for IE 9 */
  wp_enqueue_script( 'simple-blog-html5', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' , array(), '3.7.0' );
  wp_script_add_data( 'simple-blog-html5', 'conditional', 'lt IE 9' );
  wp_enqueue_script( 'simple-blog-respondjs', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js' , array(), '1.4.2' );
  wp_script_add_data( 'simple-blog-respondjs', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );

?>