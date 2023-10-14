<?php

// Custom Options Pages
add_action('init', function () {
  if (function_exists('acf_add_options_page')) {
    // WP Theme Settings
    acf_add_options_sub_page(array(
      'page_title'   => 'WPdough Settings',
      'menu_title'  => 'WPdough Settings',
      'parent_slug'	=> 'themes.php',
      'post_id'   => 'wpdough_settings'
	  ));
  };
});