<?php

namespace Razm;

class RazmnixOptionsOther {
public function getOther(): array {
	return
	[
		// header phone
		[
			'id'      => 'headerPhone',
			'type'    => 'text',
			'title'   => esc_html__( 'phone', 'razmnix' ),
			'default' => '0218541586',
		],
		// header Search PlaceHolder
		[
			'id'      => 'headerSearchPlace',
			'type'    => 'text',
			'title'   => esc_html__( 'Search PlaceHolder', 'razmnix' ),
			'default' => esc_html__( 'Search', 'razmnix' ),
		],
		// register Url
		[
			'id'      => 'registerUrl',
			'type'    => 'text',
			'title'   => esc_html__( 'Registration page url name', 'razmnix' ),
			'help'    => esc_html__( 'https://yourSiteName.com/------- Put your desired value instead of ----', 'razmnix' ),
			'default' => esc_html__( 'register', 'razmnix' ),
		],
		// login Url
		[
			'id'    => 'loginUrl',
			'type'  => 'text',
			'title' => esc_html__( 'Login page url name', 'razmnix' ),
			'help'  => esc_html__( 'https://yourSiteName.com/------- Put your desired value instead of ----', 'razmnix' ),

			'default' => esc_html__( 'login', 'razmnix' ),
		],
		// Reset Password Url
		[
			'id'    => 'resetPasswordUrl',
			'type'  => 'text',
			'title' => esc_html__( 'Reset Password page url name', 'razmnix' ),
			'help'  => esc_html__( 'https://yourSiteName.com/------- Put your desired value instead of ----', 'razmnix' ),

			'default' => esc_html__( 'reset', 'razmnix' ),
		],
		// slogan login
		[
			'id'      => 'sloganLogin',
			'type'    => 'textarea',
			'title'   => esc_html__( 'The slogan of the site on the login and registration page', 'razmnix' ),
			'default' => esc_html__( 'Welcome home! Turn on the key. Come on', 'razmnix' ),
		],
	];
}
}