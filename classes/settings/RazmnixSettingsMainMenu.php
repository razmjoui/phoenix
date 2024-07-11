<?php

namespace RazmS;

use RazmI\RazmnixFontAwesome;
use RazmI\RazmnixHeroIcon;
use RazmI\RazmnixPhoenixIcon;

class RazmnixSettingsMainMenu {
	public function getMainMenu(): array {
		return
			[
				// Main Menu
				[
					'id'     => 'mainMenus',
					'type'   => 'group',
					'title'  => esc_html__( 'Main Menu', 'razmnix' ),
					'fields' => [
						// Menu Name
						[
							'id'    => 'Menu',
							'type'  => 'text',
							'title' => esc_html__( 'Menu Name', 'razmnix' ),
						],
						// Menu Link
						[
							'id'    => 'MenuLink',
							'type'  => 'link',
							'title' => esc_html__( 'Menu Link', 'razmnix' ),
						],


						// Menu Icon
						[
							'id'      => 'MenuIcon',
							'type'    => 'button_set',
							'options' => [
								true  => esc_html__( 'Enable', 'razmnix' ),
								false => esc_html__( 'Disable', 'razmnix' ),
							],
							'title'   => esc_html__( 'Menu Icon', 'razmnix' ),
							'default' => false
						],
						// Menu Icon Base
						[
							'id'         => 'MenuIconBase',
							'type'       => 'select',
							'chosen'     => true,
							'ajax'       => true,
							'title'      => esc_html__( 'Icon Base', 'razmnix' ),
							'dependency' => [ 'MenuIcon', '==', true ],
							'options'    => [
								''            => esc_html__( 'None', 'razmnix' ),
								'phoenix'     => esc_html__( 'Phoenix', 'razmnix' ),
								'fontawesome' => esc_html__( 'Font Awesome', 'razmnix' ),
								'heroicons'   => esc_html__( 'Hero Icons', 'razmnix' ),
							],

						],
						//  Menu Icon Name fontawesome
						[
							'id'         => 'MenuIconName',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Name', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
							'chosen'     => true,
							'dependency' => [ 'MenuIconBase', '==', 'fontawesome' ],
							'options'    => RazmnixFontAwesome::$svgs,
							'ajax'       => true,
						],
						//  Menu Icon Name phoenix
						[
							'id'         => 'MenuIconNameP',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Name', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
							'chosen'     => true,
							'dependency' => [ 'MenuIconBase', '==', 'phoenix' ],
							'options'    => RazmnixPhoenixIcon::$svgs,
							'ajax'       => true,
						],
						//  Menu Icon Name heroicons
						[
							'id'         => 'MenuIconNameH',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Name', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
							'chosen'     => true,
							'dependency' => [ 'MenuIconBase', '==', 'heroicons' ],
							'options'    => RazmnixHeroIcon::$svgs,
							'ajax'       => true,
						],
						// Menu Icon Type fontawesome
						[
							'id'         => 'MenuIconType',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Type', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
							'dependency' => [ 'MenuIconBase', '==', 'fontawesome' ],
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
						// Menu Icon Type heroicons
						[
							'id'         => 'MenuIconTypeH',
							'type'       => 'select',
							'title'      => esc_html__( 'Icon Type', 'razmnix' ),
							'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
							'dependency' => [ 'MenuIconBase', '==', 'heroicons' ],
							'options'    => [
								'outline' => esc_html__( 'Outline', 'razmnix' ),
								'solid'   => esc_html__( 'Solid', 'razmnix' ),
								'mini'    => esc_html__( 'Mini', 'razmnix' ),
								'micro'   => esc_html__( 'Micro', 'razmnix' ),
							],
							'chosen'     => true,
							'ajax'       => true,
						],

						// Menu Icon color
						[
							'id' => 'MenuIconColor',
							'type' => 'color',
							'title' => esc_html__( 'Menu Icon Color', 'razmnix' ),
							'dependency' => [ 'MenuIcon', '==', true ],
						],
						// Menu Icon Size
						[
							'id' => 'MenuIconSize',
							'type' => 'dimensions',
							'title' => esc_html__( 'Icon Size', 'razmnix' ),
							'dependency' => [ 'MenuIcon', '==', true ],
							'width'   => true,
							'height'  => false,
							'units'   => [ 'px' ],
						],


						// SubMenu
						[
							'id'      => 'SubMenuO',
							'type'    => 'button_set',
							'options' => [
								true  => esc_html__( 'Enable', 'razmnix' ),
								false => esc_html__( 'Disable', 'razmnix' ),
							],
							'title'   => esc_html__( 'SubMenu', 'razmnix' ),
							'help'    => esc_html__( 'You can add a submenu by activating the submenu. Note that the menu link code will be disabled', 'razmnix' ),
							'default' => false
						],
						// SubMenuStyle
						[
							'id'      => 'SubMenuStyle',
							'type'    => 'button_set',
							'dependency' => [ 'SubMenuO', '==', true ],
							'options' => [
								'1'  => esc_html__( 'single column', 'razmnix' ),
								'2' => esc_html__( 'Two columns' . ' 2', 'razmnix' ),
								'3' => esc_html__( 'three columns' . ' 3', 'razmnix' ),
								'category' => esc_html__( 'category', 'razmnix' ),

							],
							'title'   => esc_html__( 'SubMenu Style', 'razmnix' ),
							'default' => 'category'
						],


						//  SubMenu
						[
							'id'         => 'SubMenus',
							'type'       => 'group',
							'dependency' => [ 'SubMenuStyle', '!=', 'category' ],
							'title'      => esc_html__( 'SubMenus', 'razmnix' ),
							'fields'     => [
								//Main SubMenu Name
								[
									'id'    => 'SubMenu',
									'type'  => 'text',
									'title' => esc_html__( 'SubMenu Name', 'razmnix' ),
								],
								//Main SubMenu Link
								[
									'id'    => 'SubMenuLink',
									'type'  => 'link',
									'title' => esc_html__( 'SubMenu Link', 'razmnix' ),
								],
								//Main SubMenu Description
								[
									'id'    => 'SubMenuDescription',
									'type'  => 'text',
									'title' => esc_html__( 'SubMenu Description', 'razmnix' ),
								],
								//Main SubMenu Icon
								[
									'id'      => 'SubMenuIcon',
									'type'    => 'button_set',
									'options' => [
										true  => esc_html__( 'Enable', 'razmnix' ),
										false => esc_html__( 'Disable', 'razmnix' ),
									],
									'title'   => esc_html__( 'SubMenu Icon', 'razmnix' ),
									'default' => false
								],
								//Main SubMenu Icon Base
								[
									'id'         => 'SubMenuIconBase',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Base', 'razmnix' ),
									'dependency' => [ 'SubMenuIcon', '==', true ],
									'options'    => [
										''            => esc_html__( 'None', 'razmnix' ),
										'phoenix'     => esc_html__( 'Phoenix', 'razmnix' ),
										'fontawesome' => esc_html__( 'Font Awesome', 'razmnix' ),
										'heroicons'   => esc_html__( 'Hero Icons', 'razmnix' ),
									],
									'chosen'     => true,
									'ajax'       => true,

								],

								// Main SubMenu Icon Name fontawesome
								[
									'id'         => 'SubMenuIconName',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Name', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
									'chosen'     => true,
									'dependency' => [ 'SubMenuIconBase', '==', 'fontawesome' ],
									'options'    => RazmnixFontAwesome::$svgs,
									'ajax'       => true,
								],
								// Main SubMenu Icon Name phoenix
								[
									'id'         => 'SubMenuIconNameP',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Name', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
									'chosen'     => true,
									'dependency' => [ 'SubMenuIconBase', '==', 'phoenix' ],
									'options'    => RazmnixPhoenixIcon::$svgs,
									'ajax'       => true,
								],
								// Main SubMenu Icon Name heroicons
								[
									'id'         => 'SubMenuIconNameH',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Name', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon name', 'razmnix' ),
									'chosen'     => true,
									'dependency' => [ 'SubMenuIconBase', '==', 'heroicons' ],
									'options'    => RazmnixHeroIcon::$svgs,
									'ajax'       => true,
								],

								//Main SubMenu Icon Type fontawesome
								[
									'id'         => 'SubMenuIconType',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Type', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
									'dependency' => [ 'SubMenuIconBase', '==', 'fontawesome' ],
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

								//Main SubMenu Icon Type heroicons
								[
									'id'         => 'SubMenuIconTypeH',
									'type'       => 'select',
									'title'      => esc_html__( 'Icon Type', 'razmnix' ),
									'help'       => esc_html__( 'Select the Icon Type', 'razmnix' ),
									'dependency' => [ 'SubMenuIconBase', '==', 'heroicons' ],
									'options'    => [
										'outline' => esc_html__( 'Outline', 'razmnix' ),
										'solid'   => esc_html__( 'Solid', 'razmnix' ),
										'mini'    => esc_html__( 'Mini', 'razmnix' ),
										'micro'   => esc_html__( 'Micro', 'razmnix' ),
									],
									'chosen'     => true,
									'ajax'       => true,
								],
								// SunMenu Icon color
								[
									'id' => 'SubMenuIconColor',
									'type' => 'color',
									'title' => esc_html__( 'Icon Color', 'razmnix' ),
									'dependency' => [ 'SubMenuIcon', '==', true ],
								],
								// SunMenu Icon Size
								[
									'id' => 'SubMenuIconSize',
									'type' => 'dimensions',
									'title' => esc_html__( 'Icon Size', 'razmnix' ),
									'dependency' => [ 'SubMenuIcon', '==', true ],
									'width'   => true,
									'height'  => false,
									'units'   => [ 'px' ],
								],

							],
						],


					],
				],
			];
	}
}