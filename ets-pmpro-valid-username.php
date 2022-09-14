<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.expresstechsoftwares.com/
 * @since             1.0.0
 * @package           Ets_Pmpro_Valid_Username
 *
 * @wordpress-plugin
 * Plugin Name:       ets-pmpro-valid-username
 * Plugin URI:        ets-pmpro-valid-username
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Express Tech
 * Author URI:        https://www.expresstechsoftwares.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ets-pmpro-valid-username
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ETS_PMPRO_VALID_USERNAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ets-pmpro-valid-username-activator.php
 */
function activate_ets_pmpro_valid_username() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ets-pmpro-valid-username-activator.php';
	Ets_Pmpro_Valid_Username_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ets-pmpro-valid-username-deactivator.php
 */
function deactivate_ets_pmpro_valid_username() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ets-pmpro-valid-username-deactivator.php';
	Ets_Pmpro_Valid_Username_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ets_pmpro_valid_username' );
register_deactivation_hook( __FILE__, 'deactivate_ets_pmpro_valid_username' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ets-pmpro-valid-username.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ets_pmpro_valid_username() {

	$plugin = new Ets_Pmpro_Valid_Username();
	$plugin->run();

}
run_ets_pmpro_valid_username();
