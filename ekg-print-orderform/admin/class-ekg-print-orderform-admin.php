<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Ekg_Print_Orderform
 * @subpackage Ekg_Print_Orderform/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ekg_Print_Orderform
 * @subpackage Ekg_Print_Orderform/admin
 * @author     Your Name <email@example.com>
 */
class Ekg_Print_Orderform_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $ekg_print_orderform    The ID of this plugin.
	 */
	private $ekg_print_orderform;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $ekg_print_orderform       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $ekg_print_orderform, $version ) {

		$this->ekg_print_orderform = $ekg_print_orderform;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ekg_Print_Orderform_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ekg_Print_Orderform_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( "orderform-style", plugin_dir_url( __FILE__ ) . 'css/ekg-print-orderform-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->ekg_print_orderform, EKG_PRINT_ORDERFORM_PLUGIN_URL . 'assets/css/orderform.css', array(), $this->version, 'all' );
		error_log(print_r("Me here3", TRUE)); 
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ekg_Print_Orderform_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ekg_Print_Orderform_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->ekg_print_orderform, plugin_dir_url( __FILE__ ) . 'js/ekg-print-orderform-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function orderform_manage_menu(){
		error_log(print_r("Me here2", TRUE)); 
		$title="Orderform Managing";
		add_menu_page($title, $title, "manage_options", "ekg-print-orderform", array($this, "ekg_print_orderform_management_dashboard"), "dashicons-hammer");
		error_log(print_r("Me here4", TRUE)); 

	}

	public function ekg_print_orderform_management_dashboard(){
		echo "Welcome back!";

	}

}
