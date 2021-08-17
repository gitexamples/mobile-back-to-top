<?php
/**
 * Plugin Name: BoldGrid Mobile Back to Top Button
 * Plugin URI: https://www.boldgrid.com/boldgrid-editor/
 * Description: Allows Back to Top button to run on mobile screens
 * Version: 1.0.0
 * Author: BoldGrid <support@boldgrid.com>
 * Author URI: https://www.boldgrid.com/
 * Text Domain: boldgrid-editor
 * Domain Path: /languages
 * License: GPLv2 or later
 */
// Prevent direct calls.
if ( ! defined( 'WPINC' ) ) {
	die();
}
add_filter( 'boldgrid_theme_framework_config', function ( $configs ) {
	$configs['scripts']['options']['goup']['hideUnderWidth'] = 0;
	return $configs;
} );