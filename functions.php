<?php

use RazmE\RazmnixElementorParts;

defined( 'ABSPATH' ) || exit( 'No Access !!!' );

function defineConstants() {
	define( 'RAZMNIX_INC', get_template_directory() . '/inc/' );
	define( 'RAZMNIX_CLASSES', get_template_directory() . '/classes/' );
	define( 'RAZMNIX_SVG', get_template_directory() . '/assets/svg/' );
	define( 'RAZMNIX_SVG_URL', get_template_directory_uri() . '/assets/svg/' );
	define( 'RAZMNIX_ASSETS', get_template_directory_uri() . '/assets/' );
	define( 'RAZMNIX_STYLES', get_template_directory_uri() . '/assets/css/' );
	define( 'RAZMNIX_SCRIPTS', get_template_directory_uri() . '/assets/js/' );
	define( 'RAZMNIX_IMAGES', get_template_directory_uri() . '/assets/images/' );
	define( 'RAZMNIX_FONTS', get_template_directory_uri() . '/assets/fonts/' );
	define( 'RAZMNIX_VER', wp_get_theme()->get( 'Version' ) );
	define( 'RAZMNIX_ACCOUNT_URL', esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) );
}

function includeFiles() {
	require_once (get_template_directory() . '/vendor/autoload.php');
	require_once (get_template_directory() . '/framework/framework.php');
	require_once ( get_template_directory() . '/classes/settings/RazmnixSettings.php' );
	require_once (get_template_directory() . '/classes/elementor/RazmnixElementorParts.php');
}

function razmnixIcon( $folder_name, $svg_filename ): string {
	$file_path = RAZMNIX_SVG . "{$folder_name}/{$svg_filename}.svg";
	if ( ! file_exists( $file_path ) ) {
		return "";
	}
	$svg_code = file_get_contents( $file_path );

	return $svg_code !== false ? $svg_code : "Error";
}

function RazmnixElementorParts( $part_type, $part_id ) {
	return RazmnixElementorParts::get_instance()->render_part( $part_type, $part_id );
}

defineConstants();

includeFiles();

new Razm\RazmnixControllerClass();



