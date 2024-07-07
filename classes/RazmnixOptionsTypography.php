<?php

namespace Razm;

class RazmnixOptionsTypography {
	public function getTypography(): array {
		return
			[
// font Active
[
	'id'       => 'fontsActive',
	'type'     => 'select',
	'title'    => esc_html__( 'Active fonts', 'razmnix' ),
	'help'     => esc_html__( 'Just select the required fonts. It is recommended that 1 font and maximum 2 fonts be active.', 'razmnix' ),
	'chosen'   => true,
	'multiple' => true,
	'ajax'     => true,
	'options'  => RazmnixOptions::$fonts,
	'default'  => 'iransans'
],
// Typography Body
[
	'id'      => 'bodyFont',
	'type'    => 'select',
	'title'   => esc_html__( 'Original Font', 'razmnix' ),
	'help'    => esc_html__( 'Choose a font name for the main content font on all pages.', 'razmnix' ),
	'chosen'  => true,
	'options' => RazmnixOptions::$fonts,
	'ajax'    => true,
	'default' => 'iransans'
],
// Titles Font (H1,H1,H2,H3,H4,H5,H6)
[
	'id'      => 'titlesFont',
	'type'    => 'select',
	'title'   => esc_html__( 'Titles font (H1, H1, H2, H3, H4, H5, H6)', 'razmnix' ),
	'help'    => esc_html__( 'Just select the required fonts. It is recommended that 1 font and maximum 2 fonts be active.', 'razmnix' ),
	'chosen'  => true,
	'options' => RazmnixOptions::$fonts,
	'ajax'    => true,
	'default' => 'iransans'
],
// Paragraph Font
[
	'id'      => 'paragraphFont',
	'type'    => 'select',
	'title'   => esc_html__( 'Paragraph font', 'razmnix' ),
	'help'    => esc_html__( 'Select the font name for the paragraph font for all pages.', 'razmnix' ),
	'chosen'  => true,
	'options' => RazmnixOptions::$fonts,
	'ajax'    => true,
	'default' => 'iransans'
],
			];
	}
}