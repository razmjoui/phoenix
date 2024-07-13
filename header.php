<?php

use RazmS\RazmnixSetting;

$connections = [
        "isDarkness: localStorage.getItem('color-theme') === 'dark' ? true : false",
        "sideMenu: false",
        "overlayShow: false",
        "modalLogin: false",
        "userDropDown: false",


];
if ( isset( get_option( 'razmnix_settings' )['Connections'] ) && ! empty( get_option( 'razmnix_settings' )['Connections'] ) ) {
	foreach ( get_option( 'razmnix_settings' )['Connections'] as $value ) {
		foreach ( $value as $connection ) {
			if ( $connection === 'isDarkness' ) {
				$connections[] = "isDarkness: localStorage.getItem('color-theme') === 'dark' ? true : false";
			} else {
				$connections[] = "$connection: false";
			}
		}
	}
}
?>
<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset = "<?php bloginfo( 'charset' ); ?>">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
	<?php wp_head(); ?>
    <script>
        <!--		--><?php //do_action( 'razmnixScriptHead' ); ?>

            let isDark = localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
            if (isDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

    </script>
    <style>
        :root {
            --fontBody: <?= RazmnixSetting::$bodyFont ?>, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --fontHead: <?=  RazmnixSetting::$titlesFont ?>;
            --fontText: <?=  RazmnixSetting::$paragraphFont ?>;
            --fontLink: <?=  RazmnixSetting::$paragraphFont ?>;
            --fontList: <?=  RazmnixSetting::$paragraphFont ?>;
            --fontSelect: <?=  RazmnixSetting::$paragraphFont ?>;
            --fontLabel: <?=  RazmnixSetting::$paragraphFont ?>;
            --fontBtn: <?=  RazmnixSetting::$paragraphFont ?>;
        }
    </style>
</head>
<body <?php body_class(); ?> x-cloak x-data = "{<?= implode( ', ', $connections ) ?> }">
<?php do_action( 'razmnixBodyStart' ); ?>






