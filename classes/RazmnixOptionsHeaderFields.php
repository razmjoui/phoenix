<?php

namespace Razm;

class RazmnixOptionsHeaderFields {
	public function getHeaderFields(): array {

		return [



			//header Position
			[
				'id'      => 'headerPosition',
				'type'    => 'button_set',
				'title'   => esc_html__( 'header Position', 'razmnix' ),
				'help'    => esc_html__( 'Select header Position', 'razmnix' ),
				'options' => [
					'fixed'  => esc_html__( 'fixed', 'razmnix' ),
					'static' => esc_html__( 'static', 'razmnix' ),
					'sticky' => esc_html__( 'sticky', 'razmnix' ),
				],
				'default' => 'static'
			],
			//cart Header
			[
				'id'      => 'headerCart',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Header card layout', 'razmnix' ),
				'options' => [
					'1' => esc_html__( 'layout 1', 'razmnix' ),
					'2' => esc_html__( 'layout 2', 'razmnix' ),
				],
				'default' => '1'
			],

			//cart Header
			[
				'id'      => 'headerAuthBtnType',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Header card layout', 'razmnix' ),
				'options' => [
					'link'    => esc_html__( 'layout 1', 'razmnix' ),
					'default' => esc_html__( 'layout 2', 'razmnix' ),
				],
				'default' => '1'
			],
			// User btn
			[
				'id'      => 'headerUserBtn',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Header User Button', 'razmnix' ),
				'options' => [
					'link'  => esc_html__( 'link', 'razmnix' ),
					'modal' => esc_html__( 'Modal', 'razmnix' ),
				],
				'default' => 'modal'
			],

		];
	}
}