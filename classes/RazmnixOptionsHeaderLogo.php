<?php

namespace Razm;

class RazmnixOptionsHeaderLogo {
public function getHeaderLogo(): array {
	return
	[
		//Select Logo
		[
			'id'    => 'headerLogoUrl',
			'type'  => 'media',
			'title' => esc_html__( 'Select Logo', 'razmnix' ),
		],
		//Select Logo Dark
		[
			'id'    => 'headerLogoUrlDark',
			'type'  => 'media',
			'title' => esc_html__( 'Select Logo DarkMode', 'razmnix' ),
		],
		//header Logo Width Desktop
		[
			'id'      => 'headerLogoWidth',
			'type'    => 'dimensions',
			'title'   => esc_html__( 'Width Logo Desktop', 'razmnix' ),
			'width'   => true,
			'height'  => false,
			'units'   => [ 'px' ],
			'default' => [ 'width' => 208 ],

		],
		//header Logo Width Tablet
		[
			'id'      => 'headerLogoWidthTablet',
			'type'    => 'dimensions',
			'title'   => esc_html__( 'Width Logo Tablet', 'razmnix' ),
			'width'   => true,
			'height'  => false,
			'units'   => [ 'px' ],
			'default' => [
				'width' => 160
			]
		],
		//header Logo Width Mobile
		[
			'id'      => 'headerLogoWidthMobile',
			'type'    => 'dimensions',
			'title'   => esc_html__( 'Width Logo Mobile', 'razmnix' ),
			'width'   => true,
			'height'  => false,
			'units'   => [ 'px' ],
			'default' => [
				'width' => 140
			]
		],
	];
}
}