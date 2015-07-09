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
							<table>
	                                                <thead>
	                                                        <tr>
                	                                                <th>Name</th>
                        	                                        <th>Type</th>
                        	                                        <th>Users</th>
                        	                                        <th>Credit Expires</th>
                                	                                <th>Add More Credit</th>
                                	                        </tr>
                                                	</thead>
                                                	<tbody>
                                                	<?php foreach($memberships as $membership) : ?>
                                                	        <tr>
                                                	        <td><a href="<?php echo $base_url."membership/view/".$membership['id'];?>"><?php echo $membership['name'];?></a></td>
                                                	        <td><?php echo $membership['type'];?></td>
                                                	        <td><?php echo $membership['user_count']."/".$membership['max_users'];?></td>
                                                	        <td><?php echo $membership['expires'];?></td>
								<td><input type="submit" name="buy" value="Paypal Buy Button" class = "link_button"></td>
                                                	        </tr>
                                                	<?php endforeach;?>
                                                	</tbody>
                                                	<tfoot>
                                                	</tfoot>
                                                	</table>
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
