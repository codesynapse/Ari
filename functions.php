<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

// Add support for custom background
add_theme_support( 'custom-background' );

// Add support for custom header
add_theme_support( 'genesis-custom-header', array(
	'width' => 1152,
	'height' => 120
) );

/** Remove secondary sidebar */
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );
unregister_sidebar( 'header-right' );
unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

genesis_register_layout( 'full-width-content' );

// Unregister content/sidebar layout setting
genesis_unregister_layout( 'content-sidebar' );
 
// Unregister sidebar/content layout setting
genesis_unregister_layout( 'sidebar-content' );
 
// Unregister content/sidebar/sidebar layout setting
genesis_unregister_layout( 'content-sidebar-sidebar' );
 
// Unregister sidebar/sidebar/content layout setting
genesis_unregister_layout( 'sidebar-sidebar-content' );

/** Customize the credits */
add_filter('genesis_footer_creds_text', 'eo_custom_footer_creds');
function eo_custom_footer_creds()
{
echo '<div class="creds"><p>';
echo 'Copyright &copy; ';
echo date('Y');
echo ' &middot; Genesis Child Theme by <a href="http://www.sparxengine.net/">Sparxengine</a> &middot ';
echo '</p></div>';
}

 
// Unregister sidebar/content/sidebar layout setting
genesis_unregister_layout( 'sidebar-content-sidebar' );

