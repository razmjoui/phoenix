<?php

namespace Razm;

use Razm\widgets\RazmnixBtn;
use Razm\widgets\RazmnixLogo;
use Razm\widgets\RazmnixSearch;
use Razm\widgets\RazmnixThemesMode;


class RazmnixElementor
{

    public function RegisterWidgets($widgets_manager)
    {


        require_once(RAZMNIX_WIDGETS . 'RazmnixSearch.php');
        require_once(RAZMNIX_WIDGETS . 'RazmnixThemesMode.php');
        require_once(RAZMNIX_WIDGETS . 'RazmnixLogo.php');
        require_once(RAZMNIX_WIDGETS . 'RazmnixBtn.php');

//        require_once(RAZMNIX_WIDGETS . 'RazmnixCart.php');


        $widgets_manager->register(new RazmnixSearch());
        $widgets_manager->register(new RazmnixThemesMode());
        $widgets_manager->register(new RazmnixLogo());
        $widgets_manager->register(new RazmnixBtn());


    }

    private function setup_hooks()
    {
        // Register Widgets.
        add_action('elementor/widgets/register', [$this, 'RegisterWidgets']);

        // Register custom widget categories.
        add_action('elementor/elements/categories_registered', [$this, 'ElementorCategories']);


        // Add Class to Container Widget
        add_action('elementor/frontend/before_render', [$this, 'addClassContainerAlpine'], 10, 1);
        add_action('elementor/widget/before_render_content', [$this, 'addClassContainerAlpine'], 10, 1);
        add_action('elementor/frontend/after_enqueue_styles', function () {
            if (\Elementor\Plugin::$instance->preview->is_preview_mode()) {
                add_action('elementor/frontend/widget/before_render', 'addClassContainerAlpine', 10, 1);
            }
        });


        // Add Controls to Container Widget
        add_action('elementor/element/container/section_background/before_section_start', [$this, 'customControlsContainer'], 10, 2);

    }


    public function addClassContainerAlpine($widget)
    {
        if ($widget->get_name() === 'container') {
            $widget->add_render_attribute('_wrapper', 'x-bind:class', "isDarkness ? 'razmnixDark' : 'razmnixLight'");
        }
    }


    public function customControlsContainer($element, $args)
    {
        $this->customControlsContainerDark($element, $args);
        $this->customControlsContainerLight($element, $args);

    }

    public function customControlsContainerDark($element, $args)
    {
        $element->start_controls_section(
            'sectionBagDark',
            [
                'label' => esc_html__('Background Dark', 'razmnix'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $element->start_controls_tabs('tabDark');
        $element->start_controls_tab(
            'tabDarkNormal',
            [
                'label' => esc_html__('Normal', 'elementor'),
            ]
        );
        $element->add_control(
            'bagDark',
            [
                'label'     => esc_html__('Background', 'elementor'),
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
        $element->end_controls_tab();
        $element->start_controls_tab(
            'tabDarkHover',
            [
                'label' => esc_html__('Hover', 'elementor'),
            ]
        );
        $element->add_control(
            'bagDarkHover',
            [
                'label'     => esc_html__('Background Hover', 'elementor'),
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
        $element->end_controls_tab();
        $element->end_controls_tabs();
        $element->end_controls_section();
    }

    public function customControlsContainerLight($element, $args)
    {
        $element->start_controls_section(
            'sectionBagLight',
            [
                'label' => esc_html__('Background Light', 'razmnix'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $element->start_controls_tabs('tabLight');
        $element->start_controls_tab(
            'tabLightNormal',
            [
                'label' => esc_html__('Normal', 'elementor'),
            ]
        );
        $element->add_control(
            'bagLight',
            [
                'label'     => esc_html__('Background', 'elementor'),
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
        $element->end_controls_tab();
        $element->start_controls_tab(
            'tabLightHover',
            [
                'label' => esc_html__('Hover', 'elementor'),
            ]
        );
        $element->add_control(
            'bagLightHover',
            [
                'label'     => esc_html__('Background Hover', 'elementor'),
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
        $element->end_controls_tab();
        $element->end_controls_tabs();
        $element->end_controls_section();
    }


    public function ElementorCategories($elements_manager)
    {
        $elements_manager->add_category(
            'razmnixWidgets',
            [
                'title' => esc_html__('Phoenix', 'razmnix'),
                'icon'  => 'fa fa-plug',
            ]
        );
    }

    public function __construct()
    {
        $this->setup_hooks();
    }
}