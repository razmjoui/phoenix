<?php

namespace RazmS;

class RazmnixSettingsConnections {
	public function getConnections(): array {
		return
			[
				//Add Connections
				[
					'id'      => 'Connections',
					'type'    => 'repeater',
					'title'   => esc_html__( 'Manage active connections', 'razmnix' ),
					'fields'  => [
						[
							'id'    => 'connection',
							'type'  => 'text',
							'title' => esc_html__( 'connection Name', 'razmnix' ),
						],

					],
					'default' => [
						[
							'connection' => 'sideMenu',
						],
						[
							'connection' => 'overlayShow',
						],
						[
							'connection' => 'modalLogin',
						],
						[
							'connection' => 'userDropDown',
						],
						[
							'connection' => 'isDarkness',
						],

					]
				],
			];
	}
}