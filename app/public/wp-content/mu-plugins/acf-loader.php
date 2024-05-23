<?php
/**
 * Plugin Name: ACF Pro Loader
 * Description: Loads ACF Pro as a must-use plugin.
 * Author: Unixdev
 * Version: 1.0
 *
 * @package ACF
 */

define( 'ACF_PRO_LICENSE', 'b3JkZXJfaWQ9MzUwMzR8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE0LTA3LTE3IDAzOjIyOjE2' );
$muplugins_acf_path = WP_CONTENT_DIR . '/plugins/advanced-custom-fields-pro/acf.php';

// Do not crash in case the plugin is not installed.
if ( ! file_exists( $muplugins_acf_path ) ) {
	return;
}

require_once $muplugins_acf_path;
