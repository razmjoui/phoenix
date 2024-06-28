<?php

namespace Razm;

class RazmnixEnqueue
{
    private array $styles;
    private array $scripts;

    public function __construct()
    {
        $this->styles = [
            'razmnix-app'   => 'app.css',
            'razmnix-style' => ''
        ];

        $this->scripts = [
            'alpine'      => [
                'src'       => 'alpine.js',
                'version'   => '3.13.5',
                'in_footer' => false,
                'strategy'  => 'defer'
            ],
            'razmnix-app' => [
                'src'       => 'app.js',
                'version'   => defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER,
                'in_footer' => true
            ]
        ];

        add_action('wp_enqueue_scripts', [$this, 'razmnix_enqueue']);
    }

    private function enqueue_styles()
    {
        // Fonts
        if (RazmnixGetOptions::$options['fontsActive'] && is_array(RazmnixGetOptions::$options['fontsActive'])) {
            foreach (RazmnixGetOptions::$options['fontsActive'] as $font) {
                wp_enqueue_style(
                    'razmnix-' . $font,
                    RAZMNIX_FONTS . $font . '.css',
                    [],
                    defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER
                );
            }
        }

        // Other styles
        foreach ($this->styles as $handle => $file) {
            $src = $file ? RAZMNIX_STYLES . $file : get_stylesheet_uri();
            wp_enqueue_style(
                $handle,
                $src,
                [],
                defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER
            );
        }
    }

    private function enqueue_scripts()
    {
        foreach ($this->scripts as $handle => $script) {
            wp_enqueue_script(
                $handle,
                RAZMNIX_SCRIPTS . $script['src'],
                [],
                $script['version'],
                $script['in_footer']
            );

            if (isset($script['strategy']) && $script['strategy'] === 'defer') {
                wp_script_add_data($handle, 'defer', true);
            }
        }
    }

    public function razmnix_enqueue()
    {
        $this->enqueue_styles();
        $this->enqueue_scripts();
    }
}
