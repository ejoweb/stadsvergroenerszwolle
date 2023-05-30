<?php
/**
 * Stadsvergroeners Zwolle functions and definitions
 */

/* ### HOOK IT UP ########################################################## */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @return void
 */
add_action( 'after_setup_theme', function() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Enqueue scripts and styles to frontend
	add_action( 'wp_enqueue_scripts', 'svz_add_frontend_styles_and_scripts' );

	// Enqueue scripts and styles to the editor
	add_action( 'enqueue_block_editor_assets', 'svz_add_editor_styles_and_scripts' );
	
} );


/* ### DEFINE FUNCTIONS ##################################################### */

/**
 * Enqueue styles.
 *
 * @return void
 */
function svz_add_frontend_styles_and_scripts() {

	// Get theme version (for cachebusting)
	$theme_version = wp_get_theme()->get( 'Version' );
	$version_string = is_string( $theme_version ) ? $theme_version : false;

	// Register theme stylesheet.
	wp_register_style(
		'svz-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$version_string
	);

	// Enqueue theme stylesheet
	wp_enqueue_style( 'svz-style' );

	// Register theme script	
	wp_register_script( 
		'svz-script-for-frontend',
        get_template_directory_uri() .'/assets/js/script-for-frontend.js', 
		array(),
		false, 
		$version_string
	);

	// Enqueue theme script
	wp_enqueue_script( 'svz-script-for-frontend' );
}


/**
 * Add scripts and styles (editor)
 */
function svz_add_editor_styles_and_scripts() {

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$version_string = is_string( $theme_version ) ? $theme_version : false;
	wp_register_style(
		'svz-style-for-editor',
		get_template_directory_uri() . '/assets/css/style-for-editor.css',
		array(),
		$version_string
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'svz-style-for-editor' );
}
