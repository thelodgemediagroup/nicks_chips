<?php
// load stylesheets
add_action('wp_head', 'nc_load_scripts_stylesheets', 1);
add_action('init', 'nc_load_menus');

// load stylesheets
function nc_load_scripts_stylesheets()
{
	// register styles
	wp_register_style('css_reset', get_stylesheet_directory_uri().'/assets/css/reset.css');
	wp_register_style('main_stylesheet', get_stylesheet_directory_uri().'/assets/css/style.css');

    // register scripts
    wp_register_script('cufon-yui', get_stylesheet_directory_uri().'/assets/js/cufon-yui.js');
    wp_register_script('coop', get_stylesheet_directory_uri().'/assets/js/coop_900-coop_italic_900.font.js');
    wp_register_script('scripts', get_stylesheet_directory_uri().'/assets/js/scripts.js');

	// insert styles
	wp_enqueue_style('css_reset');
	wp_enqueue_style('main_stylesheet');

    // insert scripts
    wp_enqueue_script('cufon-yui');
    wp_enqueue_script('coop');
    wp_enqueue_script('scripts');
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
    	'menu_class' => 'coop',         // adding custom nav class
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