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
			$Menus = get_option( 'razmnix_settings' )['sideMenus'] ?? [];
			$iconType  = '';
			$iconName  = '';
			if (is_array($Menus) && !empty($Menus)):
			foreach ( $Menus as $Menu ):
				if ( $Menu['MenuIcon'] ) {
					switch ( $Menu['MenuIconBase'] ) {
						case 'fontawesome':
							$iconType = $Menu['MenuIconBase'] . '/' . $Menu['MenuIconType'];
							$iconName = $Menu['MenuIconName'];
							break;
						case 'heroicons':
							$iconType = $Menu['MenuIconBase'] . '/' . $Menu['MenuIconTypeH'];
							$iconName = $Menu['MenuIconNameH'];
							break;
						case 'phoenix':
							$iconType = $Menu['MenuIconBase'];
							$iconName = $Menu['MenuIconNameP'];
							break;

					}
				}
				?>
                <li x-data = "{ isOpen: false }" @click = "isOpen = !isOpen"
                    class = "relative flex items-start justify-center w-full flex-col hover:bg-[#eceeef] dark:hover:bg-[#1b314c] text-[#334155] dark:text-white rounded-lg">
                    <a <?php if ( ! $Menu['SubMenuO'] ): ?> href = "<?= esc_url( $Menu['MenuLink']['url'] ) ?>" target = "<?= esc_url( $Menu['MenuLink']['target'] ) ?>"
                                                            title = "<?= esc_url( $Menu['MenuLink']['text'] ) ?> <?php endif; ?>"
                                                            class = " flex gap-x-4 items-center relative justify-start cursor-pointer pl-4 pr-2.5 text-lg font-medium py-4 w-full  transition-all">
						<?php if ( $Menu['MenuIcon'] ): ?><span class = "size-6"><?= razmnixIcon( esc_html( $iconType ), esc_html( $iconName ) ) ?></span> <?php endif; ?>
                        <span><?= esc_html( $Menu['Menu'] ); ?></span>
						<?php if ( $Menu['SubMenuO'] ): ?>
                            <span x-show = "!isOpen" class = "size-4"><?= razmnixIcon( 'fontawesome/' . 'solid', 'plus' ) ?></span>
                            <span x-show = "isOpen" class = "size-4"><?= razmnixIcon( 'fontawesome/' . 'solid', 'minus' ) ?></span>
						<?php endif; ?>
                    </a>
					<?php if ( $Menu['SubMenuO'] ): ?>
                        <ul x-show = "isOpen" class = "relative flex flex-col items-start justify-center  rounded-b-lg  w-full px-6 pb-2">
							<?php
							$SubMenus    = $Menu['SubMenus'];
							$iconTypeSub = '';
							$iconNameSub = ''; ?>
							<?php foreach ( $SubMenus as $SubMenu ): ?>
								<?php if ( $SubMenu['SubMenuIcon'] ) {
									switch ( $SubMenu['SubMenuIconBase'] ) {
										case 'fontawesome':
											$iconTypeSub = $SubMenu['SubMenuIconBase'] . '/' . $SubMenu['SubMenuIconType'];
											$iconNameSub = $SubMenu['SubMenuIconName'];
											break;
										case 'heroicons':
											$iconTypeSub = $SubMenu['SubMenuIconBase'] . '/' . $SubMenu['SubMenuIconTypeH'];
											$iconNameSub = $SubMenu['SubMenuIconNameH'];
											break;
										case 'phoenix':
											$iconTypeSub = $SubMenu['SubMenuIconBase'];
											$iconNameSub = $SubMenu['SubMenuIconNameP'];
											break;
									}
								} ?>
                                <li class = "flex group items-start justify-center w-full flex-col hover:bg-[#eceeef] dark:hover:bg-[#1b314c] text-[#334155] dark:text-white rounded-lg">
                                    <a href = "<?= esc_url( $SubMenu['SubMenuLink']['url'] ) ?>" target = "<?= esc_url( $SubMenu['SubMenuLink']['target'] ) ?>"
                                       title = "<?= esc_url( $SubMenu['SubMenuLink']['text'] ) ?>"
                                       class = " flex gap-x-4 items-center relative justify-start cursor-pointer pl-4 pr-2.5 text-lg font-medium py-3 w-full  transition-all">
										<?php if ( $SubMenu['SubMenuIcon'] ): ?><span
                                                class = "size-4"><?= razmnixIcon( esc_html( $iconTypeSub ), esc_html( $iconNameSub ) ) ?></span> <?php endif; ?>
                                        <span><?= esc_html( $SubMenu['SubMenu'] ); ?></span>
                                    </a>
                                </li>
							<?php endforeach; ?>
                        </ul>
					<?php endif; ?>
                </li>
			<?php endforeach;  endif;?>
        </ul>
    </div>
    <!-- /Menu -->
    <!-- /Footer Header Side -->
</div>
