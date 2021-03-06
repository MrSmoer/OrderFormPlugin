<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Ekg_Print_Orderform
 * @subpackage Ekg_Print_Orderform/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ekg_Print_Orderform
 * @subpackage Ekg_Print_Orderform/public
 * @author     Your Name <email@example.com>
 */
class Ekg_Print_Orderform_Public {

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
	 * @param      string    $ekg_print_orderform       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $ekg_print_orderform, $version ) {

		$this->ekg_print_orderform = $ekg_print_orderform;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->ekg_print_orderform, plugin_dir_url( __FILE__ ) . 'css/ekg-print-orderform-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->ekg_print_orderform, plugin_dir_url( __FILE__ ) . 'js/ekg-print-orderform-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( "config_visibilty_script", plugin_dir_url( __FILE__ ) . 'js/visibilityOfConfig.js', array( 'jquery' ), $this->version, true );
		

	}

	public function load_orderform_content(){

		// return "sample";
		ob_start();
		include_once EKG_PRINT_ORDERFORM_PLUGIN_PATH.'public/partials/orderform-content.php';
		$template= ob_get_contents();
		ob_end_clean();
		return $template;
	}

}
