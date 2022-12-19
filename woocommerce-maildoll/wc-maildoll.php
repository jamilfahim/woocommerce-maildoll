<?php
/*
 * Plugin Name: WooCommerce Maildoll
 * Plugin URI: https://softtechiit.com
 * Description: custom plugin for maildoll.
 * Author: Jh Fahim
 * Author URI: http://jhfahim.com
 * Version: 1.0.1
 */

 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( !class_exists("Wc_Maildoll") ) {
    final class Wc_Maildoll {

        private static $instance;

		public static function getInstance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Wc_Maildoll ) ) {
				self::$instance = new Wc_Maildoll;	
				self::$instance->includes();
			}

			return self::$instance;
		}

        public function __construct() {

           //do something
        
        }

        /**
		 * Setup Constants
		 */
		public function setup_constants(){

			define( 'Wc_Maildoll_PLUGIN_VERSION', '1.0.0' );

			define( 'Wc_Maildoll_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			define( 'Wc_Maildoll_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

		}

        public function includes(){
            //admin page
            require plugin_dir_path( __FILE__ ) . 'admin/classes/class-menu-page.php';
            require plugin_dir_path( __FILE__ ) . 'admin/classes/class-settings-page.php';
            //admin page one display
            require plugin_dir_path( __FILE__ ) . 'admin/partials/wc-orders-display.php';
            require plugin_dir_path( __FILE__ ) . 'admin/partials/maildoll-deshboard-display.php';
            require plugin_dir_path( __FILE__ ) . 'admin/partials/maildoll-campaigns-display.php';
            require plugin_dir_path( __FILE__ ) . 'admin/partials/maildoll-settings-display.php';
            require plugin_dir_path( __FILE__ ) . 'admin/classes/class-scripts.php';
            //require plugin_dir_path( __FILE__ ) . 'includes/class-maildoll-activator.php';
            //require plugin_dir_path( __FILE__ ) . 'includes/active.php';
            

        }
     
    }
}
function wc_maildoll() {
	return Wc_Maildoll::getInstance();
}

add_action( 'plugins_loaded', 'wc_maildoll' );


