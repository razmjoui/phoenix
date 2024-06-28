<div x-show="sideMenu" class = "dark:shadow-lg dark:bg-dark-910 fixed flex flex-col items-center h-full z-50 w-[17.25rem] lg:w-1/4  transition-all duration-200 ease-in-out top-0 bg-white">
    <!-- Top Header Side -->
    <div class = "justify-between relative items-center pt-7 px-4 flex w-full">
        <!-- Logo -->
        <div class = "headerLogoWidth"><?= get_template_part('components/logo/logo') ?></div>
        <!-- /Logo -->
        <!-- Close Icon -->
        <button @click = "overlayShow = false; sideMenu = false" class = "size-5"><?= get_svg_code('duotone', 'xmark') ?></button>
        <!-- /Close Icon -->
    </div>
    <!-- /Top Header Side -->

    <!-- Search -->
    <?= get_template_part('components/search/searchRoocketMobile') ?>
    <!-- /Search -->

    <!-- Main Header Side -->
    <div class = "px-6 w-full mt-5 mb-3 inline-block">
        <div class = "font-bold text-gray-800 py-5 border-t border-b dark:border-opacity-10 border-biscay-100">
            <div class = "w-fit-content">
                <!-- toggleThemes & Cart & notification-->
                <div class = "flex flex-col justify-between gap-y-1 items-start">
                    <!-- toggleThemes -->
                    <?= get_template_part('components/button/toggleThemesRoocketSideMenu') ?>
                    <!-- /toggleThemes -->

                    <!-- Cart Side Menu -->
                    <?= get_template_part('components/cart/cartRoocketSideMenu') ?>
                    <!-- /Cart Side Menu -->

                    <!-- notification -->
                    <div class = " flex">
                        <div class = "group flex items-center ">
                            <a href = "#"
                               class = "group lg:w-12 lg:h-12  size-10 flex items-center relative
                                    justify-center rounded-full  transition cursor-pointer
                                    bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc]
                                    text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">

                                <span class = "size-6"><?= get_svg_code('duotone', 'bell-ring'); ?></span>
                            </a>
                            <a class = "dark:text-white text-[#334155] mr-2" href = "#">اعلانات</a>
                        </div>
                    </div>
                    <!-- /notification -->
                </div>
                <!-- /toggleThemes & Cart & notification-->
            </div>
        </div>
    </div>
    <!-- /Main Header Side -->


    <!-- Footer Header Side -->
    <!-- /Menu -->
    <div class = "overflow-y-auto h-full w-full dark:shadow-lg dark:bg-dark-910 mx-9 shadow rounded-b-3xl ">
        <!-- <ul class = "razmnixNavSide relative flex flex-col items-start justify-center w-full px-6 ">
                <li class = "flex items-center w-full flex-col">
                    <a href = "<?php /*= esc_url(home_url()) */ ?>" class = "px-4  text-base font-medium flex items-center py-4 w-full rounded-lg transition-all cursor-pointer hover:bg-[#eceeef]  hover:dark:bg-[#1b314c] text-[#334155] dark:text-white">
                        صفحه اصلی
                    </a>
                </li>

                <li class = "flex items-center w-full flex-col ">
                    <a href = "<?php /*= esc_url(home_url()) */ ?>" class = "px-4 text-base font-medium flex items-center py-4 w-full rounded-lg transition-all cursor-pointer hover:bg-[#eceeef]  hover:dark:bg-[#1b314c] text-[#334155] dark:text-white">
                        صفحه اصلی
                    </a>
                    <ul class = "relative flex flex-col items-start justify-center w-full px-6 ">
                        <li class = "flex items-center w-full flex-col ">
                            <a href = "<?php /*= esc_url(home_url()) */ ?>" class = "px-4 text-base font-medium flex items-center py-4 w-full rounded-lg transition-all cursor-pointer hover:bg-[#eceeef]  hover:dark:bg-[#1b314c] text-[#334155] dark:text-white">
                                صفحه اصلی
                            </a>
                        </li>
                        <li class = "flex items-center w-full flex-col ">
                            <a href = "<?php /*= esc_url(home_url()) */ ?>" class = "px-4 text-base font-medium flex items-center py-4 w-full rounded-lg transition-all cursor-pointer hover:bg-[#eceeef]  hover:dark:bg-[#1b314c] text-[#334155] dark:text-white">
                                صفحه اصلی
                            </a>
                            <ul class = "relative flex flex-col items-start justify-center w-full px-6 ">
                                <li class = "flex items-center w-full flex-col ">
                                    <a href = "<?php /*= esc_url(home_url()) */ ?>" class = "px-4 text-base font-medium flex items-center py-4 w-full rounded-lg transition-all cursor-pointer hover:bg-[#eceeef]  hover:dark:bg-[#1b314c] text-[#334155] dark:text-white">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li class = "flex items-center w-full flex-col ">
                                    <a href = "<?php /*= esc_url(home_url()) */ ?>" class = "px-4 text-base font-medium flex items-center py-4 w-full rounded-lg transition-all cursor-pointer hover:bg-[#eceeef]  hover:dark:bg-[#1b314c] text-[#334155] dark:text-white">
                                        صفحه اصلی
                                    </a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class = "flex items-center w-full flex-col ">
                    <a href = "<?php /*= esc_url(home_url()) */ ?>" class = "px-4 text-base font-medium flex items-center py-4 w-full rounded-lg transition-all cursor-pointer hover:bg-[#eceeef]  hover:dark:bg-[#1b314c] text-[#334155] dark:text-white">
                        صفحه اصلی
                    </a>
                </li>
            </ul>-->


        <div class = "razmnixNavSide">
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'RazmnixMobileMenu',
                ]
            )
            ?>
        </div>
    </div>
    <!-- /Menu -->
    <!-- /Footer Header Side -->
</div>
