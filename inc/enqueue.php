<?php
/**
 * Enqueue Scripts & Styles
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'cybersplash_enqueue_assets' ) ) {

	function cybersplash_enqueue_assets() {

		wp_enqueue_style(
			'cybersplash-google-fonts',
			'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap',
			array(),
			null
		);

		wp_enqueue_style(
			'cybersplash-style',
			get_template_directory_uri() . '/assets/css/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'cybersplash-responsive',
			get_template_directory_uri() . '/assets/css/responsive.css',
			array( 'cybersplash-style' ),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_script(
			'cybersplash-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

}

add_action( 'wp_enqueue_scripts', 'cybersplash_enqueue_assets' );