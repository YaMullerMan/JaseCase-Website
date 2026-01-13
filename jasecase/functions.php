<?php 

wp_dequeue_style( 'global-styles-inline' );

// via the wp_print_styles hook
function shapeSpace_disable_download_manager_styles() {
	
	wp_deregister_style('global-styles-inline');
	
}
add_action('wp_print_styles', 'shapeSpace_disable_download_manager_styles', 100);


// disable stylesheet (example)
function shapeSpace_disable_scripts_styles() {
	
	wp_dequeue_style('global-styles-inline');
	
}
add_action('wp_enqueue_scripts', 'shapeSpace_disable_scripts_styles', 100);

add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));


// this makes the excerpt shorter on the home page if one is not specifically defined
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// remove certain admin items for certain user IDs
function remove_plugin_admin_menu() {
    remove_menu_page('edit.php?post_type=comments');
}
add_action( 'admin_menu', 'remove_plugin_admin_menu', 999);

remove_filter('template_redirect', 'redirect_canonical');