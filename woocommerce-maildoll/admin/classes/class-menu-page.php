<?php
/**
 * Order
 *
 * @package    wc_menu_page
 * @author     JH Fahim
 * @license    GNU General Public License, version 3
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Wc_Menu_Page{

    public static function init() {

        add_action( 'admin_menu', array( __CLASS__,'wc_maildoll_menu_page') );
       
	
	}

    function wc_maildoll_menu_page() {
        add_menu_page(
            __( 'Maildoll', 'maildoll' ),
            'Mail Doll',
            'manage_options',
            'maildoll',
            'maildoll_deshboard_display',
            'dashicons-image-filter',
            //plugins_url( 'myplugin/images/icon.png' ),
            58
        );
        //add_menu_page('My Custom Page', 'My Custom Page', 'manage_options', 'my-top-level-slug');

        add_submenu_page(
            'maildoll', 
            'Deshboard',
            'Deshboard',
           'manage_options', 
           'maildoll');

        add_submenu_page(
            'maildoll', 
            'Contact',
            'Contact',
           'manage_options', 
           'orders',
           'maildoll_orders_display'
        );
        add_submenu_page(
            'maildoll', 
            'Campaigns',
            'Campaigns',
            'manage_options', 
            'campaigns',
            'maildoll_campaigns_display'
        );

       add_submenu_page(
            'maildoll', 
            'Settings',
            'Settings',
            'manage_options', 
            'setting',
            'maildoll_settings_display'
        );
    }

   
   


}

Wc_Menu_Page::init();



