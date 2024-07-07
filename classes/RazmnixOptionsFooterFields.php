<?php

namespace Razm;

class RazmnixOptionsFooterFields {


	public function getFooterFields(): array {

		return [
			//footer type
			[
				'id'      => 'footerType',
				'type'    => 'button_set',
				'title'   => esc_html__( 'footer Type', 'razmnix' ),
				'desc'    => esc_html__( 'Select footer Type', 'razmnix' ),
				'options' => [
					'default'   => esc_html__( 'default', 'razmnix' ),
					'elementor' => esc_html__( 'elementor', 'razmnix' ),
				],
				'default' => 'elementor'
			],
			// select footer elementor
			[
				'id'         => 'footerElementor',
				'type'       => 'select',
				'dependency' => [ 'footerType', '==', 'elementor' ],
				'title'      => esc_html__( 'footer select', 'razmnix' ),
				'desc'       => esc_html__( 'Select footer', 'razmnix' ),
				'options'    => RazmnixOptions::$footers
			],
			// select footer Default
			[
				'id'         => 'footerDefault',
				'type'       => 'select',
				'dependency' => [ 'footerType', '==', 'default' ],
				'title'      => esc_html__( 'footer select', 'razmnix' ),
				'desc'       => esc_html__( 'Select footer', 'razmnix' ),
				'options'    => RazmnixOptions::$defaultFooters
			],
		];
	}

}

