<header class = "">
    <!-- overlayShow -->
    <!--    --><?php //= get_template_part('components/other/overlayShow') ?>
    <!-- /overlayShow -->

    <!-- Side Menu Fixed -->
    <?= get_template_part('components/menu/sideMenuRoocketFixed') ?>
    <!-- Side Menu Fixed -->


    <div class = "container lg:pt-4">
        <!-- Logo & Search & Dark & Cart & Alarm & User -->
        <div class = "flex items-center gap-x-4 dark:razmnixDark justify-between bg-white dark:bg-dark sm:px-11 sm:py-9 p-5 rounded-2xl shadow-[0_4px_60px_rgba(0,0,0,.04)] relative">
            <!-- Side Menu -->
            <?= get_template_part('components/menu/sideMenuRoocket') ?>
            <!-- /Side Menu -->

            <!-- Logo -->
            <div class = "headerLogoWidth">
                <?= get_template_part('components/logo/logo') ?>
            </div>
            <!-- /Logo -->

            <!-- Search -->
            <?= get_template_part('components/search/searchRoocket') ?>
            <!-- /Search -->

            <!-- toggleThemes & Cart & notification-->
            <div class = "items-center justify-between hidden lg:flex gap-x-4">
                <!-- toggleThemes -->
                <div class = "hidden lg:flex">
                    <?= get_template_part('components/other/toggleThemesRoocket') ?>
                </div>
                <!-- /toggleThemes -->

                <!-- Cart -->
                <?= get_template_part('components/cart/cartRoocket') ?>
                <!-- /Cart -->

                <!-- Cart Side Menu -->
                <!--                --><?php //= get_template_part('components/cart/cartRoocketSideMenu') ?>
                <!-- /Cart Side Menu -->

                <!-- notification -->
                <?php is_user_logged_in() ? get_template_part('components/button/btnBell') : '' ?>
                <!-- /notification -->

            </div>
            <!-- /toggleThemes & Cart & notification-->

            <!-- user -->
            <?= get_template_part('components/button/btnUser') ?>
            <!-- /user -->
        </div>
        <!-- /Logo & Search & Dark & Cart & Alarm & User -->

        <!-- /Menu -->
        <div class = "hidden lg:flex overflow-visible lg:h-auto h-full  items-center justify-center w-auto dark:shadow-lg bg-[#d2d6de] dark:bg-dark-910 mx-9 shadow rounded-b-3xl ">

               <ul class = "relative flex items-center justify-center lg:flex-row flex-col lg:w-auto w-full lg:pt-0 pt-6">
               <?= get_template_part('components/menu/menuRoocket') ?>
               </ul>




            <!--<div class = "relative hidden razmnixNav lg:flex">
                <?php
/*                wp_nav_menu(
                    [
                        'theme_location' => 'RazmnixMainMenu',
                        'walker'         => new Razm\RazmnixMegaMenuWalker()
                    ]
                )
                */?>
            </div>-->
        </div>
        <!-- /Menu -->

    </div>


</header>




