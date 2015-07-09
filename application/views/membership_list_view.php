<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<?php $this->load->view('includes/head'); ?> 
</head>

<body id="update_account">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Memberships</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Current</legend>
						<?php if (count($current_memberships) == 0) :?>
							<h3>No active memberships!</h3>
						<?php else : ?>

							<table>
        	                                        <thead>
                	                                        <tr>
									<th>Membership Owner</th>
                                	                                <th>Membership Name</th>
                                        	                        <th>Membership Type</th>
                                                	                <th>Credit Expires</th>
                                      	  	                </tr>
							</thead>
                                                	<tbody>
                                                	<?php foreach($current_memberships as $row) : ?>
                                                       		<tr>
                                                        	<td><?php echo $row['owner_name'];?></td>
                                                        	<td><a href="<?php echo $base_url.'membership/view/'.$row['id'];?>"><?php echo $row['name'];?></a></td>
                                                        	<td><?php echo $row['membership_type'];?></td>
                                                        	<td><?php echo $row['expires'];?></td>
                                                        	</tr>
                                                	<?php endforeach;?>
                                                	</tbody>
                                                	<tfoot>
                                                	</tfoot>
                                                	</table>
						<?php endif;?>
					</fieldset>
					<fieldset>
						<legend>My Memberships</legend>
						<?php if (count($memberships) == 0) :?>
							<h3>None</h3>
						<?php else : ?>
							<?php foreach($memberships as $membership) : ?>
							<h3><?php echo $membership['name']." - ".$membership['type'];?></h3>
							<b>Credits</b>
							<table>
	                                                <thead>
	                                                        <tr>
                	                                                <th>Purchase Date/Time</th>
                        	                                        <th>Price Paid</th>
                        	                                        <th>Start Date/Time</th>
                        	                                        <th>End Date/Time</th>
                                	                                <th>Auto-Activate</th>
                                	                        </tr>
                                                	</thead>
                                                	<tbody>
                                                	<?php foreach($membership['credits'] as $credit) : ?>
                                                	        <tr>
                                                	        <td><?php echo $credit['purchased'];?></td>
                                                	        <td>$<?php echo $credit['price_paid'];?></td>
                                                	        <td><?php echo $credit['start'];?></td>
                                                	        <td><?php echo $credit['end'];?></td>
								<td><?php echo $credit['auto_activate']?></td>
                                                	        </tr>
                                                	<?php endforeach;?>
                                                	</tbody>
                                                	<tfoot>
								<tr>
								<td colspan=5><b>Add new credits to this membership<b> <input type="submit" name="buy" value="Paypal Buy Button" class = "link_button"></td>
								</tr>
                                                	</tfoot>
                                                	</table>
							<b>Users: <?php echo $membership['user_count']." of ".$membership['max_users'];?></b>
							<ul>
							<?php foreach($membership['users'] as $user) : ?>
								<li><?php echo $user['name'];?> - <a href="<?php echo $base_url."membership/remove_user/".$user['id'];?>">Delete</a></li>
							<?php endforeach;?>
							</ul>
							<?php if($membership['user_count']<$membership['max_users']):?>
								Add new person to this membership: <?php echo form_dropdown("new_membership_user[".$membership['id']."]",$users,"");?> <input type=submit name="add_user" value="Add User" class="link_button large">
							<?php endif;?>
							<?php endforeach;?>
						<?php endif;?>

					</fieldset>
					<fieldset>
						<legend>Create New Membership</legend>
						Type: <?php echo form_dropdown("new_membership_type",$types,"");?>
						Name: <input name="new_name">
                                                <input type=submit class="link_button name="buy" value="Paypal Buy Button">
                                                <input type=submit class="link_button name="subscribe" value="Paypal Subscribe Button">
					</fieldset>

				<?php echo form_close();?>
			</div>
		</div>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 
</div>

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>
