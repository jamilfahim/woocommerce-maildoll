<?php
/**
 * Display a custom menu page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function maildoll_settings_display( ){
    

    
	?>

	<h2 class="maildoll-title">Settings</h2>
   <div class="maildoll-settings">
      <?php
    //   if(isset($_POST['submit'])){

    //      // use global variable for database opertation
    //          global $wpdb;
    //      // assign value that pass from form 
    //          $api  = $_POST['apitoken'];
    //          $url= $_POST['maildollurl'];
    //          $email= $_POST['maildollemail'];
    //      // call insert method of wpdb class 
    //      $wpdb->insert('maildoll', array(
    //          'apikey' => $api,
    //          'url' => $url,
    //          'email' => $email,
            
    //      ));
        
    //  }
    function wporg_section_developers_callback( $args ) {
        ?>
        <p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Follow the white rabbit.', 'wporg' ); ?></p>
        <?php
    }

     $settings = get_option('maildoll_setting_api');
     $url = get_option('maildoll_setting_url');
     $email = get_option('maildoll_setting_email');
      ?>
      <form action="options.php" method="post">
      <?php settings_fields( 'maildollapi' ); ?>
        <?php do_settings_sections( 'maildollapi' ); ?>
         <label for="maildoll_setting_api">API Token</label>
         <input type="password" id="apitoken" name="maildoll_setting_api" placeholder="token.."  value="<?php echo $settings; ?>"">

         <label for="maildoll_setting_url">Maildoll URL</label>
         <input type="url" id="maildollurl" name="maildoll_setting_url" placeholder="url here.." value="<?php echo $url; ?>">

         <label for="maildoll_setting_email">Email</label>
         <input type="email"  name="maildoll_setting_email" id="maildollemail" placeholder="abc@mail.com" value="<?php echo $email; ?>">
      
         <?php submit_button(); ?>
      </form>
  </div>
  
<?php
}

