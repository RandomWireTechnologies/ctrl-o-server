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
				<h2>Membership Types</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
					<fieldset>
						<legend>Types</legend>
						<?php if (count($membership_types) == 0) :?>
							<h3>No membership types! You should add one!</h3>
						<?php else : ?>

							<table>
        	                                        <thead>
                	                                        <tr>
									<th>Name</th>
                                	                                <th>Duration</th>
                                        	                        <th>Price</th>
                                                	                <th>Number of Users</th>
                                	                                <th>Paypal Button ID</th>
                                	                                <th>Paypal Subscribe Button ID</th>
                                	                                <th>Subscription Allowed</th>
	                                	                	<th>Action</th>
                                      	  	                </tr>
							</thead>
                                                	<tbody>
                                                	<?php foreach($membership_types as $type) : ?>
                                                       		<tr>
                                                        	<td><a href="<?php echo $base_url.'membership/type_view/'.$type['id'];?>"><?php echo $type['name'];?></a></td>
                                                        	<td><?php echo $type['length'];?> Days</td>
                                                        	<td>$<?php echo $type['price'];?></td>
                                                        	<td><?php echo $type['number'];?></td>
                                                        	<td><?php echo $type['paypal_button'];?></td>
                                                        	<td><?php echo $type['paypal_subscription_button'];?></td>
                                                        	<td><?php if ($type['subscription']) {echo "Yes";} else {echo "No";}?></td>
								<td>
									 <?php echo form_open(current_url());    ?>
									<input type="hidden" name="id" value="<?php echo $type['id'];?>">
									<input type="submit" name="action" value="Delete" class="link_button">
									<?php echo form_close();?>
								</td>
                                                        	</tr>
                                                	<?php endforeach;?>
                                                	</tbody>
                                                	<tfoot>
                                                	</tfoot>
                                                	</table>
						<?php endif;?>
					</fieldset>
					<fieldset>
					<legend>Create New Membership Type</legend>
					<?php echo form_open(current_url());	?>
						<table>
        	                                <thead>
                	                                <tr>
								<th>Name</th>
                                	                        <th>Duration</th>
                                        	                <th>Price</th>
                                                	        <th>Number of Users</th>
                                	                	<th>Subscription Allowed</th>
                                	                	<th>Action</th>
                                                	</tr>
						</thead>
                                                <tbody>
							<tr>
								<td><input name="new_type[name]" value="<?echo $new_type['name'];?>" size=20></td>
								<td><input name="new_type[length]" value="<?echo $new_type['length'];?>" size=4> Days</td>
								<td>$<input name="new_type[price]" value="<?echo $new_type['price'];?>" size=8></td>
								<td><input name="new_type[number]" value="<?echo $new_type['number'];?>" size=2></td>
								<td><select name="new_type[subscription]"><option value="0">No</option><option value="1">Yes</option></select></td>
								<td><input type=submit name="action" value="Add" class="link_button"></td>
							</tr>
						</tbody>
						</table>
					<?php echo form_close();?>
					</fieldset>
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
