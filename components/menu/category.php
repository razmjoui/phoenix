<?php
?>
<div x-data = "{ activeTab: 0 }" class = "gap-x-2 grid grid-cols-12 justify-items-start  ">
    <div class = "flex flex-col col-span-3 w-full gap-y-1">
		<?php
		$categories = get_option( 'razmnix_settings' )['categories'] ?? [];

		$iconType = '';
		$iconName = '';
		foreach ( $categories as $tab => $category ):
			if ( $category['categoryIcon'] ) {
				switch ( $category['categoryIconBase'] ) {
					case 'fontawesome':
						$iconType = $category['categoryIconBase'] . '/' . $category['categoryIconType'];
						$iconName = $category['categoryIconName'];
						break;
					case 'heroicons':
						$iconType = $category['categoryIconBase'] . '/' . $category['categoryIconTypeH'];
						$iconName = $category['categoryIconNameH'];
						break;
					case 'phoenix':
						$iconType = $category['categoryIconBase'];
						$iconName = $category['categoryIconNameP'];
						break;

				}
			}
			?>


            <!-- Tab buttons -->
            <div @click = "activeTab = <?= esc_attr( $tab ) ?>"
                 :class = "activeTab === <?= esc_attr( $tab ) ?> ? 'bg-[#d2d6de] dark:bg-dark-950 text-dark-650 dark:text-white' : 'hover:bg-[#eceeef] dark:hover:bg-dark-900 text-dark-550' "
                 class = " text-[#334155] dark:text-white group py-2 px-4 rounded-lg  duration-300 ease-in-out flex gap-x-2 items-center relative justify-start cursor-pointer   font-medium w-full  transition-all">
				<?php if ( $category['categoryIcon'] ): ?>
                    <span style = "color: <?= esc_attr( $category['categoryIconColor'] ) ?>; width: <?= esc_attr( $category['categoryIconSize']['width'] ) ?>px"
                          class = "size-5"><?= razmnixIcon( esc_html( $iconType ), esc_html( $iconName ) ) ?>
                    </span>
				<?php endif; ?>
                <div>
                    <h4 class = " font-bold "><?= esc_html( $category['category'] ) ?></h4>
                    <span :class = "activeTab === <?= esc_attr( $tab ) ?> ? '' : 'text-gray-300 group-hover:text-gray-600 dark:group-hover:text-white' " class = "text-sm font-medium">
                        <?= esc_html( $category['categoryDescription'] ?? '' ) ?>
                    </span>
                </div>
            </div>
		<?php endforeach; ?>
    </div>


    <!-- Tab content -->
    <div class = " col-span-9 w-full border-r-2 rtl:pr-5 ltr:pl-5">
		<?php
		foreach ( $categories as $tab => $category ):?>
            <div x-show = "activeTab ===  <?= esc_attr( $tab ) ?>" class = "grid grid-cols-12 flex-wrap items-center justify-center w-full gap-4 ">
				<?php foreach ( $category['Items'] as $item ):

					if ( $item['ItemIcon'] ) {
						switch ( $item['ItemIconBase'] ) {
							case 'fontawesome':

								$iconType = $item['ItemIconBase'] . '/' . $item['ItemIconType'];
								$iconName = $item['ItemIconName'];
								break;
							case 'heroicons':

								$iconType = $item['ItemIconBase'] . '/' . $item['ItemIconTypeH'];
								$iconName = $item['ItemIconNameH'];
								break;
							case 'phoenix':

								$iconType = $item['ItemIconBase'];
								$iconName = $item['ItemIconNameP'];
								break;

						}
					}
					?>

                    <div class = "col-span-4 xl:col-span-3 flex group items-start justify-center w-full hover:bg-[#eceeef] dark:hover:bg-dark-900 text-[#334155] dark:text-white rounded-lg">
                        <a href = "<?= esc_url( $item['ItemLink']['url'] ?? '' ) ?>" target = "<?= esc_url( $item['ItemLink']['target'] ?? '' ) ?>"
                           title = "<?= esc_url( $item['ItemLink']['text'] ?? '' ) ?>"
                           class = " flex gap-x-2 items-start relative justify-start cursor-pointer rtl:pl-px ltr:rtl:pr-px rtl:pr-2 ltr:pl-2 pt-4 pb-2  font-medium w-full  transition-all">

							<?php if ( $item['ItemIcon'] ): ?>
                                <span style = "color: <?= esc_attr( $item['ItemIconColor'] ) ?>; width: <?= esc_attr( $item['ItemIconSize']['width'] ) ?>px"
                                      class = "size-5"><?= razmnixIcon( esc_html( $iconType ), esc_html( $iconName ) ) ?></span> <?php endif; ?>

                            <div>
                                <h4 class = "text-dark-550 dark:text-white group-hover:text-dark-650 dark:group-hover:text-white  font-bold "><?= esc_html( $item['Item'] ) ?></h4>
                                <span class = "text-gray-300 group-hover:text-gray-600 text-sm dark:group-hover:text-white font-medium"><?= esc_html( $item['ItemDescription'] ) ?></span>
                            </div>
                        </a>
                    </div>


				<?php endforeach; ?>
            </div>
		<?php endforeach; ?>

    </div>

</div>