<?php

namespace Razm;

class RazmnixOptionsExtensions {
	public function getExtensions(): array {
		return [
			//Dark Mode
			[
				'id'    => 'darkModeExtension',
				'type'  => 'switcher',
				'title' => esc_html__( 'Dark Mode Extension', 'razmnix' ),
				'help' => esc_html__( 'By activating this option, the dark theme settings will be activated and you can manage it in different parts of the site.', 'razmnix' ),
				'default' => true
			],
			//Dark Mode Debug
			[
				'id'      => 'darkModeDebug',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Dark Mode Debug', 'razmnix' ),
				'default' => true
			],
			//Elementor Extension
			[
				'id'    => 'elementorExtension',
				'type'  => 'switcher',
				'title' => esc_html__( 'Elementor Extension', 'razmnix' ),
				'help'    => esc_html__( 'By activating this option, Elementor settings and elements are activated', 'razmnix' ),
				'default' => true
			],
			//Header Builder
			[
				'id'    => 'headerBuilderElementorExtension',
				'type'  => 'switcher',
				'title' => esc_html__( 'Header Builder Elementor Extension', 'razmnix' ),
				'help'    => esc_html__( 'By activating this option, the elementor header settings and post type will be activated', 'razmnix' ),
				'default' => true
			],
			//Footer Builder
			[
				'id'    => 'footerBuilderElementorExtension',
				'type'  => 'switcher',
				'title' => esc_html__( 'Footer Builder Elementor Extension', 'razmnix' ),
				'help'    => esc_html__( 'By activating this option, Elementor footer settings and post type will be activated', 'razmnix' ),
				'default' => true
			],
			//Megamenu Builder
			[
				'id'    => 'megamenuBuilderElementorExtension',
				'type'  => 'switcher',
				'title' => esc_html__( 'Megamenu Builder Elementor Extension', 'razmnix' ),
				'help'    => esc_html__( 'By activating this option, Megamenu settings and post type will be activated', 'razmnix' ),
				'default' => true
			],
			//Extension Modal Login
			[
				'id'      => 'modalLoginExtension',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Modal Login Extension', 'razmnix' ),
				'default' => true
			],
			//Extension Background Mask
			[
				'id'      => 'backgroundMaskExtension',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Background Mask Extension', 'razmnix' ),
				'default' => true
			],
			//Extension Overlay
			[
				'id'    => 'overlayExtension',
				'type'  => 'switcher',
				'title' => esc_html__( 'Overlay Extension', 'razmnix' ),
				'default' => true
			],


		];
	}
}