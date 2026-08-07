<?php
/**
 * Register Widget Areas
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'cybersplash_widgets_init' ) ) {

	function cybersplash_widgets_init() {

		register_sidebar(
			array(
				'name'          => __( 'Blog Sidebar', 'cybersplash' ),
				'id'            => 'blog-sidebar',
				'description'   => __( 'Widgets displayed on blog pages.', 'cybersplash' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Footer Widgets', 'cybersplash' ),
				'id'            => 'footer-widgets',
				'description'   => __( 'Widgets displayed in the footer.', 'cybersplash' ),
				'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4 class="footer-widget-title">',
				'after_title'   => '</h4>',
			)
		);

	}

}

add_action( 'widgets_init', 'cybersplash_widgets_init' );