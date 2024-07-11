<?php

namespace RazmS;

use RazmI\RazmnixFontAwesome;
use RazmI\RazmnixHeroIcon;
use RazmI\RazmnixPhoenixIcon;

class RazmnixSettingsUserMenu {

	public function getUserMenu(): array {
		return [
			// User Menu
			[
				'id'      => 'userMenus',
				'type'    => 'group',
				'title'   => esc_html__( 'User Menu', 'razmnix' ),
				'fields'  => [
					//User Menu Name
					[
						'id'    => 'userMenu',
						'type'  => 'text',
						'title' => esc_html__( 'Menu Name', 'razmnix' ),
					],
					//User Menu Link
					[
						'id'    => 'userMenuLink',
						'type'  => 'link',
						'title' => esc_html__( 'Menu Link', 'razmnix' ),
					],

					//User Menu Icon
					[
						'id'      => 'userMenuIcon',
						'type'    => 'button_set',
						'title'   => esc_html__( 'Menu Icon', 'razmnix' ),
						'options' => [
							true  => esc_html__( 'Enable', 'razmnix' ),
							false => esc_html__( 'Disable', 'razmnix' ),
						],
						'default' => false

					],
					//User Menu Icon Base
					[
						'id'         => 'userMenuIconBase',
						'type'       => 'select',
						'title'      => esc_html__( 'Icon Base', 'razmnix' ),
						'chosen'     => true,
						'ajax'       => true,
						'dependency' => [ 'userMenuIcon', '==', true ],
						'options'    => [
							''     => esc_html__( 'None', 'razmnix' ),
							'phoenix'     => esc_html__( 'Phoenix', 'razmnix' ),
							'fontawesome' => esc_html__( 'Font Awesome', 'razmnix' ),
							'heroicons'   => esc_html__( 'Hero Icons', 'razmnix' ),
						],

					],

					// User Menu Icon Name fontawesome
					[
						'id'         => 'userMenuIconName',
						'type'       => 'select',
						'title'      => esc_html__( 'Icon Name', 'razmnix' ),
						'desc'       => esc_html__( 'Select the Icon name', 'razmnix' ),
						'chosen'     => true,
						'dependency' => [ 'userMenuIconBase', '==', 'fontawesome' ],
						'options'    => RazmnixFontAwesome::$svgs,
						'ajax'       => true,
					],
					// User Menu Icon Name phoenix
					[
						'id'         => 'userMenuIconNameP',
						'type'       => 'select',
						'title'      => esc_html__( 'Icon Name', 'razmnix' ),
						'desc'       => esc_html__( 'Select the Icon name', 'razmnix' ),
						'chosen'     => true,
						'dependency' => [ 'userMenuIconBase', '==', 'phoenix' ],
						'options'    => RazmnixPhoenixIcon::$svgs,
						'ajax'       => true,
					],
					// User Menu Icon Name heroicons
					[
						'id'         => 'userMenuIconNameH',
						'type'       => 'select',
						'title'      => esc_html__( 'Icon Name', 'razmnix' ),
						'desc'       => esc_html__( 'Select the Icon name', 'razmnix' ),
						'chosen'     => true,
						'dependency' => [ 'userMenuIconBase', '==', 'heroicons' ],
						'options'    => RazmnixHeroIcon::$svgs,
						'ajax'       => true,
					],

					//User Menu Icon Type fontawesome
					[
						'id'         => 'userMenuIconType',
						'type'       => 'select',
						'title'      => esc_html__( 'Icon Type', 'razmnix' ),
						'desc'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
						'dependency' => [ 'userMenuIconBase', '==', 'fontawesome' ],
						'options'    => [
							'duotone'       => esc_html__( 'Duotone', 'razmnix' ),
							'brands'        => esc_html__( 'Brands', 'razmnix' ),
							'light'         => esc_html__( 'Light', 'razmnix' ),
							'regular'       => esc_html__( 'Regular', 'razmnix' ),
							'solid'         => esc_html__( 'Solid', 'razmnix' ),
							'thin'          => esc_html__( 'Thin', 'razmnix' ),
							'sharp-light'   => esc_html__( 'Sharp Light', 'razmnix' ),
							'sharp-regular' => esc_html__( 'Sharp Regular', 'razmnix' ),
							'sharp-solid'   => esc_html__( 'Sharp Solid', 'razmnix' ),
							'sharp-thin'    => esc_html__( 'Sharp Thin', 'razmnix' ),
						],
						'chosen'     => true,
						'ajax'       => true,
					],

					//User Menu Icon Type heroicons
					[
						'id'         => 'userMenuIconTypeH',
						'type'       => 'select',
						'title'      => esc_html__( 'Icon Type', 'razmnix' ),
						'desc'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
						'dependency' => [ 'userMenuIconBase', '==', 'heroicons' ],
						'options'    => [
							'outline' => esc_html__( 'Outline', 'razmnix' ),
							'solid'   => esc_html__( 'Solid', 'razmnix' ),
							'mini'    => esc_html__( 'Mini', 'razmnix' ),
							'micro'   => esc_html__( 'Micro', 'razmnix' ),
						],
						'chosen'     => true,
						'ajax'       => true,
					],


				],
				'default' => [
					[
						'userMenu' => 'Courses',
					],
					[
						'userMenu' => 'Wallet',
					],
					[
						'userMenu' => 'Qustions',
					],
					[
						'userMenu' => 'Logout',
					],

				]
			],
		];
	}

}