<?php

namespace RazmS;

class RazmnixSettingsElementor {
	public function getElementor(): array {
		return [
			//Dark Mode Element
			[
				'id'      => 'darkModeElement',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Dark Mode Element', 'razmnix' ),
				'help'    => esc_html__( 'By activating this option, the dark mode element is activated and you can use it in Elementor.', 'razmnix' ),
				'default' => true
			],
		];
	}
}