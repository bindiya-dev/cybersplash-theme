<?php
/**
 * Theme Functions
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cybersplash_includes = array(
	'/inc/theme-setup.php',
	'/inc/enqueue.php',
	'/inc/image-sizes.php',
	'/inc/widgets.php',
	'/inc/helpers.php',
	'/inc/template-functions.php',
	'/inc/customizer.php',
	'/inc/hooks.php',
);

foreach ( $cybersplash_includes as $file ) {

	$file_path = get_template_directory() . $file;

	if ( file_exists( $file_path ) ) {
		require_once $file_path;
	}
}