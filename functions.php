<?php
/**
 * Theme functions
 *
 * @package WPdough
 */

 /**
 * Enqueue theme's scripts and styles
 */
	function wpdough_enqueue_scripts() {
		// Register styles and scripts
		wp_register_style('main-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
		wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true );

		// Enqueue styles and scripts
		wp_enqueue_style('main-css');
		wp_enqueue_script('main-js');
	}

	add_action('wp_enqueue_scripts', 'wpdough_enqueue_scripts');
?>