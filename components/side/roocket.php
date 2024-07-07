<div x-show = "sideMenu" class = "dark:shadow-lg dark:bg-dark-910 fixed flex flex-col items-center h-full z-50 w-[17.25rem] lg:w-1/4  transition-all duration-200 ease-in-out top-0 bg-white">
    <!-- Top Header Side -->
    <div class = "justify-between relative items-center pt-7 px-4 flex w-full">
        <!-- Logo -->
        <div class = "headerLogoWidth"><?= get_template_part( 'components/logo/logo' ) ?></div>
        <!-- /Logo -->
        <!-- Close Icon -->
        <button @click = "overlayShow = false; sideMenu = false" class = "size-5"><?= razmnixIcon( 'fontawesome/' . 'duotone', 'xmark' ) ?></button>
        <!-- /Close Icon -->
    </div>
    <!-- /Top Header Side -->

    <!-- Search -->
	<?= get_template_part( 'components/search/searchRoocketMobile' ) ?>
    <!-- /Search -->

    <!-- Main Header Side -->
    <div class = "px-6 w-full mt-5 mb-3 inline-block">
        <div class = "font-bold text-gray-800 py-5 border-t border-b dark:border-opacity-10 border-biscay-100">
            <div class = "w-fit-content">
                <!-- toggleThemes & Cart & notification-->
                <div class = "flex flex-col justify-between gap-y-1 items-start">
                    <!-- toggleThemes -->
					<?= get_template_part( 'components/button/toggleThemesRoocketSideMenu' ) ?>
                    <!-- /toggleThemes -->

                    <!-- Cart Side Menu -->
					<?= get_template_part( 'components/cart/cartRoocketSideMenu' ) ?>
                    <!-- /Cart Side Menu -->

                    <!-- notification -->
                    <div class = " flex">
                        <div class = "group flex items-center ">
                            <a href = "#"
                               class = "group lg:w-12 lg:h-12  size-10 flex items-center relative
                                    justify-center rounded-full  transition cursor-pointer
                                    bg-[#eceeef] dark:bg-[#1b314c] hover:bg-[#334155] dark:hover:bg-[#c2c6cc]
                                    text-[#334155] dark:text-white dark:hover:text-[#1b314c] hover:text-[#c2c6cc]">

                                <span class = "size-6"><?= razmnixIcon( 'fontawesome/' . 'duotone', 'bell-ring' ); ?></span>
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
        <ul class = "relative flex flex-col items-start justify-center w-full px-6  gap-y-2">

			<?php
			$sideMenus = get_option( 'razmnix_settings' )['sideMenus'] ?? [];
			$iconType  = '';
			$iconName  = '';
			foreach ( $sideMenus as $sideMenu ):
				if ( $sideMenu['sideMenuIcon'] ) {
					switch ( $sideMenu['sideMenuIconBase'] ) {
						case 'fontawesome':
							$iconType = $sideMenu['sideMenuIconBase'] . '/' . $sideMenu['sideMenuIconType'];
							$iconName = $sideMenu['sideMenuIconName'];
							break;
						case 'heroicons':
							$iconType = $sideMenu['sideMenuIconBase'] . '/' . $sideMenu['sideMenuIconTypeH'];
							$iconName = $sideMenu['sideMenuIconNameH'];
							break;
						case 'phoenix':
							$iconType = $sideMenu['sideMenuIconBase'];
							$iconName = $sideMenu['sideMenuIconNameP'];
							break;

					}
				}
				?>
                <li x-data = "{ isOpen: false }" @click = "isOpen = !isOpen"
                    class = "relative flex items-start justify-center w-full flex-col hover:bg-[#eceeef] dark:hover:bg-[#1b314c] text-[#334155] dark:text-white rounded-lg">
                    <a <?php if ( !$sideMenu['sideSubMenuO'] ): ?> href = "<?= esc_url( $sideMenu['sideMenuLink']['url'] ) ?>" target = "<?= esc_url( $sideMenu['sideMenuLink']['target'] ) ?>"
                       title = "<?= esc_url( $sideMenu['sideMenuLink']['text'] ) ?> <?php endif; ?>"
                       class = " flex gap-x-4 items-center relative justify-start cursor-pointer pl-4 pr-2.5 text-lg font-medium py-4 w-full  transition-all">
						<?php if ( $sideMenu['sideMenuIcon'] ): ?><span class = "size-6"><?= razmnixIcon( esc_html( $iconType ), esc_html( $iconName ) ) ?></span> <?php endif; ?>
                        <span><?= esc_html( $sideMenu['sideMenu'] ); ?></span>
	                    <?php if ( $sideMenu['sideSubMenuO'] ): ?>
                        <span x-show = "!isOpen" class = "size-4"><?= razmnixIcon( 'fontawesome/' . 'solid', 'plus' ) ?></span>
                        <span x-show = "isOpen" class = "size-4"><?= razmnixIcon( 'fontawesome/' . 'solid', 'minus' ) ?></span>
                        <?php endif; ?>
                    </a>
					<?php if ( $sideMenu['sideSubMenuO'] ): ?>
                      <ul x-show = "isOpen" class = "relative flex flex-col items-start justify-center  rounded-b-lg  w-full px-6 pb-2">
							<?php
							$sideSubMenus = $sideMenu['sideSubMenus'];
							$iconTypeSub  = '';
							$iconNameSub  = ''; ?>
							<?php foreach ( $sideSubMenus as $sideSubMenu ): ?>
								<?php if ( $sideSubMenu['sideSubMenuIcon'] ) {
									switch ( $sideSubMenu['sideSubMenuIconBase'] ) {
										case 'fontawesome':
											$iconTypeSub = $sideSubMenu['sideSubMenuIconBase'] . '/' . $sideSubMenu['sideSubMenuIconType'];
											$iconNameSub = $sideSubMenu['sideSubMenuIconName'];
											break;
										case 'heroicons':
											$iconTypeSub = $sideSubMenu['sideSubMenuIconBase'] . '/' . $sideSubMenu['sideSubMenuIconTypeH'];
											$iconNameSub = $sideSubMenu['sideSubMenuIconNameH'];
											break;
										case 'phoenix':
											$iconType    = $sideSubMenu['sideSubMenuIconBase'];
											$iconNameSub = $sideSubMenu['sideSubMenuIconNameP'];
											break;
									}
								} ?>
                                <li class = "flex group items-start justify-center w-full flex-col hover:bg-[#eceeef] dark:hover:bg-[#1b314c] text-[#334155] dark:text-white rounded-lg">
                                    <a href = "<?= esc_url( $sideSubMenu['sideSubMenuLink']['url'] ) ?>" target = "<?= esc_url( $sideSubMenu['sideSubMenuLink']['target'] ) ?>"
                                       title = "<?= esc_url( $sideSubMenu['sideSubMenuLink']['text'] ) ?>"
                                       class = " flex gap-x-4 items-center relative justify-start cursor-pointer pl-4 pr-2.5 text-lg font-medium py-3 w-full  transition-all">
										<?php if ( $sideSubMenu['sideSubMenuIcon'] ): ?><span
                                                class = "size-4"><?= razmnixIcon( esc_html( $iconTypeSub ), esc_html( $iconNameSub ) ) ?></span> <?php endif; ?>
                                        <span><?= esc_html( $sideSubMenu['sideSubMenu'] ); ?></span>
                                    </a>
                                </li>
							<?php endforeach; ?>
                        </ul>
					<?php endif; ?>
                </li>
			<?php endforeach; ?>
        </ul>


        <!--<div class = "razmnixNavSide">
            <?php
		/*            wp_nav_menu(
						[
							'theme_location' => 'RazmnixMobileMenu',
						]
					)
					*/ ?>
        </div>-->
    </div>
    <!-- /Menu -->
    <!-- /Footer Header Side -->
</div>
