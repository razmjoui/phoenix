<?php

namespace Razm;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
class RazmnixElementorParts {

	private static $instance = null;
	private $cache_time;
	private function __construct() {
		$this->cache_time = defined('WP_DEBUG') && WP_DEBUG ? 0 : 3600;
	}

	public static function get_instance() {
		if (null === self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}


	public function render_part($part_type, $part_id) {
		if (!$part_id || !is_numeric($part_id)) {
			error_log("Invalid {$part_type} Elementor ID: " . $part_id);
			return "<!-- {$part_type} ID not set -->";
		}

		$part = get_post($part_id);
		if (!$part || 'publish' !== get_post_status($part) || "razmnix{$part_type}" !== get_post_type($part)) {
			error_log("{$part_type} post not found or not published: " . $part_id);
			return "<!-- {$part_type} not available -->";
		}

		return $this->get_cached_elementor_content($part_id, $part_type);
	}

	private function get_cached_elementor_content($content_id, $content_type) {
		$cache_key = "elementor_{$content_type}_{$content_id}";
		$cached_content = wp_cache_get($cache_key);

		if (false === $cached_content) {
			$cached_content = $this->render_elementor_content($content_id);
			wp_cache_set($cache_key, $cached_content, '', $this->cache_time);
		}

		return $cached_content;
	}

	private function render_elementor_content($content_id) {
		if (class_exists('\Elementor\Plugin')) {
			return \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($content_id);
		}
		return '';
	}

	public function render_header($header_id) {
		return $this->render_part('header', $header_id);
	}

	public function render_footer($footer_id) {
		return $this->render_part('footer', $footer_id);
	}

	public function render_mega_menu($mega_menu_id) {
		return $this->render_part('mega', $mega_menu_id);
	}

	// Add more methods for other parts as needed
}

