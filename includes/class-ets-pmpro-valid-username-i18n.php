<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.expresstechsoftwares.com/
 * @since      1.0.0
 *
 * @package    Ets_Pmpro_Valid_Username
 * @subpackage Ets_Pmpro_Valid_Username/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ets_Pmpro_Valid_Username
 * @subpackage Ets_Pmpro_Valid_Username/includes
 * @author     Express Tech <business@expresstechsoftwares.com>
 */
class Ets_Pmpro_Valid_Username_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ets-pmpro-valid-username',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
