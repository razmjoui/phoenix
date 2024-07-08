<?php

namespace RazmE;

class RazmnixDefaultWidget {

	public function __construct() {
		// Add Class to All Widget
		add_action( 'elementor/frontend/before_render', [ $this, 'addClass' ], 10, 1 );
		add_action( 'elementor/frontend/after_enqueue_styles', function () {
			if ( \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
				add_action( 'elementor/frontend/widget/before_render', [ $this, 'addClass' ], 10, 1 );
			}
		} );

		// Add Controls to Container Widget
		add_action( 'elementor/element/container/section_background/before_section_start', [ $this, 'customControls' ], 10, 2 );


	}


	public function addClass( $widget ) {
		$widget->add_render_attribute( '_wrapper', ':class', "isDarkness ? 'razmnixDark' : 'razmnixLight'" );
	}

	public function customControls( $element, $args ) {
		$this->customControlsDark( $element, $args );
		$this->customControlsLight( $element, $args );

	}

	public function customControlsDark( $element, $args ) {
		$element->start_controls_section(
			'sectionDark',
			[
				'label' => esc_html__( 'Dark Mode', 'razmnix' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$element->start_controls_tabs( 'tabDark' );
		$element->start_controls_tab(
			'tabDarkNormal',
			[
				'label' => esc_html__( 'Normal', 'elementor' ),
			]
		);
		$element->add_control(
			'bagDark',
			[
				'label'     => esc_html__( 'Background', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}.razmnixDark' => 'background-color: {{VALUE}}',
				],
			]
		);
		$element->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'BorderDark',
				'selector' => '{{WRAPPER}}.razmnixDark',
			]
		);


		$element->add_control(
			'colorDark',
			[
				'label'     => esc_html__( 'Color', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}.razmnixDark' => 'color: {{VALUE}}',
				],
			]
		);


		$element->end_controls_tab();
		$element->start_controls_tab(
			'tabDarkHover',
			[
				'label' => esc_html__( 'Hover', 'elementor' ),
			]
		);
		$element->add_control(
			'bagDarkHover',
			[
				'label'     => esc_html__( 'Background Hover', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover.razmnixDark' => 'background-color: {{VALUE}}',
				],
			]
		);
		$element->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'BorderDarkHover',
				'selector' => '{{WRAPPER}}:hover.razmnixDark',
			]
		);

		$element->add_control(
			'colorDarkHover',
			[
				'label'     => esc_html__( 'Color Hover', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover.razmnixDark' => 'color: {{VALUE}}',
				],
			]
		);
		$element->end_controls_tab();
		$element->end_controls_tabs();
		$element->end_controls_section();
	}

	public function customControlsLight( $element, $args ) {
		$element->start_controls_section(
			'sectionLight',
			[
				'label' => esc_html__( 'Light Mode', 'razmnix' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$element->start_controls_tabs( 'tabLight' );
		$element->start_controls_tab(
			'tabLightNormal',
			[
				'label' => esc_html__( 'Normal', 'elementor' ),
			]
		);
		$element->add_control(
			'bagLight',
			[
				'label'     => esc_html__( 'Background', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}.razmnixLight' => 'background-color: {{VALUE}}',
				],
			]
		);
		$element->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'BorderLight',
				'selector' => '{{WRAPPER}}.razmnixLight',
			]
		);


		$element->add_control(
			'colorLight',
			[
				'label'     => esc_html__( 'Color', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}.razmnixDark' => 'color: {{VALUE}}',
				],
			]
		);


		$element->end_controls_tab();
		$element->start_controls_tab(
			'tabLightHover',
			[
				'label' => esc_html__( 'Hover', 'elementor' ),
			]
		);
		$element->add_control(
			'bagLightHover',
			[
				'label'     => esc_html__( 'Background Hover', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover.razmnixLight' => 'background-color: {{VALUE}}',
				],
			]
		);
		$element->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'     => 'BorderLightHover',
				'selector' => '{{WRAPPER}}:hover.razmnixLight',
			]
		);


		$element->add_control(
			'colorLightHover',
			[
				'label'     => esc_html__( 'Color Hover', 'elementor' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}:hover.razmnixDark' => 'color: {{VALUE}}',
				],
			]
		);

		$element->end_controls_tab();
		$element->end_controls_tabs();
		$element->end_controls_section();
	}

}
