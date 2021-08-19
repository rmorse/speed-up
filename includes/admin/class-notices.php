<?php
namespace Speed_Up\Admin;

/**
 * Displays admin notices
 *
 * @link       https://github.com/rmorse/speed-up
 * @since      1.0.0
 *
 * @package    Speed_Up
 * @subpackage Speed_Up\Admin
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Notices {

	public static function display_errors() {
		$class = 'notice notice-error';
		$message = __( 'Speed Up Demo: An error has occurred (or not).', 'speed-up' );
		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
	}

}
