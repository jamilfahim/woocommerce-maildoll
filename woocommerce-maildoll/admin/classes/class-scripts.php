<?php
/**
 * Scripts
 *
 * @package    wc-maildoll
 * @author     JH Fahim 
 * @license    GNU General Public License, version 3
 */
if ( ! defined( 'ABSPATH' ) ) {
   exit;
}
class Wc_Maildoll_Scripts {
   /**
	 * Initialize scripts
	 *
	 * @access public
	 * @return void
	 */
	public static function init() {
		
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'wc_maildoll_admin_styles' ) );
      
	}

	/**
	 * Loads css files
	 *
	 * @access public
	 * @return void
	 */

    public function wc_maildoll_admin_styles(){
      wp_enqueue_style( 'maildoll-admin', plugin_dir_url( dirname( __FILE__ )) . 'css/admin.css', array(), '1.0.0' );
    }

}
Wc_Maildoll_Scripts::init();