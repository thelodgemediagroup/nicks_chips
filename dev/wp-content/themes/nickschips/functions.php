<?php
// load stylesheets
add_action('wp_head', 'nc_load_stylesheets', 1);

// load stylesheets
function nc_load_stylesheets()
{
	// register styles
	wp_register_style('css_reset', get_stylesheet_directory_uri().'/assets/css/reset.css');
	wp_register_style('main_stylesheet', get_stylesheet_directory_uri().'/assets/css/style.css');

	// insert styles
	wp_enqueue_style('css_reset');
	wp_enqueue_style('main_stylesheet');
}

?>