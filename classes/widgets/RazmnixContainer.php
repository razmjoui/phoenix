<?php

namespace Razm;

use Elementor\Controls_Manager;
use Elementor\Core\Breakpoints\Manager as Breakpoints_Manager;
use Elementor\Element_Base;
use Elementor\Embed;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Flex_Container;
use Elementor\Group_Control_Flex_Item;
use Elementor\Group_Control_Grid_Container;
use Elementor\Plugin;
use Elementor\Shapes;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class RazmnixContainer extends RazmnixBaseWidget {
	const NAME     = self::CONST . 'Container';
	const DARK     = self::NAME . 'DarkMode';
	const LIGHT    = self::NAME . 'LightMode';
	const SECTIONS = ['register_controls'];
	const TITLE    = 'Container';
	const ICON     = 'eicon-nav-menu';

	private $active_kit;

	protected function is_dynamic_content(): bool {
		return false;
	}

	public function __construct( array $data = [], array $args = null ) {
		parent::__construct( $data, $args );

		$this->active_kit = Plugin::$instance->kits_manager->get_active_kit();
	}

	


	

}