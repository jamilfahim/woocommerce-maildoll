<?php

/**
 * plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    wc_maildoll
 * @subpackage wc-maildoll/includes
 * @author     JH Fahim <rsfahim007@gmail.com>
 */
class Maildoll_Activator {

	 /**
	 * Initialize hook
	 *
	 * @access public
	 * @return void
	 */

	public function init() {
		
      //register_activation_hook( __FILE__, array(__CLASS__,'maildollCreateTable'));
      
	}

public static function maildollCreateTable() {

   global $wpdb;
   $test_db_version = '1.0.0';
   $charset_collate = $wpdb->get_charset_collate();
   $table_name = $wpdb->prefix . 'maildoll';
   $sql = "CREATE TABLE `$table_name` (
   `id` int(11) NOT NULL,
   `api` varchar(220) NOT NULL,
   `url` varchar(220) DEFAULT NULL,
   `email` varchar(220) NOT NULL,
   PRIMARY KEY(id)
   ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
   ";
   if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
     require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
     dbDelta($sql);
     add_option( 'test_db_version', $test_db_version );
   }

}

}



Maildoll_Activator::init();