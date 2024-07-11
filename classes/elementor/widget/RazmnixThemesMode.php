<?php

namespace RazmW;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;


class RazmnixThemesMode extends RazmnixBaseWidget {

	const NAME     = 'themes_mode_btn';
	const TITLE    = 'Dark Mode Button';
	const ICON     = 'eicon-dark-mode';
	const SECTIONS = [ 'themes_mode_section', 'dark_mode_section', 'light_mode_section' ];


	protected function themes_mode_section(): void {

		$this->start_controls_section( 'themes_mode_section', [ 'label' => esc_html__( 'Themes Mode', 'razmnix' ), 'tab' => Controls_Manager::TAB_CONTENT, ] );

		$this->addControl( Controls_Manager::NUMBER, 'button_radius', 'Button Radius', '.toggleThemeDark, {{WRAPPER}} .toggleThemeLight', 'border-radius', 100, 100, 100, 'px' );

		$this->addControl( Controls_Manager::NUMBER, 'button_width', 'Button Width', '.toggleThemeDark, {{WRAPPER}} .toggleThemeLight', 'width', 48, 48, 40, 'px' );

		$this->addControl( Controls_Manager::NUMBER, 'button_height', 'Button Height', '.toggleThemeDark, {{WRAPPER}} .toggleThemeLight', 'height', 48, 48, 40, 'px' );

		$this->end_controls_section();
	}

	protected function dark_mode_section(): void {

		$this->start_controls_section( 'dark_mode_section', [ 'label' => esc_html__( 'Dark Mode', 'razmnix' ), 'tab' => Controls_Manager::TAB_CONTENT, ] );

		$this->addIcon( 'iconDark', 'moon' );

		$this->addControl( Controls_Manager::NUMBER, 'iconDarkHeight', 'Height Icon Dark', '.toggleThemeDark svg', 'height', 22, 22, 18, 'px' );

		$this->addControl( Controls_Manager::NUMBER, 'iconDarkWidth', 'Width Icon Dark', '.toggleThemeDark svg', 'width', 22, 20, 18, 'px' );

		$this->start_controls_tabs( 'dark_mode_tabs' );
		$this->start_controls_tab( 'DefaultTabDark', [ 'label' => esc_html__( 'Default', 'razmnix' ), ] );

		$this->addControl( Controls_Manager::COLOR, 'iconDarkColor', 'Color icon Dark', '.toggleThemeDark svg', 'color' );

		$this->addControl( Controls_Manager::COLOR, 'bgDarkColor', 'background button Dark', '.toggleThemeDark', 'background-color' );

		$this->add_group_control( Group_Control_Border::get_type(), [ 'name' => 'borderDark', 'selector' => '{{WRAPPER}} .toggleThemeDark', ] );

		$this->end_controls_tab();
		$this->start_controls_tab( 'HoverTabDark', [ 'label' => esc_html__( 'Hover', 'razmnix' ), ] );

		$this->addControl( Controls_Manager::COLOR, 'iconDarkColorHover', 'Color icon Dark', '.toggleThemeDark:hover svg', 'color' );

		$this->addControl( Controls_Manager::COLOR, 'bgDarkColorHover', 'background button Dark', '.toggleThemeDark:hover', 'background-color' );

		$this->add_group_control( Group_Control_Border::get_type(), [ 'name' => 'borderDarkHover', 'selector' => '{{WRAPPER}} .toggleThemeDark:hover', ] );

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function light_mode_section() {

		$this->start_controls_section( 'light_mode_section', [ 'label' => esc_html__( 'Light Mode', 'razmnix' ), 'tab' => Controls_Manager::TAB_CONTENT, ] );

		$this->addIcon( 'iconLight', 'sun-bright', 'duotone' );

		$this->addControl( Controls_Manager::NUMBER, 'iconLightHeight', 'Height Icon Light', '.toggleThemeLight svg', 'height', '22', '20', '18', 'px' );

		$this->addControl( Controls_Manager::NUMBER, 'iconLightWidth', 'Width Icon Light', '.toggleThemeLight svg', 'width', '22', '20', '18', 'px' );

		$this->start_controls_tabs( 'light_mode_tabs' );
		$this->start_controls_tab( 'DefaultTabLight', [ 'label' => esc_html__( 'Default', 'razmnix' ), ] );

		$this->addControl( Controls_Manager::COLOR, 'iconLightColor', 'Color icon Light', '.toggleThemeLight svg', 'color' );

		$this->addControl( Controls_Manager::COLOR, 'bgLightColor', 'background button Light', '.toggleThemeLight', 'background-color' );

		$this->add_group_control( Group_Control_Border::get_type(), [ 'name' => 'borderLight', 'selector' => '{{WRAPPER}} .toggleThemeLight', ] );

		$this->end_controls_tab();
		$this->start_controls_tab( 'HoverTabLight', [ 'label' => esc_html__( 'Hover', 'razmnix' ), ] );

		$this->addControl( Controls_Manager::COLOR, 'iconLightColorHover', 'Color icon Light', '.toggleThemeLight:Hover svg', 'color' );

		$this->addControl( Controls_Manager::COLOR, 'bgLightColorHover', 'background button Light', '.toggleThemeLight:Hover', 'background-color' );

		$this->add_group_control( Group_Control_Border::get_type(), [ 'name' => 'borderLightHover', 'selector' => '{{WRAPPER}} .toggleThemeLight:Hover', ] );

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		?>

        <div x-data = "themeChanger()" @click = "toggleThemes(); isDarkness = !isDarkness" class = "toggleTheme cursor-pointer">
            <div :class = "isDark ? 'toggleThemeDark ': 'toggleThemeLight' "
                 class = "flex lg:w-12 lg:h-12 size-10 items-center relative justify-center rounded-full transition cursor-pointer bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc] text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">
                <div class = "hidden dark:flex size-5"><?= razmnixIcon( 'fontawesome/' . $settings['iconDarkType'], $settings['iconDarkName'] ) ?></div>
                <div class = "dark:hidden size-5"><?= razmnixIcon( 'fontawesome/' . $settings['iconLightType'], $settings['iconLightName'] ) ?></div>
            </div>
        </div>


		<?php
	}
}


