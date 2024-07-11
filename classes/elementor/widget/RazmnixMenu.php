<?php

namespace RazmW;


class RazmnixMenu extends RazmnixBaseWidget {
	const NAME     = self::CONST . 'Menu';
	const DARK     = self::NAME . 'DarkMode';
	const LIGHT    = self::NAME . 'LightMode';
	const SECTIONS = [ ];
	const TITLE    = 'Menu';
	const ICON     = 'eicon-nav-menu';






	protected function render() {
		$settings = $this->get_settings_for_display();

        ?>
        <div class = "">
            <div class = "razmnixNav relative">
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

<?php
	}

}