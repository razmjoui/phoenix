<?php

namespace Razm\widgets;

use Elementor\Controls_Manager;
use Razm\RazmnixBaseWidget;
use Razm\RazmnixGetOptions;


class RazmnixLogo extends RazmnixBaseWidget
{
    const NAME     = self::CONST . 'Logo';
    const DARK     = self::NAME . 'DarkMode';
    const LIGHT    = self::NAME . 'LightMode';
    const SECTIONS = [self::NAME , self::DARK , self::LIGHT];
    const TITLE    = 'Logo';
    const ICON     = 'eicon-logo';


    protected function RazmnixLogo():void
    {

        $this->start_section(self::NAME , 'General');

        $this->addText(self::NAME . 'Href' , 'Link' , home_url());

        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'width' , 'Width' , 'img' , 'width' , 208 , 160 , 96 , 'px');

        $this->end_controls_section();
    }

    protected function RazmnixLogoDarkMode():void
    {

        $this->start_section(self::DARK , 'Dark Mode');

        $this->addImg(self::DARK . 'IMG', 'Choose Image', RazmnixGetOptions::$headerLogoUrlDark);

        $this->end_controls_section();
    }

    protected function RazmnixLogoLightMode()
    {

        $this->start_section(self::LIGHT , 'LIGHT Mode');

        $this->addImg(self::LIGHT . 'IMG', 'Choose Image', RazmnixGetOptions::$headerLogoUrl);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>

        <a href = "<?= esc_url($settings[ 'RazmnixLogoHref' ]) ?>">
            <img class = "hidden dark:inline-block darkLogo"
                 src = "<?= esc_url($settings[ 'RazmnixLogoDarkModeIMG' ]['url']) ?>"
                 alt = "<?= esc_attr(get_bloginfo('name')); ?>">
            <img class = "dark:hidden lightLogo"
                 src = "<?= esc_url($settings[ 'RazmnixLogoLightModeIMG' ]['url']) ?>"
                 alt = "<?= esc_attr(get_bloginfo('name')); ?>">
        </a>


        <?php
    }
}


