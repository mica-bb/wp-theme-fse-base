<?php
/**
 * Enqueue the styles and script files.
 * 
 * @since 1.0.0
 */
function bb_base_mica_specific_theme_enqueues() {
    wp_enqueue_style(
		'style',
		get_template_directory_uri() . '/style.css',
		array(),
		null
	);
	wp_enqueue_style(
		'main',
		get_template_directory_uri() . '/assets/main.css',
		array(),
		null
	);
    
	// wp_enqueue_script( 
    //             'id',
    //             'url-cdn',
    //              array(), /* dependencies */
    //              null,
    //              true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/main.js', array(''), null, true );
}
add_action( 'wp_enqueue_scripts', 'bb_base_mica_specific_theme_enqueues' );


/* ---------------------- */

function bb_base_mica_specific_theme_admin_styles() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
	
	// Enqueue editor styles.
	add_editor_style( 'assets/main.css' );
}
	
add_action('after_setup_theme', 'bb_base_mica_specific_theme_admin_styles');


/*
 * Print array for logged user
 */
function pa($array){
    if(is_user_logged_in()){
    	echo '<pre style="display:block;background:#fff;display: block;font-family: monospace;white-space: pre;margin: 1em 0;color:black;font-size:12px;font-weight:normal;">';
    	print_r($array);
    	echo '</pre>';
    }
}
