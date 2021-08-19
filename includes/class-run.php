<?php
namespace Speed_Up;

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/rmorse/speed-up
 * @since      1.0.0
 *
 * @package    Speed_Up
 * @subpackage Speed_Up\Core
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Run {

	/**
	 * @since    3.0.0
	 */
	public function __construct() {
		// Loads an admin notice
		$admin_notices = new \Speed_Up\Admin\Notices();
		add_action( 'admin_notices', array( $admin_notices, 'display_errors' ) );
	}
}