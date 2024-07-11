<?php

namespace RazmE;


use RazmW\RazmnixBtn;
use RazmW\RazmnixLogo;
use RazmW\RazmnixMenu;
use RazmW\RazmnixSearch;
use RazmW\RazmnixThemesMode;

class RazmnixElementor {

	public function registerWidgets( $widgets_manager ) {


//		require_once( RAZMNIX_CLASSES. 'RazmnixUserBtn.php' );
//		$widgets_manager->register( new RazmnixUserBtn() );

		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixSearch.php' );
		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixThemesMode.php' );
		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixLogo.php' );
		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixBtn.php' );
		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixMenu.php' );





		$widgets_manager->register( new RazmnixSearch() );
		$widgets_manager->register( new RazmnixThemesMode() );
		$widgets_manager->register( new RazmnixLogo() );
		$widgets_manager->register( new RazmnixBtn() );
		$widgets_manager->register( new RazmnixMenu() );


	}

	private function setup_hooks() {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_custom_script_for_elementor_editor' ] );
		// Register Widgets.
		add_action( 'elementor/widgets/register', [ $this, 'registerWidgets' ] );

		// Register custom widget categories.
		add_action( 'elementor/elements/categories_registered', [ $this, 'elementorCategories' ] );

	}

	public function enqueue_custom_script_for_elementor_editor(): void {
		// بررسی اینکه آیا المنتور در حال ویرایش است یا خیر
		if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
			wp_enqueue_script(
				'razmnix-elementor',
				RAZMNIX_SCRIPTS . 'elementor.js',
				null,
				defined( WP_DEBUG ) && WP_DEBUG ? time() : RAZMNIX_VER,
				false
			);
		}
	}

	public function elementorCategories( $elements_manager ) {
		$elements_manager->add_category(
			'razmnixWidgets',
			[
				'title' => esc_html__( 'Phoenix', 'razmnix' ),
				'icon'  => 'fa fa-plug',
			]
		);
	}

	public function __construct() {
		$this->setup_hooks();
	}
}