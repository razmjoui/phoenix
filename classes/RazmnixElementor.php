<?php

namespace Razm;



class RazmnixElementor {

	public function RegisterWidgets( $widgets_manager ) {


//		require_once( RAZMNIX_CLASSES. 'RazmnixUserBtn.php' );
//		$widgets_manager->register( new RazmnixUserBtn() );

		require_once( 'widgets/RazmnixSearch.php' );
		require_once( 'widgets/RazmnixThemesMode.php' );
		require_once( 'widgets/RazmnixLogo.php' );
		require_once( 'widgets/RazmnixBtn.php' );
		require_once( 'widgets/RazmnixMenu.php' );


		require_once( 'widgets/RazmnixContainer.php' );
		$widgets_manager->register( new RazmnixContainer() );




//        require_once(RAZMNIX_CLASSES . 'RazmnixCart.php');


		$widgets_manager->register( new RazmnixSearch() );
		$widgets_manager->register( new RazmnixThemesMode() );
		$widgets_manager->register( new RazmnixLogo() );
		$widgets_manager->register( new RazmnixBtn() );
		$widgets_manager->register( new RazmnixMenu() );





	}

	private function setup_hooks() {
		// Register Widgets.
		add_action( 'elementor/widgets/register', [ $this, 'RegisterWidgets' ] );

		// Register custom widget categories.
		add_action( 'elementor/elements/categories_registered', [ $this, 'ElementorCategories' ] );
	}


	public function ElementorCategories( $elements_manager ) {
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