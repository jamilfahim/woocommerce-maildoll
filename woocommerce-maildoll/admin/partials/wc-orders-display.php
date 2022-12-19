<?php
/**
 * Display a custom menu page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function maildoll_orders_display(){
	// Get 10 most recent order ids in date descending order.
	global $woocommerce, $post;
	
  // Get All Orders
  $allorders = wc_get_orders( array(
	'status'      => 'complate',
	'type'        => 'shop_order',
	'email'       => '',
	'limit'       => -1,
	'return'      => 'ids',
) );
  

	?>
	<h2 class="maildoll-title">Contact List</h2>
	<div class="order-table">
		<table class="fixed product-table">
			<thead>
				<tr>
					<th scope="col"> ID </th>
					<th scope="col"> Name</th>
					<th scope="col"> Email </th>
					<th scope="col"> Phone </th>
				</tr>
			</thead>
			<tbody>
				<?php
				$orders = wc_get_orders( array(
					'status'      => 'complate',
					'numberposts' => -1
					) );
				foreach( $orders as $order){		
					?>
					<tr class="">
					<td scope="row"><?php echo $order->get_customer_id();?></td>
					<td><?php echo $order->get_billing_first_name(); ?> <?php echo $order->get_billing_last_name(); ?></td>
					<td><?php echo $order->get_billing_email(); ?></td>
					<td><?php echo $order->get_billing_phone(); ?></td>
				</tr>
				<?php
				}
				?>
				
			</tbody>
		</table>
	</div>
	
<?php
}
