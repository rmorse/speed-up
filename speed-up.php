<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Speed Up
 * Plugin URI:        https://github.com/rmorse/speed-up
 * Description:       A fictional plugin for demonstrating autoloading with PHP namespaces.
 * Version:           1.0.0
 * Author:            Ross Morsali
 * Author URI:        http://codeamp.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       speed-up
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load the autoloader from it's own file
require_once plugin_dir_path( __FILE__ ) . 'autoload.php';


// The code that runs during plugin activation.
function activate_speed_up() {
	\Speed_Up\Core\Activator::activate();
}

// The code that runs during plugin deactivation.
function deactivate_speed_up() {
	\Speed_Up\Core\Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_speed_up' );
register_deactivation_hook( __FILE__, 'deactivate_speed_up' );


// Begins execution of the plugin.
function run_speed_up() {
	$plugin = new \Speed_Up\Run();
}
run_speed_up();
