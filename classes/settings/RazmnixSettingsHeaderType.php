<?php

namespace RazmS;

class RazmnixSettingsHeaderType {
public function getHeaderType(): array {
	return
	[
		//header type
		[
			'id'      => 'headerType',
			'type'    => 'button_set',
			'title'   => esc_html__( 'header Type', 'razmnix' ),
			'help'    => esc_html__( 'Select header Type', 'razmnix' ),
			'options' => [
				'default'   => esc_html__( 'default', 'razmnix' ),
				'elementor' => esc_html__( 'elementor', 'razmnix' ),
			],
			'default' => 'default'
		],
		// select header elementor
		[
			'id'         => 'headerElementor',
			'type'       => 'select',
			'ajax'    => true,
			'chosen'  => true,
			'dependency' => [ 'headerType', '==', 'elementor' ],
			'title'      => esc_html__( 'header select', 'razmnix' ),
			'help'       => esc_html__( 'Select header', 'razmnix' ),
			'options'    => RazmnixSettings::$headers
		],
		// select header Default
		[
			'id'         => 'headerDefault',
			'type'       => 'select',
			'ajax'    => true,
			'chosen'  => true,
			'dependency' => [ 'headerType', '==', 'default' ],
			'title'      => esc_html__( 'header select', 'razmnix' ),
			'help'       => esc_html__( 'Select header', 'razmnix' ),
			'options'    => RazmnixSettings::$defaultHeaders
		],
	];
}
}