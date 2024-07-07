<?php

namespace Razm;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;

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




	

}