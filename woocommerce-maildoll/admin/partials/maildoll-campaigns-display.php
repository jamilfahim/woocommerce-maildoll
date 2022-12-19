<?php
/**
 * Display a custom menu page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function maildoll_campaigns_display(){

	$settings = get_option('maildoll_setting_api');
   $url = get_option('maildoll_setting_url');
   $email = get_option('maildoll_setting_email');


	if($settings && $url && $email){
	
		var_dump($settings);
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'https://jahangir.testapplication.xyz/api/campaigns',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 300,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_SSL_VERIFYHOST=> FALSE,
	  CURLOPT_SSL_VERIFYPEER=> FALSE,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'GET',
	  CURLOPT_HTTPHEADER => array(
		 "chirkut: {$settings}"
	  ),
	));
	
	$response = curl_exec($curl);
	curl_close($curl);
	$compaigns=json_decode($response, true);

	}


?>
	
	<h2 class="maildoll-title">Campaigns List</h2>
	<div class="order-table">
		<table class="fixed product-table">
			<thead>
				<tr>
				
					<th scope="col"> Name</th>
					<th scope="col"> Type </th>
				
				</tr>
			</thead>
			<tbody>
				<?php
				if($compaigns){
					foreach( $compaigns as $campaign){		
						?>
						<tr class="">
						<td scope="row"><?php echo $campaign["name"];?></td>
						<td><?php echo $campaign["type"]; ?></td>
						
					</tr>
					<?php
					}
				}
				?>
				
			</tbody>
		</table>
	</div>
	
<?php
}
