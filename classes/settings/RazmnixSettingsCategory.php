<?php

namespace RazmS;

use RazmI\RazmnixFontAwesome;
use RazmI\RazmnixHeroIcon;
use RazmI\RazmnixPhoenixIcon;

class RazmnixSettingsCategory {


	public function getCategory(): array {
		return
			[
				// category Style
				[
					'id'      => 'categoryStyle',
					'type'    => 'button_set',
					'title'  => esc_html__( 'Category Style', 'razmnix' ),

					'options' => [
						'1' => esc_html__( 'Style 1', 'razmnix' ),
						'2' => esc_html__( 'Style 2', 'razmnix' ),
					],
				],
				// categories
				[
					'id'     => 'categories',
					'type'   => 'group',
					'title'  => esc_html__( 'categories', 'razmnix' ),
					'fields' => [
						// category Name
						[
							'id'    => 'category',
							'type'  => 'text',
							'title' => esc_html__( 'category Name', 'razmnix' ),
						],
						//category Description
						[
							'id'    => 'categoryDescription',
							'type'  => 'text',
							'title' => esc_html__( 'category Description', 'razmnix' ),
						],
						// category Icon
						[
							'id'      => 'categoryIcon',
							'type'    => 'button_set',
							'options' => [
								true  => esc_html__( 'Enable', 'razmnix' ),
								false => esc_html__( 'Disable', 'razmnix' ),
							],
							'title'   => esc_html__( 'category Icon', 'razmnix' ),
							'default' => false
						],
						// category Icon Base
						[
							'id'         => 'categoryIconBase',
							'type'       => 'button_set',
							'title'      => esc_html__( 'Icon Base', 'razmnix' ),
							'dependency' => [ 'categoryIcon', '==', true ],
							'options'    => [
								''            => esc_html__( 'None', 'razmnix' ),
								'phoenix'     => esc_html__( 'Phoenix', 'razmnix' ),
								'fontawesome' => esc_html__( 'Font Awesome', 'razmnix' ),
								'heroicons'   => esc_html__( 'Hero Icons', 'razmnix' ),
							],

						],
						//  category Icon Name fontawesome
						[
							'id'         => 'categoryIconName',
							'type'       => 'text',
							'title'      => esc_html__( 'Icon Name', 'razmnix' ),
							'dependency' => [ 'categoryIconBase', '==', 'fontawesome' ],
						],
						//  category Icon Name phoenix
						[
							'id'    => 'categoryIconNameP',
							'type'  => 'text',
							'title' => esc_html__( 'Icon Name', 'razmnix' ),
							'dependency' => [ 'categoryIconBase', '==', 'phoenix' ],
						],
						//  category Icon Name heroicons
						[
							'id'    => 'categoryIconNameH',
							'type'  => 'text',
							'title' => esc_html__( 'Icon Name', 'razmnix' ),
							'dependency' => [ 'categoryIconBase', '==', 'heroicons' ],
						],
						// category Icon Type fontawesome
						[
							'id'         => 'categoryIconType',
							'type'       => 'button_set',
							'title'      => esc_html__( 'Icon Type', 'razmnix' ),
							'dependency' => [ 'categoryIconBase', '==', 'fontawesome' ],
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
						],
						// category Icon Type heroicons
						[
							'id'         => 'categoryIconTypeH',
							'type'       => 'button_set',
							'title'      => esc_html__( 'Icon Type', 'razmnix' ),
							'dependency' => [ 'categoryIconBase', '==', 'heroicons' ],
							'options'    => [
								'outline' => esc_html__( 'Outline', 'razmnix' ),
								'solid'   => esc_html__( 'Solid', 'razmnix' ),
								'mini'    => esc_html__( 'Mini', 'razmnix' ),
								'micro'   => esc_html__( 'Micro', 'razmnix' ),
							],
						],

						// category Icon color
						[
							'id'         => 'categoryIconColor',
							'type'       => 'color',
							'title'      => esc_html__( 'category Icon Color', 'razmnix' ),
							'dependency' => [ 'categoryIcon', '==', true ],
						],
						// category Icon Size
						[
							'id'         => 'categoryIconSize',
							'type'       => 'dimensions',
							'title'      => esc_html__( 'Icon Size', 'razmnix' ),
							'dependency' => [ 'categoryIcon', '==', true ],
							'width'      => true,
							'height'     => false,
							'units'      => [ 'px' ],
						],

						//  Items
						[
							'id'     => 'Items',
							'type'   => 'group',
							'title'  => esc_html__( 'Items', 'razmnix' ),
							'fields' => [
								//Item Name
								[
									'id'    => 'Item',
									'type'  => 'text',
									'title' => esc_html__( 'Item Name', 'razmnix' ),
								],
								//Item Link
								[
									'id'    => 'ItemLink',
									'type'  => 'link',
									'title' => esc_html__( 'Item Link', 'razmnix' ),
								],
								//Item Description
								[
									'id'    => 'ItemDescription',
									'type'  => 'text',
									'title' => esc_html__( 'Item Description', 'razmnix' ),
								],
								//Item Icon
								[
									'id'      => 'ItemIcon',
									'type'    => 'button_set',
									'options' => [
										true  => esc_html__( 'Enable', 'razmnix' ),
										false => esc_html__( 'Disable', 'razmnix' ),
									],
									'title'   => esc_html__( 'Item Icon', 'razmnix' ),
									'default' => false
								],
								//Item Icon Base
								[
									'id'         => 'ItemIconBase',
									'type'       => 'button_set',
									'title'      => esc_html__( 'Icon Base', 'razmnix' ),
									'dependency' => [ 'ItemIcon', '==', true ],
									'options'    => [
										''            => esc_html__( 'None', 'razmnix' ),
										'phoenix'     => esc_html__( 'Phoenix', 'razmnix' ),
										'fontawesome' => esc_html__( 'Font Awesome', 'razmnix' ),
										'heroicons'   => esc_html__( 'Hero Icons', 'razmnix' ),
									],
								],

								// Item Icon Name fontawesome
								[
									'id'    => 'ItemIconName',
									'type'  => 'text',
									'title' => esc_html__( 'Icon Name', 'razmnix' ),
									'dependency' => [ 'ItemIconBase', '==', 'fontawesome' ],
								],
								// Item Icon Name phoenix
								[
									'id'    => 'ItemIconNameP',
									'type'  => 'text',
									'title' => esc_html__( 'Icon Name', 'razmnix' ),
									'dependency' => [ 'ItemIconBase', '==', 'phoenix' ],
								],
								// Item Icon Name heroicons
								[
									'id'    => 'ItemIconNameH',
									'type'  => 'text',
									'title' => esc_html__( 'Icon Name', 'razmnix' ),
									'dependency' => [ 'ItemIconBase', '==', 'heroicons' ],
								],
								//Item Icon Type fontawesome
								[
									'id'         => 'ItemIconType',
									'type'       => 'button_set',
									'title'      => esc_html__( 'Icon Type', 'razmnix' ),
									'dependency' => [ 'ItemIconBase', '==', 'fontawesome' ],
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
								],
								//Item Icon Type heroicons
								[
									'id'         => 'ItemIconTypeH',
									'type'       => 'button_set',
									'title'      => esc_html__( 'Icon Type', 'razmnix' ),
									'dependency' => [ 'ItemIconBase', '==', 'heroicons' ],
									'options'    => [
										'outline' => esc_html__( 'Outline', 'razmnix' ),
										'solid'   => esc_html__( 'Solid', 'razmnix' ),
										'mini'    => esc_html__( 'Mini', 'razmnix' ),
										'micro'   => esc_html__( 'Micro', 'razmnix' ),
									],
								],

								// Item Icon color
								[
									'id'         => 'ItemIconColor',
									'type'       => 'color',
									'title'      => esc_html__( 'Icon Color', 'razmnix' ),
									'dependency' => [ 'ItemIcon', '==', true ],
								],

								// Item Icon Size
								[
									'id'         => 'ItemIconSize',
									'type'       => 'dimensions',
									'title'      => esc_html__( 'Icon Size', 'razmnix' ),
									'dependency' => [ 'ItemIcon', '==', true ],
									'width'      => true,
									'height'     => false,
									'units'      => [ 'px' ],
								],

							],
						],


					],
				],
			];
	}
}