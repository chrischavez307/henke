<?php
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'header-menu' => __( 'Header Menu' ),
		  'footer-menu' => __( 'Footer Menu' )
		)
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	/*Prevent Empty Title Tag on Home and Blog Pages*/
	function baw_hack_wp_title_for_home( $title )
		{
		  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
			return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'name' );
		  }
		  return $title;
		}
	add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
	
		
	/**
	 * Proper way to enqueue scripts and styles
	 */
	function theme_name_scripts() {
		// wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'retina.min', get_template_directory_uri() . '/js/retina.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.mousewheel.min', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.tinycarousel.min', get_template_directory_uri() . '/js/jquery.tinycarousel.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.lazylinepainter.min.js', get_template_directory_uri() . '/js/jquery.lazylinepainter.min.js', array(), '1.0.0', true );
		if ( is_page( 'contact' ) ){ wp_enqueue_script( 'jquery.gmap.min', get_template_directory_uri() . '/js/jquery.gmap.min.js', array(), '1.0.0', true ); }
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
	}
	
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
	
	add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
	add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
	
	function my_theme_wrapper_start() {
	  echo '<section id="content" role="main"><div class="wrapper">
			<div class="column-grid column-grid-3">';
	}
	
	function my_theme_wrapper_end() {
	  echo '</div></div></section>';
	}
	
	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
	
	/** Remove Showing results functionality site-wide */
	function woocommerce_result_count() {
			return;
	}
	
	add_filter( 'woocommerce_page_title', 'woo_shop_page_title');

function woo_shop_page_title( $page_title ) {

if( 'Shop' == $page_title) {
return "";
}
}
?>