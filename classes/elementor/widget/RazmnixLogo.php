<?php

namespace RazmW;

use Elementor\Controls_Manager;
use RazmS\RazmnixSetting;


class RazmnixLogo extends RazmnixBaseWidget
{
    public const NAME     = self::CONST . 'Logo';
    public const DARK     = self::NAME . 'DarkMode';
    public const LIGHT    = self::NAME . 'LightMode';
    public const SECTIONS = [self::NAME , self::DARK , self::LIGHT];
    public const TITLE    = 'Logo';
    public const ICON     = 'eicon-logo';


    protected function razmnixLogo():void
    {

        $this->start_section(self::NAME , 'General');

        $this->addText(self::NAME . 'Href' , 'Link' , home_url());

        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'width' , 'Width' , 'img' , 'width' , 'px');

        $this->end_controls_section();
    }

    protected function razmnixLogoDarkMode():void
    {

        $this->start_section(self::DARK , 'Dark Mode');

        $this->addImg(self::DARK . 'IMG', 'Choose Image', RazmnixSetting::$headerLogoUrlDark);

        $this->end_controls_section();
    }

    protected function razmnixLogoLightMode()
    {

        $this->start_section(self::LIGHT , 'LIGHT Mode');

        $this->addImg(self::LIGHT . 'IMG', 'Choose Image', RazmnixSetting::$headerLogoUrl);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>

        <a href = "<?= esc_url($settings[ 'RazmnixLogoHref' ]) ?>">
            <img class = "hidden dark:inline-block darkLogo"
                 src = "<?= esc_url($settings[ 'RazmnixLogoDarkModeIMG' ]['url']) ?>"
                 alt = "<?= esc_attr(get_bloginfo('name')) ?>">
            <img class = "dark:hidden lightLogo"
                 src = "<?= esc_url($settings[ 'RazmnixLogoLightModeIMG' ]['url']) ?>"
                 alt = "<?= esc_attr(get_bloginfo('name')) ?>">
        </a>


        <?php
    }
}


