<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://gabykaram.com/
 * @since      1.0.0
 *
 * @package    Simple_Pay_Emails_Per_Product
 * @subpackage Simple_Pay_Emails_Per_Product/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Simple_Pay_Emails_Per_Product
 * @subpackage Simple_Pay_Emails_Per_Product/includes
 * @author     Gaby Karam <gaby@wpshortcuts.studio>
 */
class Simple_Pay_Emails_Per_Product_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'simple-pay-emails-per-product',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
