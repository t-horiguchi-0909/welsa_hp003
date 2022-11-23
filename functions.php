<?php
/**
 * welsa2021 Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package welsa2021
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_WELSA2021_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'welsa2021-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_WELSA2021_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


add_action( 'template_redirect', 'is404_redirect_home' );
function is404_redirect_home() {
  if ( is_404() || is_search() ) {
    wp_safe_redirect( home_url( '/' ) );
    exit();
  }
}



/*======================
GOOGLE TAG MANAGER
======================*/

//Google Tag Manager
function add_gtm_head() {
	echo "<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TZLH5PC');</script>
	<!-- End Google Tag Manager -->";
  }
add_action('wp_head', 'add_gtm_head', 0);

function add_gtm_body() {
	echo '<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZLH5PC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->';
}

add_action('wp_body_open', 'add_gtm_body', 0);


add_theme_support('post-thumbnails');

// add_editor_style("editor-style-excase.css");
// add_theme_support("editor-styles");

add_action( 'enqueue_block_editor_assets', 'wt_add_block_editor_style' );
function wt_add_block_editor_style() {
    global $post;
    $post_type = $post -> post_type;
    if( $post_type == 'excase' ){
        add_editor_style("editor-style-excase.css");
        add_theme_support("editor-styles");
    } else {
        add_editor_style("editor-style.css");
        add_theme_support("editor-styles");
    }
}

//ショートコード呼び出し

function shortcode_php($params = array()) {
	extract(shortcode_atts(array(
	'file' => 'default',
	'url1' => '',
	'url2' => '',
	'url3' => '',
	'title' => '',
	'lead' => '',
	'list1' => '',
	'list2' => '',
	'list3' => '',
	'img' => '',
	'classname' => 'ga-link',
	'btnlabel' => '詳しくはこちら',
	), $params));
	ob_start();
	  include(STYLESHEETPATH . "/inc/$file.php");
	return ob_get_clean();
	}
	add_shortcode('myShortCode', 'shortcode_php');


  //temporaryCSS読み込み
function enqueue_scripts(){
    wp_enqueue_style('temporary', get_template_directory_uri() . '/css/temporary.css', array(), '1.0.0'); 
}
add_action('wp_enqueue_scripts','enqueue_scripts');