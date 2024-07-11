<?php
$mainMenus    = get_option( 'razmnix_settings' )['mainMenus'] ?? [];
$subMenuWidth = '';
$subMenuCol   = '';
$iconType     = '';
$iconName     = '';
foreach ( $mainMenus as $mainMenu ):
	if ( $mainMenu['SubMenuO'] ) {
		switch ( $mainMenu['SubMenuStyle'] ) {
			case '1':
				$subMenuWidth = 'w-[250px]';
				$subMenuCol   = 'col-span-12';
				break;
			case '2':
				$subMenuWidth = 'w-[500px]';
				$subMenuCol   = 'col-span-6';
				break;
			case '3':
				$subMenuWidth = 'w-[750px]';
				$subMenuCol   = 'col-span-4';
				break;
			case 'category':
				$subMenuWidth = 'w-[950px] xl:w-[1150px] 2xl:[1300px] ltr:-right-7 rtl:-left-7  xl:rtl:-left-36 xl:ltr:-right-28';
				break;

		}
	}
	if ( $mainMenu['MenuIcon'] ) {
//var_dump($mainMenu['MenuIconSize']);
		switch ( $mainMenu['MenuIconBase'] ) {
			case 'fontawesome':
				$iconType = $mainMenu['MenuIconBase'] . '/' . $mainMenu['MenuIconType'];
				$iconName = $mainMenu['MenuIconName'];
				break;
			case 'heroicons':
				$iconType = $mainMenu['MenuIconBase'] . '/' . $mainMenu['MenuIconTypeH'];
				$iconName = $mainMenu['MenuIconNameH'];
				break;
			case 'phoenix':
				$iconType = $mainMenu['MenuIconBase'];
				$iconName = $mainMenu['MenuIconNameP'];
				break;

		}
	}
	?>
    <li <?php if ( $mainMenu['SubMenuO'] ): ?> x-data = "{ isOpen: false }" <?php endif; ?>
            class = "relative flex items-center justify-center w-auto flex-col text-[#334155] dark:text-white rounded-lg">
        <a <?php if ( ! $mainMenu['SubMenuO'] ): ?> href = "<?= esc_url( $mainMenu['MenuLink']['url'] ) ?>" target = "<?= esc_url( $mainMenu['MenuLink']['target'] ) ?>"
            title = "<?= esc_url( $mainMenu['MenuLink']['text'] ) ?>" <?php else: ?> @click = "isOpen = !isOpen;overlayShow = true" <?php endif; ?>
                class = " flex gap-x-2 items-center relative justify-start cursor-pointer pl-4 pr-2.5 font-medium py-4 w-auto  transition-all">
			<?php if ( $mainMenu['MenuIcon'] ): ?><span style = "color: <?= esc_attr( $mainMenu['MenuIconColor'] ) ?>; width: <?= esc_attr( $mainMenu['MenuIconSize']['width'] ) ?>px"
                                                        class = "size-5"><?= razmnixIcon( esc_html( $iconType ), esc_html( $iconName ) ) ?></span> <?php endif; ?>
            <span><?= esc_html( $mainMenu['Menu'] ) ?></span>
			<?php if ( $mainMenu['SubMenuO'] ): ?>
                <span class = "size-3"><?= razmnixIcon( 'fontawesome/' . 'light', 'chevron-down' ) ?></span>
			<?php endif; ?>
        </a>
		<?php if ( $mainMenu['SubMenuO'] ): ?>
			<?php if ( $mainMenu['SubMenuStyle'] !== 'category' ): ?>
                <ul x-show = "isOpen" @click.away = "isOpen = false"
                    class = "absolute top-20 <?= esc_html( $subMenuWidth ) ?> z-50 bg-white dark:bg-dark-910 rounded-lg lg:shadow-nav-link p-5 grid grid-cols-12 gap-4 justify-items-start">
					<?php
					$SubMenus    = $mainMenu['SubMenus'];
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
                        <li class = "<?= $subMenuCol ?> flex group items-start justify-center w-full hover:bg-[#eceeef] dark:hover:bg-dark-900 text-[#334155] dark:text-white rounded-lg">
                            <a href = "<?= esc_url( $SubMenu['SubMenuLink']['url'] ) ?>" target = "<?= esc_url( $SubMenu['SubMenuLink']['target'] ) ?>"
                               title = "<?= esc_url( $SubMenu['SubMenuLink']['text'] ) ?>"
                               class = " flex gap-x-2 items-start relative justify-start cursor-pointer rtl:pl-px ltr:rtl:pr-px rtl:pr-2 ltr:pl-2 pt-4 pb-2 font-medium w-full  transition-all">
								<?php if ( $SubMenu['SubMenuIcon'] ): ?>
                                    <div style = "color: <?= esc_attr( $SubMenu['SubMenuIconColor'] ) ?>; width: <?= esc_attr( $SubMenu['SubMenuIconSize']['width'] ) ?>px"
                                         class = "size-5"><?= razmnixIcon( esc_html( $iconTypeSub ), esc_html( $iconNameSub ) ) ?></div>
								<?php endif; ?>
                                <div>
                                    <h4 class = "text-dark-550 dark:text-white group-hover:text-dark-650 dark:group-hover:text-white font-bold "><?= esc_html( $SubMenu['SubMenu'] ) ?></h4>
                                    <span class = "text-gray-300 group-hover:text-gray-600 text-sm dark:group-hover:text-white font-medium"><?= esc_html( $SubMenu['SubMenuDescription'] ) ?></span>
                                </div>
                            </a>
                        </li>
					<?php endforeach; ?>
                </ul>
			<?php else: ?>
                <ul x-show = "isOpen" @click.away = "isOpen = false" style = "max-height: 65vh" class = "w-[950px] xl:w-[1150px] 2xl:[1300px] ltr:-right-7 rtl:-left-7  xl:rtl:-left-36 xl:ltr:-right-36 absolute top-20 z-50 bg-white dark:bg-dark-910 rounded-lg lg:shadow-nav-link p-5 overflow-y-auto">

					<?= get_template_part( 'components/menu/category' ) ?>
                </ul>
			<?php endif; ?>
		<?php endif; ?>
    </li>
<?php endforeach; ?>

