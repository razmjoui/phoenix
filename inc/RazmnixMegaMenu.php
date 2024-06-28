<?php

namespace Razm;



class RazmnixMegaMenu
{
    public function __construct()
    {
        // Hook to add custom fields to menu items
        add_action('wp_nav_menu_item_custom_fields', [$this, 'add_custom_fields'], 10, 5);

        // Hook to update custom fields when a menu item is saved
        add_action('wp_update_nav_menu_item', [$this, 'update_custom_fields'], 10, 2);

        // Filter to setup custom fields for menu items
        add_filter('wp_setup_nav_menu_item', [$this, 'setup_nav_fields']);
    }

    // Add custom fields to menu item object
    public function setup_nav_fields($menu_item)
    {
        $menu_item->megamenu    = get_post_meta($menu_item->ID, '_menu_megamenu', true);
        $menu_item->submegamenu = get_post_meta($menu_item->ID, '_menu_submegamenu', true);
        $menu_item->isfullwidth = get_post_meta($menu_item->ID, '_menu_is_fullwidth', true);

        return $menu_item;
    }

    // Update custom fields for menu items
    public function update_custom_fields($menu_id, $menu_item_db_id)
    {
        // Update megamenu field
        $megamenu = isset($_REQUEST['menu-megamenu'][$menu_item_db_id]) ? 1 : 0;
        update_post_meta($menu_item_db_id, '_menu_megamenu', $megamenu);

        // Update submegamenu field
        if (isset($_REQUEST['menu-submegamenu'][$menu_item_db_id])) {
            update_post_meta($menu_item_db_id, '_menu_submegamenu', sanitize_text_field($_REQUEST['menu-submegamenu'][$menu_item_db_id]));
        }

        // Update isFullWidth field
        $isFullWidth = isset($_REQUEST['menu-is-fullwidth'][$menu_item_db_id]) ? 1 : 0;
        update_post_meta($menu_item_db_id, '_menu_is_fullwidth', $isFullWidth);
    }

    // Add custom fields to menu items in the admin panel
    public function add_custom_fields($item_id, $item, $depth)
    {
        if ($depth == 0) : ?>

            <div class = "menu-options">

                <h4><?= __('Mega Menu Settings', 'razmnix'); ?></h4>

                <p>
                    <label for = "edit-menu-megamenu-<?= $item_id ?>"><?= __('Enable Mega Menu', 'razmnix'); ?></label>
                    <input type = "checkbox" id = "edit-menu-megamenu-<?= $item_id ?>" class = "edit-menu-item-custom" name = "menu-megamenu[<?= $item_id ?>]"
                           value = "1" <?= checked(!empty($item->megamenu), 1, false) ?>>
                </p>

                <?php $mega_menu_lists = $this->getListMegaMenu(); ?>

                <p>
                    <label for = "edit-menu-submegamenu-<?= $item_id ?>"><?= __('Select Mega Menu', 'razmnix'); ?></label>
                    <select name = "menu-submegamenu[<?= $item_id ?>]" id = "edit-menu-submegamenu-<?= $item_id ?>">
                        <?php foreach ($mega_menu_lists as $key => $menu) : ?>
                            <option value = "<?= esc_attr($key) ?>" <?= selected($key, $item->submegamenu, false) ?>><?= esc_html($menu) ?></option>
                        <?php endforeach; ?>
                    </select>
                </p>

                <p>
                    <label for = "edit-menu-is-fullwidth-<?= $item_id ?>"><?= __('Full Width Mega Menu', 'razmnix'); ?></label>
                    <input type = "checkbox" id = "edit-menu-is-fullwidth-<?= $item_id ?>" class = "edit-menu-item-custom" name = "menu-is-fullwidth[<?= $item_id ?>]"
                           value = "1" <?= checked(!empty($item->isfullwidth), 1, false) ?>>
                </p>
            </div>

        <?php endif;
    }

    // Retrieve list of mega menus
    public function getListMegaMenu(): array
    {
        $menus = [];
        $lists = get_posts(
            [
                'posts_per_page' => -1,
                'post_type'      => 'razmnixmega'
            ]);

        foreach ($lists as $menu) {
            $menus[$menu->ID] = $menu->post_title;
        }

        return $menus;
    }
}
