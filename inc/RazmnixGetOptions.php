<?php

namespace Razm;


class RazmnixGetOptions
{

    private function startOptions(): void
    {
        $this->initializeOption('headerType', 'esc_html');
        $this->initializeOption('headerElementor', 'esc_html');
        $this->initializeOption('headerDefault', 'esc_html');
        $this->initializeOption('headerLogoUrl', 'esc_url', 'url');
        $this->initializeOption('headerLogoUrlDark', 'esc_url', 'url');
        $this->initializeOption('headerLogoWidth', 'esc_attr', 'width');
        $this->initializeOption('headerLogoWidthTablet', 'esc_attr', 'width');
        $this->initializeOption('headerLogoWidthMobile', 'esc_attr', 'width');
        $this->initializeOption('headerPosition', 'esc_html');
        $this->initializeOption('headerCart', 'esc_html');
        $this->initializeOption('headerPhone', 'esc_html');
        $this->initializeOption('headerSearchPlace', 'esc_html');
        $this->initializeOption('loginUrl', 'esc_html');
        $this->initializeOption('registerUrl', 'esc_html');
        $this->initializeOption('resetPasswordUrl', 'esc_html');
        $this->initializeOption('sloganLogin', 'esc_html');

        $this->initializeOption('bodyFont', 'esc_html');
        $this->initializeOption('titlesFont', 'esc_html');
        $this->initializeOption('paragraphFont', 'esc_html');


        $this->initializeOption('modalLoginExtension', 'esc_html');
        $this->initializeOption('backgroundMaskExtension', 'esc_html');
        $this->initializeOption('overlayExtension', 'esc_html');

        $this->initializeOption('footerType', 'esc_html');
        $this->initializeOption('footerElementor', 'esc_html');
        $this->initializeOption('footerDefault', 'esc_html');


//        $this->initializeOption('Connection' , 'esc_attr');


    }

    /*    private function checkOptions():void
        {
            $this->addActionIfEnabled('darkModeExtension' , 'razmnixScriptHead' , 'DarkModeScriptHead');
            $this->addActionIfEnabled('modalLoginExtension' , 'razmnixTopFooter' , 'modalLoginExtension');
        }
        public function modalLoginExtension()
        {
            echo get_template_part('components/modal/login') ;
        }

        public function DarkModeScriptHead():void
        {
            // محتوای متد DarkModeScriptHead
        }*/


    /*private static function razmnix(string $optionName , string $key = '' , $default = null)
    {
        return isset(self::$options[ $optionName ]) ? ($key ? self::$options[ $optionName ][ $key ] : self::$options[ $optionName ]) : $default;
    }*/
    private static function razmnix(string $optionName, string $key = '', $default = null)
    {
        // بررسی کنید که self::$options یک آرایه است
        if (isset(self::$options[$optionName])) {
            $option = self::$options[$optionName];
            if ($key && is_array($option) && isset($option[$key])) {
                return $option[$key];
            } elseif (!$key) {
                return $option;
            }
        }
        return $default;
    }

    private static function isOptionEnabled(string $optionName): bool
    {
        return isset(self::$options[$optionName]) && self::$options[$optionName];
    }

    /*    private function addActionIfEnabled(string $optionName , string $hook , string $method):void
        {
            if (self::isOptionEnabled($optionName)) {
                add_action($hook , [$this , $method]);
            }
        }*/

    /*private function initializeOption(string $propertyName , callable $sanitizeCallback , string $key = ''):void
    {
        self::${$propertyName} = $sanitizeCallback(self::razmnix($propertyName , $key));
    }*/
    private function initializeOption(string $propertyName, callable $sanitizeCallback, string $key = ''): void
    {
        $option = self::razmnix($propertyName, $key);
        if ($option !== null) {
            self::${$propertyName} = $sanitizeCallback($option);
        } else {
            self::${$propertyName} = $sanitizeCallback('');
        }
    }

    public function __construct()
    {
        self::$options = get_option(self::SETTINGS_OPTION, []);

//        $this->checkOptions();
        $this->startOptions();
    }

    public static array $options = [];

    public static string $headerType;

    public static string $headerElementor;
    public static string $headerDefault;
    public static string $headerLogoUrl;
    public static string $headerLogoUrlDark;
    public static string $headerPosition;
    public static string $headerCart;
    public static string $headerPhone;
    public static string $headerSearchPlace;
    public static string $headerLogoWidth;
    public static string $headerLogoWidthTablet;
    public static string $headerLogoWidthMobile;
    public static string $registerUrl;
    public static string $loginUrl;
    public static string $resetPasswordUrl;
    public static string $sloganLogin;
    public static string $bodyFont;
    public static string $titlesFont;
    public static string $paragraphFont;
    public static string $footerType;
    public static string $footerElementor;
    public static string $footerDefault;
    public static array  $Connection;
    public static bool   $modalLoginExtension;
    public static bool   $backgroundMaskExtension;
    public static bool   $overlayExtension;

    const SETTINGS_OPTION = 'razmnix_settings';


}
