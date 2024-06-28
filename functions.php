<?php

use Razm\RazmnixElementorParts;

defined('ABSPATH') || exit('No Access !!!');

function defineConstants()
{
	$template_dir = get_template_directory();
	$template_uri = get_template_directory_uri();

	define('RAZMNIX_URL', $template_uri . '/');
	define('RAZMNIX_DIR', $template_dir . '/');
	define('RAZMNIX_INC', RAZMNIX_DIR . 'inc/');
	define('RAZMNIX_WIDGETS', RAZMNIX_INC . 'widgets/');
	define('RAZMNIX_SVG', RAZMNIX_DIR . 'assets/svgs/');
	define('RAZMNIX_SVG_URL', RAZMNIX_URL . 'assets/svgs/');
	define('RAZMNIX_ASSETS', RAZMNIX_URL . 'assets/');
	define('RAZMNIX_STYLES', RAZMNIX_ASSETS . 'css/');
	define('RAZMNIX_SCRIPTS', RAZMNIX_ASSETS . 'js/');
	define('RAZMNIX_IMAGES', RAZMNIX_ASSETS . 'images/');
	define('RAZMNIX_FONTS', RAZMNIX_ASSETS . 'fonts/');
	define('RAZMNIX_VER', wp_get_theme()->get('Version'));
	define('RAZMNIX_ACCOUNT_URL', esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))));
}

function includeFiles()
{
	$files = [
		RAZMNIX_DIR . 'vendor/autoload.php',
		RAZMNIX_INC . 'framework/codestar-framework.php',
		RAZMNIX_INC . 'RazmnixOptions.php',
		RAZMNIX_INC . 'RazmnixElementorParts.php'
	];

	foreach ($files as $file) {
		if (file_exists($file)) {
			require_once $file;
		}
	}
}

function get_svg_code($folder_name, $svg_filename)
{
	$file_path = RAZMNIX_SVG . "{$folder_name}/{$svg_filename}.svg";
	if (!file_exists($file_path)) {
		return "Not found";
	}
	$svg_code = file_get_contents($file_path);
	return $svg_code !== false ? $svg_code : "Error";
}

function RazmnixElementorParts($part_type, $part_id) {
	return RazmnixElementorParts::get_instance()->render_part($part_type, $part_id);
}

defineConstants();
includeFiles();

new Razm\RazmnixControllerClass();