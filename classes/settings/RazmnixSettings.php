<?php

namespace RazmS;


use CSF;

class RazmnixSettings {
	private function createSections(): array {
		return [
			$this->createSection( 'general', esc_html__( 'general', 'razmnix' ) ),
			$this->createSubSection( 'general', esc_html__( 'Extensions', 'razmnix' ), ( new RazmnixSettingsExtensions() )->getExtensions() ),
			$this->createSubSection( 'general', esc_html__( 'Elementor', 'razmnix' ), ( new RazmnixSettingsElementor() )->getElementor() ),
			$this->createSubSection( 'general', esc_html__( 'connections', 'razmnix' ), ( new RazmnixSettingsConnections() )->getConnections() ),

			$this->createSection( 'header', esc_html__( 'header', 'razmnix' ) ),
			$this->createSubSection( 'header', esc_html__( 'Header Type', 'razmnix' ), ( new RazmnixSettingsHeaderType() )->getHeaderType() ),
			$this->createSubSection( 'header', esc_html__( 'Header Logo', 'razmnix' ), ( new RazmnixSettingsHeaderLogo() )->getHeaderLogo() ),
			$this->createSubSection( 'header', esc_html__( 'Header Options', 'razmnix' ), ( new RazmnixSettingsHeaderFields() )->getHeaderFields() ),


			$this->createSection( 'menus', esc_html__( 'menus', 'razmnix' ) ),
			$this->createSubSection( 'menus', esc_html__( 'user menu', 'razmnix' ), ( new RazmnixSettingsUserMenu() )->getUserMenu() ),
			$this->createSubSection( 'menus', esc_html__( 'side menu', 'razmnix' ), ( new RazmnixSettingsSideMenu() )->getSideMenu() ),
			$this->createSubSection( 'menus', esc_html__( 'main menu', 'razmnix' ), ( new RazmnixSettingsMainMenu() )->getMainMenu() ),
			$this->createSubSection( 'menus', esc_html__( 'category', 'razmnix' ), ( new RazmnixSettingsCategory() )->getCategory() ),


			$this->createSection( 'footer', esc_html__( 'footer', 'razmnix' ) ),
			$this->createSubSection( 'footer', esc_html__( 'general', 'razmnix' ), ( new RazmnixSettingsFooterFields() )->getFooterFields() ),


			$this->createSection( 'style', esc_html__( 'Style', 'razmnix' ) ),
			$this->createSubSection( 'style', esc_html__( 'Color', 'razmnix' ), ( new RazmnixSettingsColor() )->getColor() ),
			$this->createSubSection( 'style', esc_html__( 'Typography', 'razmnix' ), ( new RazmnixSettingsTypography() )->getTypography() ),

			$this->createSection( 'other', esc_html__( 'Other', 'razmnix' ) ),
			$this->createSubSection( 'other', esc_html__( 'Other', 'razmnix' ), ( new RazmnixSettingsOther() )->getOther() ),


		];
	}

	private static string $prefix;
	public static array   $headers        = [];
	public static array   $footers        = [];
	public static array   $MegaMenus      = [];
	public static array   $defaultFooters = [
		'roocket'   => 'roocket',
		'webdenj'   => 'webdenj',
		'sabzlearn' => 'sabzlearn',
	];
	public static array   $defaultHeaders = [
		'default'   => 'default',
		'roocket'   => 'roocket',
		'webdenj'   => 'webdenj',
		'sabzlearn' => 'sabzlearn',
	];
	public static array   $fonts          = [];


	public static function init(): void {
		self::$prefix = "razmnix_settings";
		self::initializeFonts();
		self::initializePosts( 'razmnixheader', self::$headers );
		self::initializePosts( 'razmnixfooter', self::$footers );
		self::initializePosts( 'razmnixmega', self::$MegaMenus );
		( new self() )->createOptions();
	}

	private static function initializeFonts(): void {
		self::$fonts = [
			'iransans'    => __( 'iransans', 'razmnix' ),
			'iranyekan'   => __( 'iranyekan', 'razmnix' ),
			'dana'        => __( 'dana', 'razmnix' ),
			'vazir'       => __( 'vazir', 'razmnix' ),
			'vazirfd'     => __( 'vazirfd', 'razmnix' ),
			'shabnam'     => __( 'shabnam', 'razmnix' ),
			'samim'       => __( 'samim', 'razmnix' ),
			'sahel'       => __( 'sahel', 'razmnix' ),
			'parastoo'    => __( 'parastoo', 'razmnix' ),
			'iranrounded' => __( 'iranrounded', 'razmnix' ),
			'gandom'      => __( 'gandom', 'razmnix' ),
			'aviny'       => __( 'aviny', 'razmnix' ),
			'anic'        => __( 'anic', 'razmnix' ),
			'morabba'     => __( 'morabba', 'razmnix' ),
		];
	}

	private static function initializePosts( string $postType, array &$storage ): void {
		$posts = get_posts( [
			                    'post_type'   => $postType,
			                    'post_status' => 'publish',
			                    'numberposts' => - 1
		                    ] );

		foreach ( $posts as $post ) {
			$storage[ $post->ID ] = $post->post_title;
		}
	}

	public function createOptions(): void {
		if ( class_exists( 'CSF' ) ) {
			CSF::createOptions( self::$prefix, [
				'menu_title'  => esc_html__( 'phoenix Settings', 'razmnix' ),
				'menu_slug'   => 'razmnix',
				'menu_type'   => 'submenu',
				'menu_parent' => 'themes.php',
			] );
			$sections = $this->createSections();

			foreach ( $sections as $section ) {
				CSF::createSection( self::$prefix, $section );
			}
		}
	}


	private function createSection( string $id, string $title ): array {
		return [
			'id'    => $id,
			'title' => $title,
		];
	}

	private function createSubSection( string $parent, string $title, array $fields ): array {
		return [
			'parent' => $parent,
			'title'  => $title,
			'fields' => $fields,
		];
	}


}

RazmnixSettings::init();