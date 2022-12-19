<?php
/**
 * Display a custom menu page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function maildoll_deshboard_display(){
	
	?>
	<h2 class="maildoll-title"> Deshboard </h2>
	<div class="deshboard">
		<div class="l-box">
			<h3>Maildoll - Maildoll marketing & VoIP Service SaaS Application</h3>
			<p>#1 Maildoll marketing software on Codecanyon</p>
		</div>
		<div class="r-box">
				<img src="<?php echo plugins_url( 'woocommerce-maildoll/admin/img/deshboard.jpg' )?>" alt="maildoll">
		</div>
	</div>
	
	
<?php
}
