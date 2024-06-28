<?php

namespace Razm;

use Walker_Nav_Menu;

class RazmnixMegaMenuWalker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = [], $current_object_id = 0)
    {
        global $wp_query;

        // تعیین سطح تورفتگی
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // تعریف متغیرها
        $class_names = $value = $full_width = $mega_menu_cols = '';
        $classes     = empty($item->classes) ? [] : (array)$item->classes;
        $args        = apply_filters('nav_menu_item_args', $args, $item, $depth);

        // تنظیمات مگامنو
        $megamenu          = empty($item->megamenu) ? "std-menu" : "mega-menu";
        $menu_has_children = '';
        if (!empty($item->megamenu)) {
            $full_width        = empty($item->isfullwidth) ? "" : "mega-menu-fw";
            $menu_has_children = 'menu-item-has-children';
        }

        // تنظیمات عرض منو
        $menu_width     = empty($item->menuwidth) ? "" : 'style="width: ' . esc_attr($item->menuwidth) . 'px;"';
        $hashtmlcontent = empty($item->htmlcontent) ? "" : "menu-item-html";
        $hidetitle      = empty($item->hidetitle) ? "" : "menu-hide-title";

        // تنظیمات ستون‌های منو
        $class_cols = "";
        if (!empty($item->menucol) && $item->menucol != 0) {
            $class_cols = 'md:col-span-' . esc_attr($item->menucol) . 'col-span-12 sm:col-span-12';
        }

        // ساخت نام کلاس‌ها
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="level-' . esc_attr($depth) . ' menu-item-' . esc_attr($item->ID) . ' ' . esc_attr($menu_has_children) . ' ' . esc_attr($hidetitle) . ' ' . esc_attr($class_names) . ' ' . esc_attr($class_cols) . ' ' . esc_attr($megamenu) . ' ' . esc_attr($full_width) . ' ' . esc_attr($hashtmlcontent) . '" ' . esc_attr($menu_width);

        // شروع المان لیست
        $output .= $indent . '<li ' . wp_kses($value . $class_names, ['class' => [], 'style' => []]) . '>';

        // تنظیمات Attributes
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';

        // ایجاد خروجی المان
        $prepend     = '<span class="menu-item-text">';
        $append      = '</span>';
        $description = !empty($item->description) ? '<span class="menu-item-desc">' . esc_attr($item->description) . '</span>' : '';
        if ($depth != 0) {
            $append = $prepend = "";
        }

        $has_children = $menu_has_children != '' || $args->walker->has_children;

        $item_output = $args->before;
        if (!$has_children) {
            $item_output .= '<a' . $attributes . '>';
        } else {
            $item_output .= '<span class="menu-item-wrapper">';
        }
        $item_output .= $args->link_before . $prepend;
        $item_output .= apply_filters('the_title', $item->title, $item->ID) . $append;
        $item_output .= $description . $args->link_after;

        // اضافه کردن آیکون برای آیتم‌های دارای زیرمنو
        if ($has_children) {
            $item_output .= $this->get_svg_code('duotone','angle-down');
        }

        if (!$has_children) {
            $item_output .= '</a>';
        } else {
            $item_output .= '</span>';
        }

        // بررسی و اضافه کردن محتوای المان‌های Elementor
        if (!empty($item->megamenu) && !empty($item->submegamenu) && in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins')))) {
            $elementor_instance = \Elementor\Plugin::instance();
            $item_output        .= '<div class="sub-menu sub-menu-elementor">';
            $item_output        .= $elementor_instance->frontend->get_builder_content_for_display($item->submegamenu);
            $item_output        .= '</div>';
        }

        $item_output .= $args->after;
        $output      .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    public function get_svg_code($folder_name, $svg_filename)
    {
        $file_path = RAZMNIX_SVG . "{$folder_name}/{$svg_filename}.svg";
        if (!file_exists($file_path)) {
            return "Not fund";
        }
        $svg_code = file_get_contents($file_path);

        if ($svg_code === false) {
            return "Error";
        }

        return $svg_code;
    }
}
