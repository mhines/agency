<?php
/**
 * Custom Scripts and styles that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package _mh
 */

/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if


function _mh_scripts() {

	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.1', 'all' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.1', true );

    // Include google fonts
    wp_enqueue_style( 'google_font_Ralway', 'https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.2.0', 'all' );
   
   	wp_enqueue_style( '_mh-style', get_stylesheet_uri() );
    

   	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_mh_scripts' );