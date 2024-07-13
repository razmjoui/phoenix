<?php

namespace RazmW;

use Elementor\Controls_Manager;
use RazmS\RazmnixSetting;


class RazmnixSearch extends RazmnixBaseWidget
{
    public const NAME = self::CONST . 'Search';
    public const DARK = self::NAME . 'Dark';
    public const LIGHT = self::NAME . 'Light';
    public const SECTIONS = [self::NAME, self::DARK, self::LIGHT];
    public const TITLE = 'Search';
    public const ICON = 'eicon-search-bold';


    protected function razmnixSearch(): void
    {

        $this->start_section(self::NAME, 'General');
        $this->addText(self::NAME . 'Placeholder', 'Placeholder Search', RazmnixSetting::$headerSearchPlace);

        $this->addSize(self::NAME . 'SearchSize', 'Search(%)', 'input', '%');
        $this->addAll(self::NAME . 'Padding', 'Padding', 'input', 'padding');
        $this->addAll(self::NAME . 'Radius', 'Radius', 'input', 'border-radius');

        $this->addSize(self::NAME . 'ButtonSize', 'Button(px)', 'button');
        $this->addAll(self::NAME . 'ButtonInset', 'Button Position', 'button', 'inset');

        $this->addIcon(self::NAME . 'Icon', 'Icon');
        $this->addControl(Controls_Manager::NUMBER, self::NAME . 'WidthSvg', 'Width Icon(px)', 'button svg', 'width', 'px');
        $this->addControl(Controls_Manager::NUMBER, self::NAME . 'HeightSvg', 'Height Icon(px)', 'button svg', 'height', 'px');

        $this->addIcon(self::NAME . 'Spinner', 'Spinner');
        $this->addSize(self::NAME . 'SpinnerSize', 'Spinner(px)', '.spinner');
        $this->addAll(self::NAME . 'SpinnerInset', 'Spinner Position', '.spinner', 'inset');

        $this->end_controls_section();
    }

    protected function razmnixSearchDark(): void
    {
        $this->start_controls_section(
            self::DARK,
            [
                'label' => esc_html__('Dark Mode', 'razmnix'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->addControl(Controls_Manager::COLOR, self::DARK . 'InputText', 'Text Color', '.searchDark', 'color');
        $this->addControl(Controls_Manager::COLOR, self::DARK . 'InputBag', 'Background', '.searchDark', 'background-color');

        $this->addControl(Controls_Manager::COLOR, self::DARK . 'ButtonText', 'Color Icon', '.btnDark', 'color');
        $this->addControl(Controls_Manager::COLOR, self::DARK . 'ButtonBag', 'Background Icon', '.btnDark', 'background-color');

        $this->addControl(Controls_Manager::COLOR, self::DARK . 'Placeholder', 'Color Placeholder', 'input:placeholder', 'color');


        $this->end_controls_section();
    }

    protected function razmnixSearchLight()
    {
        $this->start_controls_section(
            self::LIGHT,
            [
                'label' => esc_html__('LIGHT Mode', 'razmnix'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'InputText', 'Text Color', '.searchLight', 'color');
        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'InputBag', 'Background', '.searchLight', 'background-color');

        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'ButtonText', 'Color Icon', '.btnLight', 'color');
        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'ButtonBag', 'Background Icon', '.btnLight', 'background-color');

        $this->addControl(Controls_Manager::COLOR, self::LIGHT . 'Placeholder', 'Color Placeholder', 'input:placeholder', 'color');

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $iconType = '';
        $iconName = '';
        if ($settings[self::NAME . 'IconBase']) {
            switch ($settings[self::NAME . 'IconBase']) {
                case 'fontawesome':
                    $iconType = 'fontawesome/' . $settings[self::NAME . 'IconType'];
                    $iconName = $settings[self::NAME . 'IconName'];
                    break;
                case 'heroicons':
                    $iconType = 'heroicons/' . $settings[self::NAME . 'IconTypeH'];
                    $iconName = $settings[self::NAME . 'IconNameH'];
                    break;
                case 'phoenix':
                    $iconType = 'phoenix';
                    $iconName = $settings[self::NAME . 'IconNameP'];
                    break;
            }
        }

        $spinnerType = '';
        $spinnerName = '';
        if ($settings[self::NAME . 'SpinnerBase']) {
            switch ($settings[self::NAME . 'SpinnerBase']) {
                case 'fontawesome':
                    $spinnerType = 'fontawesome/' . $settings[self::NAME . 'SpinnerType'];
                    $spinnerName = $settings[self::NAME . 'SpinnerName'];
                    break;
                case 'heroicons':
                    $spinnerType = 'heroicons/' . $settings[self::NAME . 'SpinnerTypeH'];
                    $spinnerName = $settings[self::NAME . 'SpinnerNameH'];
                    break;
                case 'phoenix':
                    $spinnerType = 'phoenix';
                    $spinnerName = $settings[self::NAME . 'SpinnerNameP'];
                    break;
            }
        }


        ?>

        <form action="<?php echo esc_url(home_url('/')) ?>"
              x-data="{ searchBox : false }"
              :class="searchBox ? 'z-50 ': ''"
              class="items-center relative mx-auto lg:flex hidden "
              @click.away="searchBox = false">

            <input x-data="" @click="overlayShow = true; searchBox = true" name="s"
                   type="text"
                   placeholder="<?= esc_attr($settings[self::NAME . 'Placeholder']) ?>"
                   :class="isDarkness ? 'searchDark': 'searchLight'"
                   class="w-full py-4 bg-[#eceeef] rounded-xl rtl:pr-12 ltr:pl-12 dark:text-white dark:bg-[#1b314c] placeholder-[#64748b] dark:placeholder-white text-xs border-none">
            <input type="hidden" name="post_type" value="product"/>
            <button type="submit"
                    :class="isDarkness ? 'btnDark': 'btnLight'"
                    class="absolute rtl:right-5 ltr:left-5 ltr:rotate-90 text-[#64748b] dark:text-white size-4 flex items-center justify-center">
                <?= razmnixIcon($iconType, $iconName) ?>
            </button>

            <div x-cloak x-show="searchBox" class="absolute spinner rtl:left-5 ltr:right-5 size-5 animate-spin">
                <?= razmnixIcon($spinnerType, $spinnerName) ?>
            </div>

        </form>

        <?php
    }
}


