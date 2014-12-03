<?php
/**
 * Plugin Name: Fancy Links
 * Plugin URI:  https://github.com/steelinside/rel-nofollow-checkbox/tree/Fancy-Links
 * Description: This plugin adds a simple checkbox in the insert/edit link popup for adding .fancy-link class to given link.
 * Version:     1.0
 * Author:      Kirill Belotserkovskiy
 * Author URI:  http://www.steelinside.com
 */
function overwrite_wplink() {
	// Disable wplink
	wp_deregister_script( 'wplink' );
	// Register a new script file to be linked
	wp_register_script( 'wplink', plugins_url( 'wplink.min.js', __FILE__), array( 'jquery', 'wpdialogs' ), false, 1 );
}
add_action( 'admin_enqueue_scripts', 'overwrite_wplink', 999 );
?>