<?php

namespace Razm;

use RazmI\RazmnixFontAwesome;
use RazmI\RazmnixHeroIcon;
use RazmI\RazmnixPhoenixIcon;

class RazmnixOptionsSideMenu {
	public function getSideMenu(): array {
		return
			[
				// Side Menu
				[
					'id'     => 'sideMenus',
					'type'   => 'group',
					'title'  => esc_html__( 'Side Menu', 'razmnix' ),
					'fields' => [
						//Side Menu Name
						[
							'id'    => 'sideMenu',
							'type'  => 'text',
							'title' => esc_html__( 'Menu Name', 'razmnix' ),
						],
						//Side Menu Link
						[
							'id'    => 'sideMenuLink',
							'type'  => 'link',
							'title' => esc_html__( 'Menu Link', 'razmnix' ),
						],
						//Side Menu Icon
						[
							'id'      => 'sideMenuIcon',
							'type'    => 'button_set',
							'options' => [
								true  => esc_html__( 'Enable', 'razmnix' ),
								false => esc_html__( 'Disable', 'razmnix' ),
							],
							'title'   => esc_html__( 'Menu Icon', 'razmnix' ),
							'default' => false
						],
						//Side Menu Icon Base
						[
							'id'         => 'sideMenuIconBase',
							'type'       => 'select',
							'chosen'     => true,
							'ajax'       => true,
							'title'      => esc_html__( 'Icon Base', 'razmnix' ),
							'dependency' => [ 'sideMenuIcon', '==', true ],
							'options'    => [
								''     => esc_html__( 'None', 'razmnix' ),
								'phoenix'     => esc_html__( 'Phoenix', 'razmnix' ),
								'fontawesome' => esc_html__( 'Font Awesome', 'razmnix' ),
								'heroicons'   => esc_html__( 'Hero Icons', 'razmnix' ),
							],

						],

						// Side Menu Icon Name fontawesome
						[
							'id'         => 'sideMenuIconName',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Name', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
							'chosen'     => true,
							'dependency' => [ 'sideMenuIconBase', '==', 'fontawesome' ],
							'options'    => RazmnixFontAwesome::$svgs,
							'ajax'       => true,
						],
						// Side Menu Icon Name phoenix
						[
							'id'         => 'sideMenuIconNameP',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Name', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
							'chosen'     => true,
							'dependency' => [ 'sideMenuIconBase', '==', 'phoenix' ],
							'options'    => RazmnixPhoenixIcon::$svgs,
							'ajax'       => true,
						],
						// Side Menu Icon Name heroicons
						[
							'id'         => 'sideMenuIconNameH',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Name', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
							'chosen'     => true,
							'dependency' => [ 'sideMenuIconBase', '==', 'heroicons' ],
							'options'    => RazmnixHeroIcon::$svgs,
							'ajax'       => true,
						],

						//Side Menu Icon Type fontawesome
						[
							'id'         => 'sideMenuIconType',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Type', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
							'dependency' => [ 'sideMenuIconBase', '==', 'fontawesome' ],
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

						//Side Menu Icon Type heroicons
						[
							'id'         => 'sideMenuIconTypeH',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Type', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
							'dependency' => [ 'sideMenuIconBase', '==', 'heroicons' ],
							'options'    => [
								'outline' => esc_html__( 'Outline', 'razmnix' ),
								'solid'   => esc_html__( 'Solid', 'razmnix' ),
								'mini'    => esc_html__( 'Mini', 'razmnix' ),
								'micro'   => esc_html__( 'Micro', 'razmnix' ),
							],
							'chosen'     => true,
							'ajax'       => true,
						],

						//Side SubMenu
						[
							'id'      => 'sideSubMenuO',
							'type'    => 'button_set',
							'options' => [
								true  => esc_html__( 'Enable', 'razmnix' ),
								false => esc_html__( 'Disable', 'razmnix' ),
							],
							'title'   => esc_html__( 'SubMenu', 'razmnix' ),
							'help'    => esc_html__( 'You can add a submenu by activating the submenu. Note that the menu link code will be disabled', 'razmnix' ),
							'default' => false
						],

						// Side SubMenu
						[
							'id'         => 'sideSubMenus',
							'type'       => 'group',
							'dependency' => [ 'sideSubMenuO', '==', true ],
							'title'      => esc_html__( 'SubMenus', 'razmnix' ),
							'fields'     => [
								//Side SubMenu Name
								[
									'id'    => 'sideSubMenu',
									'type'  => 'text',
									'title' => esc_html__( 'SubMenu Name', 'razmnix' ),
								],
								//Side SubMenu Link
								[
									'id'    => 'sideSubMenuLink',
									'type'  => 'link',
									'title' => esc_html__( 'SubMenu Link', 'razmnix' ),
								],
								//Side SubMenu Icon
								[
									'id'      => 'sideSubMenuIcon',
									'type'    => 'button_set',
									'options' => [
										true  => esc_html__( 'Enable', 'razmnix' ),
										false => esc_html__( 'Disable', 'razmnix' ),
									],
									'title'   => esc_html__( 'SubMenu Icon', 'razmnix' ),
									'default' => false
								],
								//Side SubMenu Icon Base
								[
									'id'         => 'sideSubMenuIconBase',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Base', 'razmnix' ),
									'dependency' => [ 'sideSubMenuIcon', '==', true ],
									'options'    => [
										''     => esc_html__( 'None', 'razmnix' ),
										'phoenix'     => esc_html__( 'Phoenix', 'razmnix' ),
										'fontawesome' => esc_html__( 'Font Awesome', 'razmnix' ),
										'heroicons'   => esc_html__( 'Hero Icons', 'razmnix' ),
									],
									'chosen'     => true,
									'ajax'       => true,

								],

								// Side SubMenu Icon Name fontawesome
								[
									'id'         => 'sideSubMenuIconName',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Name', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
									'chosen'     => true,
									'dependency' => [ 'sideSubMenuIconBase', '==', 'fontawesome' ],
									'options'    => RazmnixFontAwesome::$svgs,
									'ajax'       => true,
								],
								// Side SubMenu Icon Name phoenix
								[
									'id'         => 'sideSubMenuIconNameP',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Name', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
									'chosen'     => true,
									'dependency' => [ 'sideSubMenuIconBase', '==', 'phoenix' ],
									'options'    => RazmnixPhoenixIcon::$svgs,
									'ajax'       => true,
								],
								// Side SubMenu Icon Name heroicons
								[
									'id'         => 'sideSubMenuIconNameH',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Name', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
									'chosen'     => true,
									'dependency' => [ 'sideSubMenuIconBase', '==', 'heroicons' ],
									'options'    => RazmnixHeroIcon::$svgs,
									'ajax'       => true,
								],

								//Side SubMenu Icon Type fontawesome
								[
									'id'         => 'sideSubMenuIconType',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Type', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
									'dependency' => [ 'sideSubMenuIconBase', '==', 'fontawesome' ],
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

								//Side SubMenu Icon Type heroicons
								[
									'id'         => 'sideSubMenuIconTypeH',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Type', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
									'dependency' => [ 'sideSubMenuIconBase', '==', 'heroicons' ],
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
						],


					],
				],
			];
	}
}