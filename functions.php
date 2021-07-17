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
			wp_enqueue_style('main-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
			// wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	}

	add_action('wp_enqueue_scripts', 'wpdough_enqueue_scripts');

?>