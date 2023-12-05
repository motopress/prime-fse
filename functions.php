<?php

define('PRIME_FSE_VERSION', wp_get_theme()->get( 'Version' ));

if ( ! function_exists( 'prime_fse_support' ) ) :

	function prime_fse_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'prime_fse_support' );

if ( ! function_exists( 'prime_fse_styles' ) ) :

    function prime_fse_styles() {

		wp_register_style(
			'prime-fse-style',
			get_template_directory_uri() . '/style.css',
			array(),
			PRIME_FSE_VERSION
		);

		wp_enqueue_style( 'prime-fse-style' );

		wp_enqueue_script(
			'prime-fse-script',
			get_template_directory_uri() . '/assets/js/functions.js',
			array(),
			PRIME_FSE_VERSION
		);

	}

endif;

add_action( 'wp_enqueue_scripts', 'prime_fse_styles' );

function prime_fse_comment_form_default_fields( $fields ) {

	$new_fields = array(
		'author' => $fields['author'],
		'email' => $fields['email'],
		'comment' => $fields['comment']
	);

	unset( $fields['url'] );

	return $new_fields + $fields;

}

add_filter( 'comment_form_fields', 'prime_fse_comment_form_default_fields' );


function prime_fse_init() {

	register_block_style(
		'getwid/advanced-heading',
		array(
			'name' => 'repeating-text',
			'label' => __( 'Repeating text', 'prime-fse' )
		)
	);

	register_block_style(
		'getwid/image-box',
		array(
			'name' => 'style-1',
			'label' => __( 'Style 1', 'prime-fse' )
		)
	);

	register_block_style(
		'getwid/icon-box',
		array(
			'name' => 'style-1',
			'label' => __( 'Style 1', 'prime-fse' )
		)
	);

	register_block_style(
		'getwid/testimonial',
		array(
			'name' => 'style-1',
			'label' => __( 'Style 1', 'prime-fse' )
		)
	);

	register_block_style(
		'getwid/testimonial',
		array(
			'name' => 'style-2',
			'label' => __( 'Style 2', 'prime-fse' )
		)
	);

	register_block_style(
		'getwid/testimonial',
		array(
			'name' => 'style-3',
			'label' => __( 'Style 3', 'prime-fse' )
		)
	);

	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'prime-fse',
			array( 'label' => _x( 'Prime FSE', 'patterns category name', 'prime-fse' ) )
		);
	}

	if ( ! function_exists( 'getwid' ) && function_exists( 'unregister_block_pattern' ) ) {
		unregister_block_pattern( 'prime-fse/features-list-2' );
		unregister_block_pattern( 'prime-fse/latest-posts' );
		unregister_block_pattern( 'prime-fse/map-with-contacts' );
		unregister_block_pattern( 'prime-fse/performance' );
		unregister_block_pattern( 'prime-fse/pricing' );
		unregister_block_pattern( 'prime-fse/team' );
		unregister_block_pattern( 'prime-fse/testimonials' );
		unregister_block_pattern( 'prime-fse/video-popup' );
	}

}

add_action( 'init', 'prime_fse_init' );

function prime_fse_add_custom_icons( $manager ) {

	// register new font
	$custom_icons = [
		// load icons list for visual editor from function
		'icons' => prime_fse_custom_icons_list(),
		'handle' => 'prime-fse-icons',
		'src' => get_template_directory_uri() . '/assets/fonts/prime-fse/prime-fse.css',
		'deps' => null,
		'ver' => PRIME_FSE_VERSION
	];

	$manager->registerFont( 'prime-fse-icons', $custom_icons );
}

add_action( 'getwid/icons-manager/init', 'prime_fse_add_custom_icons' );

function prime_fse_custom_icons_list() {
	return array(
		'Theme Icons' => array(
			'prime-fse-icon-check',
			'prime-fse-icon-arrow-down',
		)
	);
}

require get_template_directory() . '/includes/tgmpa-init.php';
require get_template_directory() . '/includes/demo-import.php';