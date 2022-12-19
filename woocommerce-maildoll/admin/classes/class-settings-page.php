<?php 
/**
 * settings 
 *
 * @package    wc_menu_page
 * @author     JH Fahim
 * @license    GNU General Public License, version 3
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Wp_Settings_Page {

    public static function init() {

        //add_action( 'admin_init', array( __CLASS__,'your_function') );
        add_action( 'admin_init', array( __CLASS__,'register_maildoll_plugin_settings') );
        //register_setting( 'maildollapi', 'maildoll_setting_api' );
	
	}

    function register_maildoll_plugin_settings() {
        //register our settings
        register_setting( 'maildollapi', 'maildoll_setting_api' );
        register_setting( 'maildollapi', 'maildoll_setting_url' );
        register_setting( 'maildollapi', 'maildoll_setting_email' );
    }
      
        
    }
    
    Wp_Settings_Page::init();