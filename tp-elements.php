<?php 
/**
 *Plugin Name: TP Elements
 * Description: Theme core addon pluign.
 * Version:     1.0.0
 * Text Domain: tp-elements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define( 'TPELEMENTS_FILE', __FILE__ );
define( 'TPELEMENTS_DIR_PATH_PRO', plugin_dir_path( __FILE__ ) );
define( 'TPELEMENTS_DIR_URL_PRO', plugin_dir_url( __FILE__ ) );
define( 'TPELEMENTS_ASSETS_PRO', trailingslashit( TPELEMENTS_DIR_URL_PRO . 'assets' ) );

require TPELEMENTS_DIR_PATH_PRO . 'base.php';
require TPELEMENTS_DIR_PATH_PRO . 'post-type/post-type.php';
require TPELEMENTS_DIR_PATH_PRO . 'shortcode-elementor/elementor-shortcode.php';
require TPELEMENTS_DIR_PATH_PRO . 'inc/custom-tp-icon.php';
require TPELEMENTS_DIR_PATH_PRO . 'widget-option/admin-init.php';
require TPELEMENTS_DIR_PATH_PRO . 'themephi-header-footer-elementor/themephi-header-footer-elementor.php';

/**
 * SVG upload support (admin only) for safer usage.
 */
function tpelements_allow_svg_uploads( $mimes ) {
	if ( current_user_can( 'manage_options' ) ) {
		$mimes['svg']  = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';
	}
	return $mimes;
}
add_filter( 'upload_mimes', 'tpelements_allow_svg_uploads' );
add_filter( 'mime_types', 'tpelements_allow_svg_uploads' );

function tpelements_fix_svg_filetype_check( $data, $file, $filename, $mimes ) {
	if ( ! current_user_can( 'manage_options' ) ) {
		return $data;
	}

	$ext = strtolower( pathinfo( $filename, PATHINFO_EXTENSION ) );
	if ( 'svg' === $ext || 'svgz' === $ext ) {
		$data['ext']             = $ext;
		$data['type']            = 'image/svg+xml';
		$data['proper_filename'] = $filename;
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'tpelements_fix_svg_filetype_check', 10, 4 );

/**
 * Allow Elementor unfiltered upload flow for admins.
 */
function tpelements_allow_elementor_unfiltered_uploads( $enabled ) {
	if ( current_user_can( 'manage_options' ) ) {
		return true;
	}
	return $enabled;
}
add_filter( 'elementor/files/allow_unfiltered_upload', 'tpelements_allow_elementor_unfiltered_uploads' );
  
