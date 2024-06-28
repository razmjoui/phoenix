<?php

namespace Razm;


use CSF;

class RazmnixOptions
{
    private static string $prefix;
    private static array  $headers        = [];
    private static array  $footers        = [];
    private array         $defaultFooters = [
        'roocket'   => 'roocket',
        'webdenj'   => 'webdenj',
        'sabzlearn' => 'sabzlearn',
    ];
    private array         $defaultHeaders = [
        'defaultHeader' => 'defaultHeader',
        'roocketHeader' => 'roocketHeader',
        'webdenj'       => 'webdenj',
        'sabzlearn'     => 'sabzlearn',
    ];
    private static array  $fonts          = [];

    public static function init(): void
    {
        self::$prefix = "razmnix_settings";
        self::initializeFonts();
        self::initializePosts('razmnixheader', self::$headers);
        self::initializePosts('razmnixfooter', self::$footers);
        (new self())->createOptions();
    }

    private static function initializeFonts(): void
    {
        self::$fonts = [
            'iransans'    => __('iransans', 'razmnix'),
            'iranyekan'   => __('iranyekan', 'razmnix'),
            'dana'        => __('dana', 'razmnix'),
            'vazir'       => __('vazir', 'razmnix'),
            'vazirfd'     => __('vazirfd', 'razmnix'),
            'shabnam'     => __('shabnam', 'razmnix'),
            'samim'       => __('samim', 'razmnix'),
            'sahel'       => __('sahel', 'razmnix'),
            'parastoo'    => __('parastoo', 'razmnix'),
            'iranrounded' => __('iranrounded', 'razmnix'),
            'gandom'      => __('gandom', 'razmnix'),
            'aviny'       => __('aviny', 'razmnix'),
            'anic'        => __('anic', 'razmnix'),
            'morabba'     => __('morabba', 'razmnix'),
        ];
    }

    private static function initializePosts(string $postType, array &$storage): void
    {
        $posts = get_posts([
                               'post_type'   => $postType,
                               'post_status' => 'publish',
                               'numberposts' => -1
                           ]);

        foreach ($posts as $post) {
            $storage[$post->ID] = $post->post_title;
        }
    }

    public function createOptions(): void
    {
        if (class_exists('CSF')) {
            CSF::createOptions(self::$prefix, [
                'menu_title'  => esc_html__('phoenix Settings', 'razmnix'),
                'menu_slug'   => 'razmnix',
                'menu_type'   => 'submenu',
                'menu_parent' => 'themes.php',
            ]);
            $sections = $this->createSections();

            foreach ($sections as $section) {
                CSF::createSection(self::$prefix, $section);
            }
        }
    }

    private function createSections(): array
    {
        return [
            $this->createSection('general', esc_html__('general', 'razmnix')),
            $this->createSubSection('general', esc_html__('Extensions', 'razmnix'), $this->getGeneralExtensionsFields()),
            $this->createSubSection('general', esc_html__('Elementor elements', 'razmnix'), $this->getGeneralElementorFields()),

            $this->createSection('header', esc_html__('header', 'razmnix')),
            $this->createSubSection('header', esc_html__('general header', 'razmnix'), $this->getHeaderFields()),

            $this->createSection('footer', esc_html__('footer', 'razmnix')),
            $this->createSubSection('footer', esc_html__('general footer', 'razmnix'), $this->getFooterFields()),

        ];
    }

    private function createSection(string $id, string $title): array
    {
        return [
            'id'    => $id,
            'title' => $title,
        ];
    }

    private function createSubSection(string $parent, string $title, array $fields): array
    {
        return [
            'parent' => $parent,
            'title'  => $title,
            'fields' => $fields,
        ];
    }

    //General Sections Start
    private function getGeneralExtensionsFields(): array
    {
        return [
            //Dark Mode
            [
                'id'      => 'darkModeExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Dark Mode Extension', 'razmnix'),
                'desc'    => esc_html__('Enable/Disable night mode widget for the template', 'razmnix'),
                'help'    => esc_html__('By activating this option, the dark theme settings will be activated and you can manage it in different parts of the site.', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Dark Mode Debug
            [
                'id'      => 'darkModeDebug',
                'type'    => 'button_set',
                'title'   => esc_html__('Dark Mode Debug', 'razmnix'),
                'desc'    => esc_html__('Enable/Disable Debugger for Dark Mode Extension', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Elementor Extension
            [
                'id'      => 'elementorExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Elementor Extension', 'razmnix'),
                'desc'    => esc_html__('Enable/Disable the Elementor Extension for the template', 'razmnix'),
                'help'    => esc_html__('By activating this option, Elementor settings and elements are activated', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Header Builder
            [
                'id'      => 'headerBuilderElementorExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Header Builder Elementor Extension', 'razmnix'),
                'desc'    => esc_html__('Enable/Disable the Header Elementor builder Extension for the template', 'razmnix'),
                'help'    => esc_html__('By activating this option, the elementor header settings and post type will be activated', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Footer Builder
            [
                'id'      => 'footerBuilderElementorExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Footer Builder Elementor Extension', 'razmnix'),
                'desc'    => esc_html__('Enable/Disable the Elementor footer builder Extension for the template', 'razmnix'),
                'help'    => esc_html__('By activating this option, Elementor footer settings and post type will be activated', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Megamenu Builder
            [
                'id'      => 'megamenuBuilderElementorExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Megamenu Builder Elementor Extension', 'razmnix'),
                'desc'    => esc_html__('Enable/Disable the MegaManu builder Extension for the template', 'razmnix'),
                'help'    => esc_html__('By activating this option, Megamenu settings and post type will be activated', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Add Connections
            [
                'id'      => 'Connections',
                'type'    => 'repeater',
                'title'   => esc_html__('Manage active connections', 'razmnix'),
                'fields'  => [
                    [
                        'id'    => 'connection',
                        'type'  => 'text',
                        'title' => esc_html__('connection Name', 'razmnix'),
                    ],

                ],
                'default' => [
                    [
                        'connection' => 'sideMenu',
                    ],
                    [
                        'connection' => 'overlayShow',
                    ],
                    [
                        'connection' => 'modalLogin',
                    ],
                    [
                        'connection' => 'userDropDown',
                    ],
                    [
                        'connection' => 'isDarkness',
                    ],

                ]
            ],
            //Extension Modal Login
            [
                'id'      => 'modalLoginExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Modal Login Extension', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Extension Background Mask
            [
                'id'      => 'backgroundMaskExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Background Mask Extension', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
            //Extension Overlay
            [
                'id'      => 'overlayExtension',
                'type'    => 'button_set',
                'title'   => esc_html__('Overlay Extension', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],


        ];
    }

    private function getGeneralElementorFields(): array
    {
        return [
            //Dark Mode Element
            [
                'id'      => 'darkModeElement',
                'type'    => 'button_set',
                'title'   => esc_html__('Dark Mode Element', 'razmnix'),
                'desc'    => esc_html__('Enable/Disable Elementor dark mode element', 'razmnix'),
                'help'    => esc_html__('By activating this option, the dark mode element is activated and you can use it in Elementor.', 'razmnix'),
                'options' => [
                    true  => esc_html__('Enable', 'razmnix'),
                    false => esc_html__('Disable', 'razmnix'),
                ],
                'default' => true
            ],
        ];

    }
    //General Sections End
    //Header Fields Start
    private function getHeaderFields(): array
    {
        return [
            //header type
            [
                'id'      => 'headerType',
                'type'    => 'button_set',
                'title'   => esc_html__('header Type', 'razmnix'),
                'desc'    => esc_html__('Select header Type', 'razmnix'),
                'options' => [
                    'default'   => esc_html__('default', 'razmnix'),
                    'elementor' => esc_html__('elementor', 'razmnix'),
                ],
                'default' => 'default'
            ],
            // select header elementor
            [
                'id'         => 'headerElementor',
                'type'       => 'select',
                'dependency' => ['headerType', '==', 'elementor'],
                'title'      => esc_html__('header select', 'razmnix'),
                'desc'       => esc_html__('Select header', 'razmnix'),
                'options'    => self::$headers
            ],
            // select header Default
            [
                'id'         => 'headerDefault',
                'type'       => 'select',
                'dependency' => ['headerType', '==', 'default'],
                'title'      => esc_html__('header select', 'razmnix'),
                'desc'       => esc_html__('Select header', 'razmnix'),
                'options'    => $this->defaultHeaders
            ],
            //Select Logo
            [
                'id'    => 'headerLogoUrl',
                'type'  => 'media',
                'title' => esc_html__('Select Logo', 'razmnix'),
            ],
            //Select Logo Dark
            [
                'id'    => 'headerLogoUrlDark',
                'type'  => 'media',
                'title' => esc_html__('Select Logo DarkMode', 'razmnix'),
            ],
            //header Logo Width Desktop
            [
                'id'      => 'headerLogoWidth',
                'type'    => 'dimensions',
                'title'   => esc_html__('Width Logo Desktop', 'razmnix'),
                'width'   => true,
                'height'  => false,
                'units'   => ['px'],
                'default' => ['width' => 208],

            ],
            //header Logo Width Tablet
            [
                'id'      => 'headerLogoWidthTablet',
                'type'    => 'dimensions',
                'title'   => esc_html__('Width Logo Tablet', 'razmnix'),
                'width'   => true,
                'height'  => false,
                'units'   => ['px'],
                'default' => [
                    'width' => 160
                ]
            ],
            //header Logo Width Mobile
            [
                'id'      => 'headerLogoWidthMobile',
                'type'    => 'dimensions',
                'title'   => esc_html__('Width Logo Mobile', 'razmnix'),
                'width'   => true,
                'height'  => false,
                'units'   => ['px'],
                'default' => [
                    'width' => 96
                ]
            ],
            //header Position
            [
                'id'      => 'headerPosition',
                'type'    => 'button_set',
                'title'   => esc_html__('header Position', 'razmnix'),
                'desc'    => esc_html__('Select header Position', 'razmnix'),
                'options' => [
                    'fixed'  => esc_html__('fixed', 'razmnix'),
                    'static' => esc_html__('static', 'razmnix'),
                    'sticky' => esc_html__('sticky', 'razmnix'),
                ],
                'default' => 'static'
            ],
            //cart Header
            [
                'id'      => 'headerCart',
                'type'    => 'button_set',
                'title'   => esc_html__('Header card layout', 'razmnix'),
                'options' => [
                    '1' => esc_html__('layout 1', 'razmnix'),
                    '2' => esc_html__('layout 2', 'razmnix'),
                ],
                'default' => '1'
            ],
            // header phone
            [
                'id'      => 'headerPhone',
                'type'    => 'text',
                'title'   => esc_html__('Header phone', 'razmnix'),
                'default' => '0218541586',
            ],
            // header Search PlaceHolder
            [
                'id'      => 'headerSearchPlace',
                'type'    => 'text',
                'title'   => esc_html__('Header Search PlaceHolder', 'razmnix'),
                'default' => esc_html__('Search', 'razmnix'),
            ],
            //cart Header
            [
                'id'      => 'headerAuthBtnType',
                'type'    => 'button_set',
                'title'   => esc_html__('Header card layout', 'razmnix'),
                'options' => [
                    'link'    => esc_html__('layout 1', 'razmnix'),
                    'default' => esc_html__('layout 2', 'razmnix'),
                ],
                'default' => '1'
            ],
            // register Url
            [
                'id'      => 'registerUrl',
                'type'    => 'text',
                'title'   => esc_html__('Registration page url name', 'razmnix'),
                'desc'    => esc_html__('https://yourSiteName.com/------- Put your desired value instead of ----', 'razmnix'),
                'default' => esc_html__('register', 'razmnix'),
            ],
            // login Url
            [
                'id'    => 'loginUrl',
                'type'  => 'text',
                'title' => esc_html__('Login page url name', 'razmnix'),
                'desc'  => esc_html__('https://yourSiteName.com/------- Put your desired value instead of ----', 'razmnix'),

                'default' => esc_html__('login', 'razmnix'),
            ],
            // Reset Password Url
            [
                'id'    => 'resetPasswordUrl',
                'type'  => 'text',
                'title' => esc_html__('Reset Password page url name', 'razmnix'),
                'desc'  => esc_html__('https://yourSiteName.com/------- Put your desired value instead of ----', 'razmnix'),

                'default' => esc_html__('reset', 'razmnix'),
            ],
            // slogan login
            [
                'id'      => 'sloganLogin',
                'type'    => 'textarea',
                'title'   => esc_html__('The slogan of the site on the login and registration page', 'razmnix'),
                'default' => esc_html__('Welcome home! Turn on the key. Come on', 'razmnix'),
            ],
            // font Active
            [
                'id'       => 'fontsActive',
                'type'     => 'select',
                'title'    => esc_html__('Active fonts', 'razmnix'),
                'desc'     => esc_html__('Just select the required fonts. It is recommended that 1 font and maximum 2 fonts be active.', 'razmnix'),
                'chosen'   => true,
                'multiple' => true,
                'ajax'     => true,
                'options'  => self::$fonts,
                'default'  => 'iransans'
            ],
            // Typography Body
            [
                'id'      => 'bodyFont',
                'type'    => 'select',
                'title'   => esc_html__('Original Font', 'razmnix'),
                'desc'    => esc_html__('Choose a font name for the main content font on all pages.', 'razmnix'),
                'chosen'  => true,
                'options' => self::$fonts,
                'ajax'    => true,
                'default' => 'iransans'
            ],
            // Titles Font (H1,H1,H2,H3,H4,H5,H6)
            [
                'id'      => 'titlesFont',
                'type'    => 'select',
                'title'   => esc_html__('Titles font (H1, H1, H2, H3, H4, H5, H6)', 'razmnix'),
                'desc'    => esc_html__('Just select the required fonts. It is recommended that 1 font and maximum 2 fonts be active.', 'razmnix'),
                'chosen'  => true,
                'options' => self::$fonts,
                'ajax'    => true,
                'default' => 'iransans'
            ],
            // Paragraph Font
            [
                'id'      => 'paragraphFont',
                'type'    => 'select',
                'title'   => esc_html__('Paragraph font', 'razmnix'),
                'desc'    => esc_html__('Select the font name for the paragraph font for all pages.', 'razmnix'),
                'chosen'  => true,
                'options' => self::$fonts,
                'ajax'    => true,
                'default' => 'iransans'
            ],

        ];
    }
    ///Header Fields End


    //Footer Sections Start
private function getFooterFields()
{
    return [
        //footer type
        [
            'id'      => 'footerType',
            'type'    => 'button_set',
            'title'   => esc_html__('footer Type', 'razmnix'),
            'desc'    => esc_html__('Select footer Type', 'razmnix'),
            'options' => [
                'default'   => esc_html__('default', 'razmnix'),
                'elementor' => esc_html__('elementor', 'razmnix'),
            ],
            'default' => 'elementor'
        ],
        // select footer elementor
        [
            'id'         => 'footerElementor',
            'type'       => 'select',
            'dependency' => ['footerType', '==', 'elementor'],
            'title'      => esc_html__('footer select', 'razmnix'),
            'desc'       => esc_html__('Select footer', 'razmnix'),
            'options'    => self::$footers
        ],
        // select footer Default
        [
            'id'         => 'footerDefault',
            'type'       => 'select',
            'dependency' => ['footerType', '==', 'default'],
            'title'      => esc_html__('footer select', 'razmnix'),
            'desc'       => esc_html__('Select footer', 'razmnix'),
            'options'    => $this->defaultFooters
        ],
    ];
}
    //Footer Sections End

}

RazmnixOptions::init();