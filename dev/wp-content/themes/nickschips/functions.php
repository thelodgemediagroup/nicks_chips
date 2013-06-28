<?php
// load stylesheets
add_action('wp_head', 'nc_load_stylesheets', 1);
add_action('init', 'nc_load_menus');

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

function nc_load_menus()
{
	register_nav_menu('navigation', __('Navigation'));
}

function nc_navigation_menu()
{
	wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => 'menu clearfix',           // class of container (should you choose to use it)
    	'menu' => __( 'Navigation', 'navigation' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'navigation',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'bones_main_nav_fallback'      // fallback function		
		));
}
?>