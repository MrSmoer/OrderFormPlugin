<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/MrSmoer/OrderFormPlugin
 * @since             1.0.0
 * @package           Ekg_Print_Orderform
 *
 * @wordpress-plugin
 * Plugin Name:       EKG-Print Orderform Plugin
 * Plugin URI:        https://github.com/MrSmoer/OrderFormPlugin.git
 * Description:       This plugin is made to accept orders for 3D-Printing.
 * Version:           1.0.0
 * Author:            EKG-Print Schülerfirma
 * Author URI:        https://github.com/MrSmoer
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ekg-print-orderform
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
define( 'EKG_PRINT_ORDERFORM_VERSION', '1.0.0' );
define( 'EKG_PRINT_ORDERFORM_PLUGIN_URL', plugin_dir_url(__FILE__) );
define( 'EKG_PRINT_ORDERFORM_PLUGIN_PATH', plugin_dir_path(__FILE__) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ekg-print-orderform-activator.php
 */
function activate_ekg_print_orderform() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ekg-print-orderform-activator.php';
	Ekg_Print_Orderform_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ekg-print-orderform-deactivator.php
 */
function deactivate_ekg_print_orderform() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ekg-print-orderform-deactivator.php';
	Ekg_Print_Orderform_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ekg_print_orderform' );
register_deactivation_hook( __FILE__, 'deactivate_ekg_print_orderform' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ekg-print-orderform.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ekg_print_orderform() {

	$plugin = new Ekg_Print_Orderform();
	$plugin->run();

}
run_ekg_print_orderform();
