<?php use Razm\RazmnixGetOptions;
use Razm\RazmnixMegaMenuWalker;

?>
<header class = "shadow-lg">
    <div class = "container">
        <div class = "flex items-center justify-between gap-x-4 py-3">


            <!-- Header Logo -->
            <div class = "md:w-[var(--headerLogoWidth)] sm:w-[var(--headerLogoWidthTablet)] w-[var(--headerLogoWidthMobile)]">
                <?= get_template_part('components/logo/logo') ?>
            </div>
            <!-- /Header Logo -->

            <!-- Search -->
            <?= get_template_part('components/search/searchRoocket') ?>
            <!-- /Search -->

            <!-- Cart Section -->
            <section class = "relative">
                <a title="" href = "" class = "text-green-600 hover:text-green-700   flex items-center justify-center size-6" data-bs-toggle = "dropdown" aria-expanded = "false">
                    <?= razmnixIcon('fontawesome/' . 'duotone', 'bag-shopping') ?>
                </a>

                <div class = "list-reset dropdown-menu-end min-w-[450px]  p-5 shadow-lg rounded-2xl text-right absolute left-0 z-50 float-left mt-1 hidden border border-gray-300 bg-white py-2 text-base">
                    <div class = "widget woocommerce widget_shopping_cart">
                        <div class = "widget_shopping_cart_content"></div>
                    </div>
                </div>
            </section>
            <!-- /Cart Section -->

            <!-- Phone Section -->
            <section class = "hidden lg:flex items-center justify-between gap-x-4 w-auto px-4 py-4 text-gray-700 dark:text-white ">
                <div class = "flex flex-col">
                    <span class = "text-lg font-medium"><?= RazmnixGetOptions::$headerPhone ?></span>
                    <span class = "text-sm">با ما در ارتباط باشید</span>
                </div>
                <div class = "size-7"><?= razmnixIcon('fontawesome/' . 'duotone', 'phone-rotary') ?></div>
            </section>
            <!-- /Phone Section -->

            <!-- User Section -->
            <section>
                <a <?= is_user_logged_in() ? 'href = "' . RAZMNIX_ACCOUNT_URL . '"' : home_url(RazmnixGetOptions::$loginUrl) ?>
                        class = "flex items-center justify-between gap-x-2 shadow-md transition-all duration-300 ease-in-out w-max px-4 py-4 rounded-lg text-gray-700 hover:text-white bg-white hover:bg-gray-500">
                    <span class = "size-5"><?= razmnixIcon('fontawesome/' . 'duotone', 'user') ?></span>
                    <span>حساب کاربری</span>
                </a>
            </section>
            <!-- /User Section -->


            <div class = "flex lg:hidden"><?= razmnixIcon('fontawesome/' . 'solid', 'bars') ?></div>

        </div>

        <div class = "">
            <div class = "razmnixNav">
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'RazmnixMainMenu',
                        'walker'         => new RazmnixMegaMenuWalker()
                    ]
                )
                ?>
            </div>
        </div>
    </div>
</header>
