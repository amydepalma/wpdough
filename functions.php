<?php
/**
 * WPdough base functions and definitions
 *
 * @link https://github.com/amydepalma/wpdough
 *
 * @package WPdough
 * @since 1.0.0
 */

define('LOCAL_DOMAIN', 'wpdough.local');

/**
 * Includes
 */
array_map(function ($file) {
	$filepath = "/includes/{$file}.php";
  require_once(get_stylesheet_directory() . $filepath);
}, ['utilities', 'blocks', 'post-types', 'taxonomies', 'options-pages']);

/**
 * Define Constants
 */
define('WPDOUGH_VERSION', '1.0.0');

define('WPDOUGH_YELLOW_500', '#FFC906');
define('WPDOUGH_LIGHT_BLUE_500', '#5DA8FF');
define('WPDOUGH_DARK_BLUE_500', '#2063B3');
define('WPDOUGH_MAGENTA_500', '#D92F80');
define('WPDOUGH_TEAL_500', '#06CBAD');
define('WPDOUGH_GRAY_500', '#202020');
define('WPDOUGH_WHITE', '#FFFFFF');

/**
 * Add theme colors for Gutenberg
 */
add_theme_support('editor-color-palette', array(
	array(
		'name' => 'Yellow 500',
		'slug' => 'yellow_500',
		'color' => WPDOUGH_YELLOW_500
	),
	array(
		'name' => 'Light Blue 500',
		'slug' => 'light_blue_500',
		'color' => WPDOUGH_LIGHT_BLUE_500
	),
	array(
		'name' => 'Dark Blue 500',
		'slug' => 'dark_blue_500',
		'color' => WPDOUGH_DARK_BLUE_500
	),
	array(
		'name' => 'Magenta 500',
		'slug' => 'magenta_500',
		'color' => WPDOUGH_MAGENTA_500
	),
	array(
		'name' => 'Teal 500',
		'slug' => 'teal_500',
		'color' => WPDOUGH_TEAL_500
	),
	array(
		'name' => 'Gray 500',
		'slug' => 'gray_500',
		'color' => WPDOUGH_GRAY_500
	),
	array(
		'name' => 'White',
		'slug' => 'white',
		'color' => WPDOUGH_WHITE
	),
));

/**
 * Setup theme
 */
add_action('after_setup_theme', function() {

	// this makes only the css from blocks on the page load, but it puts their css in the footer
	add_filter('should_load_separate_core_block_assets', '__return_true');

	add_post_type_support('page', 'excerpt');

  /**
   * Enable plugins to manage the document title
   * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
   */
  add_theme_support('title-tag');

  /**
   * Enable post thumbnails
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support('post-thumbnails');

  /**
   * Enable HTML5 markup support
   * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
   */
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  /**
   * Block editor features
   */
	// Remove default patterns
  remove_theme_support("core-block-patterns");

	// Prevent loading patterns from the WordPress.org pattern directory
  add_filter( 'should_load_remote_block_patterns', '__return_false' );

  // Remove default block categories
  unregister_block_pattern_category('buttons');

  // Editor styles
  add_theme_support("editor-styles");
  add_editor_style(asset_path("styles/editor.css"));

	if (!is_user_logged_in()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', false);
	}

});

/**
 * Enqueue additional block editor assets
 */
add_action('enqueue_block_editor_assets', 'WPDOUGH_custom_block_styles');
function WPDOUGH_custom_block_styles($hook) {
	wp_enqueue_style('wpdough-editor-css', asset_path('styles/editor.css'), array(), WPDOUGH_VERSION, 'all');
	wp_enqueue_script('wpdough-editor-js', asset_path('scripts/editor.js'), array('wp-blocks', 'wp-dom'), WPDOUGH_VERSION, true);
}

/**
 * Enqueue styles
 */
add_action('wp_enqueue_scripts', 'WPDOUGH_enqueue_assets', 15);
function WPDOUGH_enqueue_assets() {
	wp_enqueue_style('wpdough-css', asset_path('styles/main.css'), array(), WPDOUGH_VERSION, 'all');
  	wp_enqueue_script('wpdough-js', asset_path('scripts/main.js'), array(), WPDOUGH_VERSION , true );
}

/**
 * Register navigation menus
 */
register_nav_menus([
  'primary_navigation' => __('Primary Navigation', 'wpdough'),
  'footer_navigation' => __('Footer Navigation', 'wpdough')
]);

/**
 * Adds Reusable Blocks to ACF post types
 */
add_filter('acf/get_post_types', function ($post_types) {
  if (!in_array('wp_block', $post_types)):
    $post_types[] = 'wp_block';
	endif;
  return $post_types;
});


/**
 * Create a Custom Category (custom-blocks) and reorder all categories so it is at the top
 * https://developer.wordpress.org/block-editor/reference-guides/filters/block-filters/#managing-block-categories
 * https://wordpress.org/support/topic/reorder-editor-inserter-blocks/
 */
function custom_block_category($categories, $editor_context) {
	// Make sure a post is provided
	if (!empty($editor_context->post)) {

		// Create new category, Custom
		$custom_category = [
			'slug' => 'custom-blocks',
			'title' => __('Custom Blocks', 'custom-layout' ),
		];

		// Move the Custom category to the top
		$reordered_categories = [];
		$reordered_categories[0] = $custom_category;

		// Rebuild cats array
		foreach($categories as $category) {
			$reordered_categories[] = $category;
		}

		return $reordered_categories;
	}
}
add_filter('block_categories_all', 'custom_block_category', 10, 2);

/**
 * Rewrite rules for Resources
 */
# add_action('generate_rewrite_rules', function($wp_rewrite){
#   // TODO: Make this dynamic; not working but I suspect it had to do with timing...
#   $news_archive = get_post_type_object('news-item');
#   $news_archive_slug = $post_type_data->rewrite['slug'];

#   $new_rules = array(
#     'resources/news/c/([^/]+)/?$' => 'index.php?news-item-tax=' . $wp_rewrite->preg_index(1), // '/resources/news/c/CAT/'
#   );
#   $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
# });
