<?php


namespace Razm;

class RazmnixEnqueue
{
	private function enqueue_styles()
	{
		//fonts
		if (RazmnixGetOptions::$options['fontsActive'] && is_array(RazmnixGetOptions::$options['fontsActive'])) {
			foreach ( RazmnixGetOptions::$options['fontsActive'] as $font) {
				wp_enqueue_style(
					'razmnix-' . $font ,
					RAZMNIX_FONTS . $font . '.css' ,
					null ,
					defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER
				);
			}
		}

		//app.css
		wp_enqueue_style(
			'razmnix-app' ,
			RAZMNIX_STYLES . 'app.css' ,
			null ,
			defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER
		);

		//style.css
		wp_enqueue_style(
			'razmnix-style' ,
			get_stylesheet_uri() ,
			null ,
			defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER
		);
	}

	private function enqueue_scripts()
	{
		//alpine.js
		wp_enqueue_script(
			'alpine' ,
			RAZMNIX_SCRIPTS . 'alpine.js' ,
			null ,
			'3.13.5' ,
			['in_footer' => false , 'strategy' => 'defer']
		);

		//app.js
		wp_enqueue_script(
			'razmnix-app' ,
			RAZMNIX_SCRIPTS . 'app.js' ,
			null ,
			defined(WP_DEBUG) && WP_DEBUG ? time() : RAZMNIX_VER ,
			false
		);
	}


	public function __construct()
	{
		add_action('wp_enqueue_scripts' , [$this , 'razmnix_enqueue']);
	}

	public function razmnix_enqueue()
	{
		$this->enqueue_styles();
		$this->enqueue_scripts();
	}


}