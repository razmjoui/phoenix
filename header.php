<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset = "<?php bloginfo( 'charset' ); ?>">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
	<?php wp_head(); ?>
    <script>
		<?php do_action( 'razmnixScriptHead' ); ?>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
	<?php




	use Razm\RazmnixGetOptions;
	$connections = [];
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
    <style>
        :root {
            --fontBody: <?= RazmnixGetOptions::$bodyFont ?>, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --fontHead: <?=  RazmnixGetOptions::$titlesFont ?>;
            --fontText: <?=  RazmnixGetOptions::$paragraphFont ?>;
            --fontLink: <?=  RazmnixGetOptions::$paragraphFont ?>;
            --fontList: <?=  RazmnixGetOptions::$paragraphFont ?>;
            --fontSelect: <?=  RazmnixGetOptions::$paragraphFont ?>;
            --fontLabel: <?=  RazmnixGetOptions::$paragraphFont ?>;
            --fontBtn: <?=  RazmnixGetOptions::$paragraphFont ?>;
        }
    </style>
</head>
<body <?php body_class(); ?> x-cloak x-data = "{<?= implode( ', ', $connections ); ?>}">
<?php do_action( 'razmnixBodyStart' ); ?>






