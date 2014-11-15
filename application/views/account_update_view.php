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
				<h2>Update Account Details</h2>
				<a href="<?php echo $base_url;?>user/change_password">Change Password</a>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Personal Details</legend>
						<ul>
							<li class="info_req">
								<label for="first_name">First Name:</label>
								<input type="text" id="first_name" name="update_first_name" value="<?php echo set_value('update_first_name',$user['first_name']);?>"/>
							</li>
							<li class="info_req">
								<label for="last_name">Last Name:</label>
								<input type="text" id="last_name" name="update_last_name" value="<?php echo set_value('update_last_name',$user['last_name']);?>"/>
							</li>
							<li>
								<label for="last_name">Company:</label>
								<input type="text" id="company" name="update_company" value="<?php echo set_value('update_company',$user['company']);?>"/>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Contact Details</legend>
						<ul>
							<li class="info_req">
								<label for="phone_number">Phone Number:</label>
								<input type="text" id="phone_number" name="update_phone_number" value="<?php echo set_value('update_phone_number',$user['phone']);?>"/>
							</li>
							<li>
								<label for="address">Address:</label>
								<input type="text" id="address" name="update_address" value="<?php echo set_value('update_address',$user['address']);?>"/>
							</li>
							<li>
								<label for="address">Address2:</label>
								<input type="text" id="address" name="update_address2" value="<?php echo set_value('update_address2',$user['address2']);?>"/>
							</li>
							<li>
								<label for="address">City:</label>
								<input type="text" id="city" name="update_city" value="<?php echo set_value('update_city',$user['city']);?>"/>
							</li>
							<li>
								<label for="address">State:</label>
								<?php 
            				    $states = array(
            				        "MA"=>"MA","NH"=>"NH","RI"=>"RI","CT"=>"CT","AL"=>"AL","AK"=>"AK","AZ"=>"AZ","AR"=>"AR",
            				        "CA"=>"CA","CO"=>"CO","DE"=>"DE","FL"=>"FL","GA"=>"GA","HI"=>"HI","ID"=>"ID","IL"=>"IL",
            				        "IN"=>"IN","IA"=>"IA","KS"=>"KS","KY"=>"KY","LA"=>"LA","ME"=>"ME","MD"=>"MD","MI"=>"MI",
            				        "MN"=>"MN","MS"=>"MS","MO"=>"MO","MT"=>"MT","NE"=>"NE","NV"=>"NV","NJ"=>"NJ","NM"=>"NM",
            				        "NY"=>"NY","NC"=>"NC","ND"=>"ND","OH"=>"OH","OK"=>"OK","OR"=>"OR","PA"=>"PA","SC"=>"SC",
            				        "SD"=>"SD","TN"=>"TN","TX"=>"TX","UT"=>"UT","VT"=>"VT","VA"=>"VA","WA"=>"WA","WV"=>"WV",
            				        "WI"=>"WI","WY"=>"WY"
            				        );
								echo form_dropdown("update_state",$states,set_value('update_state',$user['state']));
								?>
							</li>
							<li>
								<label for="address">Zipcode:</label>
								<input type="text" id="address" name="update_zipcode" value="<?php echo set_value('update_zipcode',$user['zipcode']);?>"/>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Login Details</legend>
						<ul>
							<li>
								<hr/>
								<label for="username">Username:</label>
								<input type="text" id="username" name="update_username" value="<?php echo set_value('update_username',$user[$this->flexi_auth->db_column('user_acc', 'username')]);?>" class="tooltip_trigger"
									title="Set a username that can be used to login with."
								/>
							</li>
							<li>
								<label>Password:</label>
								<a href="<?php echo $base_url;?>user/change_password">Click here to change your password</a>
							</li>
							<li>
								<label>Email:</label>
								<a href="<?php echo $base_url;?>user/update_email">Click here to change your email</a>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Update Account</legend>
						<ul>
							<li>
								<label for="submit">Update Account:</label>
								<input type="submit" name="update_account" id="submit" value="Submit" class="link_button large"/>
							</li>
						</ul>
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
