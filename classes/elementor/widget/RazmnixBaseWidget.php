<?php

namespace RazmW;



use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class RazmnixBaseWidget extends Widget_Base
{
    protected const CONST = 'Razmnix';


    public function get_name(): string
    {
        return static::NAME;
    }

    public function get_title(): string
    {
        return esc_html__(static::TITLE, 'razmnix');
    }

    public function get_icon(): string
    {
        return static::ICON;
    }

    public function get_categories(): array
    {
        return ['razmnixWidgets'];
    }

    protected function register_controls()
    {
        foreach (static::SECTIONS as $section) {
            $this->$section();
        }
    }

    protected function addIcon(string $prefix, string $iconName, string $iconType = '', string $condition = '', string $conditionValue = ''): void
    {

        $control_options_name = [
            'label'   => esc_html__("Icon {$prefix} Name", 'razmnix'),
            'type'    => Controls_Manager::TEXT,
            'default' => $iconName
        ];

        $control_options_type = [
            'label'   => esc_html__("Type Icon {$prefix}", 'razmnix'),
            'type'    => Controls_Manager::SELECT,
            'default' => $iconType,
            'options' => [
                ''              => esc_html__('none', 'razmnix'),
                'brands'        => esc_html__('brands', 'razmnix'),
                'duotone'       => esc_html__('duotone', 'razmnix'),
                'light'         => esc_html__('light', 'razmnix'),
                'regular'       => esc_html__('regular', 'razmnix'),
                'solid'         => esc_html__('solid', 'razmnix'),
                'thin'          => esc_html__('thin', 'razmnix'),
                'sharp-light'   => esc_html__('sharp-light', 'razmnix'),
                'sharp-regular' => esc_html__('sharp-regular', 'razmnix'),
                'sharp-solid'   => esc_html__('sharp-solid', 'razmnix'),
                'sharp-thin'    => esc_html__('sharp-thin', 'razmnix'),
            ],
        ];


        if ($condition !== '') {
            $control_options_name['condition'] = [$condition => $conditionValue];
            $control_options_type['condition'] = [$condition => $conditionValue];
        }


        $this->add_control("{$prefix}Name", $control_options_name);
        $this->add_control("{$prefix}Type", $control_options_type);
    }

    protected function addControl($Controls_Manager, string $prefix, string $label, string $class = '', string $selector = '', $desktop = '', $tablet = '', $mobile = '', $unit = '', string $condition = '', string $conditionValue = '', string $not = null): void
    {
        $controlOptions = array_filter(
            [
                'label'           => esc_html__($label, 'razmnix'),
                'type'            => $Controls_Manager,
                'desktop_default' => $desktop,
                'tablet_default'  => $tablet,
                'mobile_default'  => $mobile,
            ]);

        if (!empty($selector)) {
            $controlOptions['selectors'] = ["{{WRAPPER}} $class" => "$selector: {{VALUE}}$unit",];
        }


        if (!empty($condition)) {
            $controlOptions['condition'] = [$condition => $conditionValue];
        }

        if (is_null($not)) {
            $this->add_responsive_control($prefix, $controlOptions);
        } else {
            $this->add_control($prefix, $controlOptions);
        }
    }

    protected function addConnection(string $prefix, string $label, array $default = [], string $condition = '', string $conditionValue = ''): void
    {


        $controlOptions = array_filter(
            [
                'label'       => esc_html__($label, 'razmnix'),
                'type'        => Controls_Manager::SELECT2,
                'default'     => $default,
                'label_block' => true,
                'multiple'    => true,
                'options'     => [],
            ]);

        $connections = get_option('razmnix_settings')['Connections'] ?? [];

        foreach ($connections as $value) {
            foreach ($value as $connection) {
                $controlOptions['options'][$connection] = esc_html__($connection, 'razmnix');
            }
        }


        if (!empty($condition)) {
            $controlOptions['condition'] = [$condition => $conditionValue];
        }
        $this->add_control($prefix, $controlOptions);

    }

    protected function addAll(string $prefix, string $label, string $class, string $selector, string $condition = '', string $conditionValue = ''): void
    {
        $control_options = [
            'label'      => esc_html__($label, 'razmnix'),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em', 'rem', 'vh', 'vw'],
            'selectors'  => [
                "{{WRAPPER}} $class" => "$selector: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};",
            ],
        ];

        if (!empty($condition)) {
            $control_options['condition'] = [$condition => $conditionValue];
        }

        $this->add_responsive_control($prefix, $control_options);
    }

    protected function addBtn(string $prefix, int $loop, string $condition = '', string $conditionValue = ''): void
    {
        $controlOptions = [
            'label'   => esc_html__("Select Style {$prefix}", 'razmnix'),
            'type'    => Controls_Manager::SELECT,
            'default' => 1,
            'options' => [],
        ];

        for ($i = 1; $i <= $loop; $i++) {
            $controlOptions['options'][$i] = esc_html__("Style {$i}", 'razmnix');
        }

        if ($condition !== '') {
            $controlOptions['condition'] = [$condition => $conditionValue];
        }


        $this->add_control($prefix . 'Style', $controlOptions);

    }

    protected function start_section(string $prefix, string $label): void
    {
        $this->start_controls_section(
            $prefix,
            [
                'label' => esc_html__($label, 'razmnix'),
                'type'  => Controls_Manager::TAB_CONTENT
            ]
        );
    }

    protected function addText(string $prefix, string $label, string $default = '', string $condition = '', string $conditionValue = ''): void
    {
        $control_options = [
            'label'   => esc_html__($label, 'razmnix'),
            'type'    => Controls_Manager::TEXT,
            'default' => $default
        ];

        if ($condition !== '') {
            $control_options['condition'] = [$condition => $conditionValue];
        }

        $this->add_control($prefix, $control_options);
    }

    protected function addSwitcher(string $prefix, string $label, string $label_on = 'on', string $label_off = 'off', string $default = '', string $condition = '', string $conditionValue = '')
    {

        $control_options = [
            'label'     => esc_html__($label, 'razmnix'),
            'type'      => Controls_Manager::SWITCHER,
            'label_on'  => esc_html__($label_on, 'razmnix'),
            'label_off' => esc_html__($label_off, 'razmnix'),
            'default'   => $default
        ];

        if ($condition !== '') {
            $control_options['condition'] = [$condition => $conditionValue];
        }

        $this->add_control($prefix, $control_options);
    }

    protected function addImg(string $prefix, string $label, string $default = '', string $condition = '', string $conditionValue = '')
    {
        $control_options = [
            'label'   => esc_html__($label, 'razmnix'),
            'type'    => Controls_Manager::MEDIA,
            'default' => ['url' => $default]
        ];
        if ($condition !== '') {
            $control_options['condition'] = [$condition => $conditionValue];
        }

        $this->add_control($prefix, $control_options);
    }


}

