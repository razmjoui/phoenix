<?php

namespace RazmE;

use Elementor\Controls_Manager;
use Razm\RazmnixGetOptions;


class RazmnixSearch extends RazmnixBaseWidget
{
    const NAME     = self::CONST . 'Search';
    const DARK     = self::NAME . 'DarkMode';
    const LIGHT    = self::NAME . 'LightMode';
    const SECTIONS = [self::NAME , self::DARK , self::LIGHT];
    const TITLE    = 'Search';
    const ICON     = 'eicon-search-bold';


    protected function RazmnixSearch():void
    {

        $this->start_section(self::NAME , 'General');

        $this->addText(self::NAME . 'Placeholder' , 'Placeholder Search' , RazmnixGetOptions::$headerSearchPlace);

        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'Width' , 'Search Width(%)' , 'input' , 'width' , 100 , 100 , 100 , '%');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'PaddingLeft' , 'Search Padding Left(PX)' , 'input' , 'padding-left' , null , null , null , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'PaddingRight' , 'Search Padding Right(PX)' , 'input' , 'padding-right' , 48 , 44 , 40 , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'Radius' , 'Search Radius' , 'input' , 'border-radius' , 12 , 12 , 12 , 'px');

        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'ButtonWidth' , 'Button Width(px)' , 'button' , 'width' , 16 , 16 , 16 , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'ButtonHeight' , 'Button Height(px)' , 'button' , 'height' , 16 , 16 , 16 , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'ButtonSpacingLeft' , 'Button Spacing Left(PX)' , 'button' , 'left' , null , null , null , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'ButtonSpacingRight' , 'Button Spacing Right(PX)' , 'button' , 'right' , 20 , 18 , 16 , 'px');
        $this->addIcon(self::NAME.'Icon' , 'magnifying-glass' , 'duotone');




        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'SpinnerWidth' , 'Spinner Width(px)' , '.spinner' , 'width' , 20 , 20 , 20 , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'SpinnerHeight' , 'Spinner Height(px)' , '.spinner' , 'height' , 20 , 20 , 20 , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'SpinnerSpacingLeft' , 'Spinner Spacing Left(PX)' , '.spinner' , 'left' , 20 , 20 , 20 , 'px');
        $this->addControl(Controls_Manager::NUMBER , self::NAME . 'SpinnerSpacingRight' , 'Spinner Spacing Right(PX)' , '.spinner' , 'right' , null , null , null , 'px');

        $this->addIcon(self::NAME.'Spinner' , 'spinner' , 'duotone');

        $this->end_controls_section();
    }

    protected function RazmnixSearchDarkMode():void
    {

        $this->start_section(self::DARK , 'Dark Mode');

        $this->addControl(Controls_Manager::COLOR , self::DARK . 'InputText' , 'Text Color Input Dark' , '.searchDark' , 'color');
        $this->addControl(Controls_Manager::COLOR , self::DARK . 'InputBag' , 'Background Color Input Dark' , '.searchDark' , 'background-color');

        $this->addControl(Controls_Manager::COLOR , self::DARK . 'ButtonText' , 'Color Icon Button Dark' , '.btnDark' , 'color');
        $this->addControl(Controls_Manager::COLOR , self::DARK . 'ButtonBag' , 'Background Color Button Dark' , '.btnDark' , 'background-color');

        $this->addControl(Controls_Manager::COLOR , self::DARK . 'Placeholder' , 'Color Placeholder Dark' , 'input:placeholder' , 'color');


        $this->end_controls_section();
    }

    protected function RazmnixSearchLightMode()
    {

        $this->start_section(self::LIGHT , 'LIGHT Mode');
        $this->addControl(Controls_Manager::COLOR , self::LIGHT . 'InputText' , 'Text Color Input Light' , '.searchLight' , 'color');
        $this->addControl(Controls_Manager::COLOR , self::LIGHT . 'InputBag' , 'Background Color Input Light' , '.searchLight' , 'background-color');

        $this->addControl(Controls_Manager::COLOR , self::LIGHT . 'ButtonText' , 'Color Icon Button Light' , '.btnLight' , 'color');
        $this->addControl(Controls_Manager::COLOR , self::LIGHT . 'ButtonBag' , 'Background Color Button Light' , '.btnLight' , 'background-color');

        $this->addControl(Controls_Manager::COLOR , self::LIGHT . 'Placeholder' , 'Color Placeholder Light' , 'input:placeholder' , 'color');

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>

        <form action = "<?php echo esc_url(home_url('/')) ?>"
              x-data = "{ searchBox : false }"
              x-bind:class = "searchBox ? 'z-50 ': ''"
              class = "items-center relative mx-auto lg:flex hidden "
              @click.away = "searchBox = false" xmlns:x-bind = "http://www.w3.org/1999/xhtml">

            <input x-data = "" @click = "overlayShow = true; searchBox = true" name = "s"
                   type = "text"
                   placeholder = "<?= esc_attr($settings[ self::NAME . 'Placeholder' ]) ?>"
                   x-bind:class = "isDarkness ? 'searchDark': 'searchLight'"
                   class = "w-full py-4 bg-[#eceeef] rounded-xl rtl:pr-12 ltr:pl-12 dark:text-white dark:bg-[#1b314c] placeholder-[#64748b] dark:placeholder-white text-xs border-none">
            <input type = "hidden" name = "post_type" value = "product"/>
            <button type = "submit"
                    x-bind:class = "isDarkness ? 'btnDark': 'btnLight'"
                    class = "absolute rtl:right-5 ltr:left-5 ltr:rotate-90 text-[#64748b] dark:text-white size-4">
                <?= razmnixIcon('fontawesome/' . $settings[ self::NAME . 'IconType' ] , $settings[ self::NAME .  'IconName' ]); ?>
            </button>

            <div x-cloak x-show = "searchBox" class = "absolute spinner rtl:left-5 ltr:right-5 size-5 animate-spin">
                <?= razmnixIcon('fontawesome/' . $settings[ self::NAME . 'SpinnerType' ] , $settings[ self::NAME .  'SpinnerName' ]); ?>
            </div>

        </form>

        <?php
    }
}


