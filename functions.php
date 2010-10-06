<?php
include( TEMPLATEPATH . 'bp/bp-functions.php' );
/*scavenged from the bp-template-pack plugin */

function bp_tpack_init() {
	global $wp_themes;

	/* Check to make sure the active theme is not bp-default */
	if ( 'bp-default' == get_option( 'template' ) )
		return false;

	/* Add the wireframe BP page styles */
	if ( !(int)get_option( 'bp_tpack_disable_css' ) )
		wp_enqueue_style( 'bp-css', plugins_url( $path = basename( dirname( __FILE__ ) ) ) . '/bp.css' );
}
add_action( 'bp_init', 'bp_tpack_init' );


/* Add the wireframe BP page styles */
wp_enqueue_style( 'bp-css', get_stylesheet_directory_uri() . '/bp/bp.css' );


/*  Favicon */
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="http://okfn.org/images/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

?>
