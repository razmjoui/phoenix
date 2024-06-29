<?php

namespace Razm;


use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
use Razm\RazmnixBaseWidget;


class RazmnixBtn extends RazmnixBaseWidget
{
    const NAME     = self::CONST . 'Btn';
    const DARK     = self::NAME . 'DarkMode';
    const LIGHT    = self::NAME . 'LightMode';
    const SECTIONS = [self::NAME, self::DARK, self::LIGHT];
    const TITLE    = 'Button';
    const ICON     = 'eicon-instagram-likes';


    protected function RazmnixBtn(): void
    {
        $this->start_section(self::NAME, 'General');
        $this->addSwitcher(self::NAME . 'Title', 'Title');
        $this->addText(self::NAME . 'TitleText', 'Title Text', 'Hello', self::NAME . 'Title', 'yes');
        $this->addAll(self::NAME . 'PaddingTitle', 'Padding Title', '.titleText', 'padding', self::NAME . 'Title', 'yes');
        $this->add_group_control(Group_Control_Typography::get_type(), ['name' => self::NAME . 'TitleTypography', 'selector' => '{{WRAPPER}} .titleText', 'condition' => [self::NAME . 'Title' => 'yes']]);

        $this->addControl(Controls_Manager::HOVER_ANIMATION, self::NAME . 'HoverAnimation', 'Hover Animation', '', '', '', '', '', '', '', '', 'not');


        $this->addSwitcher(self::NAME . 'Link', 'Link');
        $this->addText(self::NAME . 'Href', 'Link Address', home_url(), self::NAME . 'Link', 'yes');


        $this->addControl(Controls_Manager::NUMBER, self::NAME . 'Width', 'Width(px)', '.toggleThemeDark, {{WRAPPER}} .toggleThemeLight', 'width', '30', '20', '18', 'px');

        $this->addAll(self::NAME . 'Padding', 'Padding', '.toggleThemeDark, {{WRAPPER}} .toggleThemeLight', 'padding');
        $this->addAll(self::NAME . 'PaddingIcon', 'Padding Icon', '.toggleThemeDark svg, {{WRAPPER}} .toggleThemeLight svg', 'padding');


        $this->addAll(self::NAME . 'Margin', 'Margin', '.toggleThemeDark, {{WRAPPER}} .toggleThemeLight', 'margin');
        $this->addAll(self::NAME . 'Radius', 'Radius', '.toggleThemeDark, {{WRAPPER}} .toggleThemeLight', 'border-radius');


        $this->addSwitcher(self::NAME . 'Connection', 'Connection');


        $this->addConnection(self::NAME . 'ConnectionsTrue', 'Connections Enable', [], self::NAME . 'Connection', 'yes');
        $this->addConnection(self::NAME . 'ConnectionsFalse', 'Connections Disable', [], self::NAME . 'Connection', 'yes');
        $this->addConnection(self::NAME . 'ConnectionsToggle', 'Connections Toggle', [], self::NAME . 'Connection', 'yes');

        $this->addSwitcher(self::NAME . 'ShowAll', 'Show to all users', 'yes', 'no', 'yes');
        $this->addSwitcher(self::NAME . 'Logged', 'Display only to', 'users', 'guests', '', self::NAME . 'ShowAll', '');

        $this->end_controls_section();
    }

    protected function RazmnixBtnDarkMode(): void
    {

        $this->start_section(self::DARK . 'Section', 'Dark Mode');

        $this->addIcon(self::DARK, 'house-night', 'duotone');

        $this->addControl(Controls_Manager::NUMBER, self::DARK . 'WidthSvg', 'Width Icon(px)', '.toggleThemeDark svg', 'width', '22', '20', '18', 'px');
        $this->addControl(Controls_Manager::NUMBER, self::DARK . 'HeightSvg', 'Height Icon(px)', '.toggleThemeDark svg', 'height', '22', '20', '18', 'px');


        $this->start_controls_tabs(self::DARK . 'Tabs');
        $this->start_controls_tab(self::DARK . 'DefaultTab', ['label' => esc_html__('Default', 'razmnix'),]);

        $this->addControl(Controls_Manager::COLOR, self::DARK . 'IconColor', 'Color Light', '.toggleThemeDark svg', 'color');
        $this->addControl(Controls_Manager::COLOR, self::DARK . 'TitleColor', 'Color Title', '.titleText', 'color');

        $this->addControl(Controls_Manager::COLOR, self::DARK . 'BgtColor', 'background', '.toggleThemeDark', 'background-color');

        $this->add_group_control(Group_Control_Border::get_type(), ['name' => self::DARK . 'Border', 'selector' => '{{WRAPPER}} .toggleThemeDark',]);

        $this->end_controls_tab();
        $this->start_controls_tab(self::DARK . 'HoverTab', ['label' => esc_html__('Hover', 'razmnix'),]);

        $this->addControl(Controls_Manager::COLOR, self::DARK . 'IconColorHover', 'Color icon Hover', '.toggleThemeDark:hover svg', 'color');
        $this->addControl(Controls_Manager::COLOR, self::DARK . 'TitleColorHover', 'Color TitleHover', '.toggleThemeDark:hover .titleText', 'color');

        $this->addControl(Controls_Manager::COLOR, self::DARK . 'BgtColorHover', 'background Hover', '.toggleThemeDark:hover', 'background-color');

        $this->add_group_control(Group_Control_Border::get_type(), ['name' => self::DARK . 'BorderHover', 'selector' => '{{WRAPPER}} .toggleThemeDark:hover',]);
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->end_controls_section();
    }

    protected function RazmnixBtnLightMode()
    {

        $this->start_section(self::LIGHT . 'Section', 'LIGHT Mode');
        $this->addIcon(self::LIGHT, 'house', 'duotone');
        $this->addControl(Controls_Manager::NUMBER, self::LIGHT . 'WidthSvg', 'Width Icon(px)', '.toggleThemeLight svg', 'width', '22', '20', '18', 'px');
        $this->addControl(Controls_Manager::NUMBER, self::LIGHT . 'HeightSvg', 'Height Icon(px)', '.toggleThemeLight svg', 'height', '22', '20', '18', 'px');


        $this->start_controls_tabs(self::LIGHT . 'Tabs');
        $this->start_controls_tab(self::LIGHT . 'DefaultTab', ['label' => esc_html__('Default', 'razmnix'),]);

        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'IconColor', 'Color Light', '.toggleThemeLight svg', 'color');
        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'TitleColor', 'Color Title', '.titleText', 'color');

        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'BgtColor', 'background', '.toggleThemeLight', 'background-color');

        $this->add_group_control(Group_Control_Border::get_type(), ['name' => self::LIGHT . 'Border', 'selector' => '{{WRAPPER}} .toggleThemeLight',]);

        $this->end_controls_tab();
        $this->start_controls_tab(self::LIGHT . 'HoverTab', ['label' => esc_html__('Hover', 'razmnix'),]);

        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'IconColorHover', 'Color icon Hover', '.toggleThemeLight:hover svg', 'color');
        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'TitleColorHover', 'Color Title Hover', '.toggleThemeLight:hover .titleText', 'color');

        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'BgtColorHover', 'background Hover', '.toggleThemeLight:hover', 'background-color');

        $this->add_group_control(Group_Control_Border::get_type(), ['name' => self::LIGHT . 'BorderHover', 'selector' => '{{WRAPPER}} .toggleThemeLight:hover',]);
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->end_controls_section();
    }


    protected function render()
    {
        $settings = $this->get_settings_for_display();


        if ($settings[self::NAME . 'ShowAll'] == 'yes') {
            $this->render_element($settings);
        } elseif ($settings[self::NAME . 'Logged'] == 'yes') {
            if (is_user_logged_in()) {
                $this->render_element($settings);
            }
        } elseif ($settings[self::NAME . 'Logged'] !== 'yes') {
            if (!is_user_logged_in()) {
                $this->render_element($settings);
            }
        }
    }

    private function render_element($settings)
    {
        $elementClass = 'container';

        if ($settings[self::NAME . 'HoverAnimation']) {
            $elementClass .= ' elementor-animation-' . $settings[self::NAME . 'HoverAnimation'];
        }

        $this->add_render_attribute('wrapper', 'class', $elementClass);

        ?>
        <div <?php
        $this->print_render_attribute_string('wrapper');
        echo '@click="';
        $this->render_click_events($settings);
        echo '"';
        ?>>
            <?php if ($settings[self::NAME . 'Link'] === 'yes'): ?><a href = "<?= $settings[self::NAME . 'Href']; ?>"><?php endif; ?>
                <div :class = "isDarkness ? 'toggleThemeDark' : 'toggleThemeLight'"
                     class = "flex w-full items-center relative justify-center transition cursor-pointer bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc] text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">
                    <div :class = "!isDarkness ? 'hidden' : ''"><?= get_svg_code($settings[self::DARK . 'Type'], $settings[self::DARK . 'Name']); ?></div>
                    <div :class = "isDarkness ? 'hidden' : ''"><?= get_svg_code($settings[self::LIGHT . 'Type'], $settings[self::LIGHT . 'Name']); ?></div>
                    <?php if ($settings[self::NAME . 'Title'] === 'yes'): ?><span class = "titleText"><?= $settings[self::NAME . 'TitleText']; ?></span><?php endif; ?>
                </div>
                <?php if ($settings[self::NAME . 'Link'] === 'yes') {
                    echo '</a>';
                } ?>
        </div>
        <?php
    }

    private function render_click_events($settings)
    {
        if (!is_null($settings[self::NAME . 'ConnectionsTrue']) && !empty($settings[self::NAME . 'ConnectionsTrue'])) {
            foreach ($settings[self::NAME . 'ConnectionsTrue'] as $setting) {
                echo "$setting = true; ";
            }
        }
        if (!is_null($settings[self::NAME . 'ConnectionsFalse']) && !empty($settings[self::NAME . 'ConnectionsFalse'])) {
            foreach ($settings[self::NAME . 'ConnectionsFalse'] as $setting) {
                echo "$setting = false; ";
            }
        }
        if (!is_null($settings[self::NAME . 'ConnectionsToggle']) && !empty($settings[self::NAME . 'ConnectionsToggle'])) {
            foreach ($settings[self::NAME . 'ConnectionsToggle'] as $setting) {
                echo "$setting = !$setting; ";
            }
        }
    }
}