<?php

namespace Razm;

class RazmnixAction
{

    public function __construct()
    {
//        add_action('razmnix_html_class' , [$this , 'setDarkMode']);
//        add_action('razmnix_head' , [$this , 'colorTheme']);
//        add_action('razmnix_head' , [$this , 'rtlTheme']);


        add_action('razmnixHeaders', [$this, 'headers']);
        add_action('razmnixFooters', [$this, 'footers']);

        add_action('after_setup_theme', [$this, 'afterSetupTheme']);

        add_action('init',  [$this,'registerMenus']);



        add_filter('walker_nav_menu_start_el', [$this,'add_svg_icon_to_menu_items'], 10, 4);



    }
    public function afterSetupTheme ()
    {
        add_theme_support('title-tag');
    }
    public function registerMenus()
    {
        register_nav_menus(
            [
                'RazmnixMainMenu' => __('Main Menu', 'razmnix'),
                'RazmnixMobileMenu' => __('Mobile Menu', 'razmnix'),
                'RazmnixUserMenu' => __('User Menu', 'razmnix'),
                'RazmnixFooterMenu' => __('Footer Menu', 'razmnix'),
            ]
        );
    }

   public function add_svg_icon_to_menu_items($item_output, $item, $depth, $args)
    {
        if (in_array('menu-item-has-children', $item->classes)) {

            $item_output = preg_replace('/<a(.*?)>(.*?)<\/a>/', '<span$1>$2</span>', $item_output);


            $svg_icon    = '<svg class="flex lg:hidden" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg"><path d="M1 1l4 4-4 4"/></svg>';
            $item_output = str_replace('</a>', $svg_icon . '</a>', $item_output);
        }
        return $item_output;
    }

    public function headers()
    {
        if (RazmnixGetOptions::$headerType == 'elementor') {
            echo get_template_part('templates/header/elementor');
        } else {
            echo get_template_part('templates/header/headers');
        }
    }
    public function footers()
    {
        if (RazmnixGetOptions::$footerType == 'elementor') {
            echo get_template_part('templates/footer/elementor');
        } else {
            echo get_template_part('templates/footer/footers');
        }
    }



}