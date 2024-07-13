<?php

namespace RazmE;


use RazmW\RazmnixBtn;
use RazmW\RazmnixLogo;
use RazmW\RazmnixMenu;
use RazmW\RazmnixSearch;
use RazmW\RazmnixThemesMode;

class RazmnixElementor
{
   public array $razmnixW = [
        "RazmnixSearch",
//        "RazmnixLogo",
//        "RazmnixThemesMode",
//        "RazmnixBtn",
//        "RazmnixMenu",
    ];

    public function registerWidgets($widgets_manager): void
    {
        foreach ($this->razmnixW as $widget) {
            require_once(get_template_directory() . "/classes/elementor/widget/{$widget}.php");
            $widgets_manager->register(new $widget());
        }

//		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixSearch.php' );
//        $widgets_manager->register( new RazmnixSearch() );
//        require_once( get_template_directory() . '/classes/elementor/widget/RazmnixLogo.php' );
//        $widgets_manager->register( new RazmnixLogo() );

//		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixThemesMode.php' );
//
//		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixBtn.php' );
//		require_once( get_template_directory() . '/classes/elementor/widget/RazmnixMenu.php' );
//
//
//
//
//

//		$widgets_manager->register( new RazmnixThemesMode() );
//
//		$widgets_manager->register( new RazmnixBtn() );
//		$widgets_manager->register( new RazmnixMenu() );


    }

    private function setup_hooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_custom_script_for_elementor_editor']);
        // Register Widgets.
        add_action('elementor/widgets/register', [$this, 'registerWidgets']);

        // Register custom widget categories.
        add_action('elementor/elements/categories_registered', [$this, 'elementorCategories']);

    }

    public function enqueue_custom_script_for_elementor_editor(): void
    {
        if (defined('ELEMENTOR_VERSION') && \Elementor\Plugin::$instance->preview->is_preview_mode()) {
            wp_enqueue_script(
                'alpine',
                RAZMNIX_SCRIPTS . 'alpine.js',
                null,
                '3.13.5',
                ['in_footer' => false, 'strategy' => 'defer']
            );
        }
        // بررسی اینکه آیا المنتور در حال ویرایش است یا خیر
        if (defined('ELEMENTOR_VERSION') && \Elementor\Plugin::$instance->preview->is_preview_mode()) {
            wp_enqueue_script(
                'razmnix-elementor',
                RAZMNIX_SCRIPTS . 'elementor.js',
                ['razmnix-app'],
                defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER,
                false
            );
        }
    }

    public function elementorCategories($elements_manager)
    {
        $elements_manager->add_category(
            'razmnixWidgets',
            [
                'title' => esc_html__('Phoenix', 'razmnix'),
                'icon' => 'fa fa-plug',
            ]
        );
    }

    public function __construct()
    {
        $this->setup_hooks();
    }
}