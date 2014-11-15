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

<body id="register">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Register Account</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url()); ?>  
					<fieldset>
						<legend>Personal Details</legend>
						<ul>
							<li class="info_req">
								<label for="first_name">First Name:</label>
								<input type="text" id="first_name" name="register_first_name" value="<?php echo set_value('register_first_name');?>"/>
							</li>
							<li class="info_req">
								<label for="last_name">Last Name:</label>
								<input type="text" id="last_name" name="register_last_name" value="<?php echo set_value('register_last_name');?>"/>
							</li>
							<li>
								<label for="company">Company:</label>
								<input type="text" id="company" name="register_company" value="<?php echo set_value('register_company');?>"/>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Contact Details</legend>
						<ul>
							<li class="info_req">
								<label for="phone_number">Phone Number:</label>
								<input type="text" id="phone_number" name="register_phone_number" value="<?php echo set_value('register_phone_number');?>"/>
							</li>
							<li class="info_optional">
								<label for="address">Address:</label>
								<input type="text" id="address" name="register_address" value="<?php echo set_value('register_address');?>"/>
							</li>
							<li class="info_optional">
								<label for="address2">Address (Suite/Apt/Attn/etc):</label>
								<input type="text" id="address" name="register_address2" value="<?php echo set_value('register_address2');?>"/>
							</li>
							<li class="info_optional">
								<label for="city">City:</label>
								<input type="text" id="city" name="register_city" value="<?php echo set_value('register_city');?>"/>
							</li>
							<li class="info_optional">
								<label for="state">State:</label>
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
								echo form_dropdown("register_state",$states,set_value('register_state',"MA"));
								?>
							</li>
							<li class="info_optional">
								<label for="zip">Zip:</label>
								<input type="text" id="zip" name="register_zip" value="<?php echo set_value('register_zip');?>"/>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Login Details</legend>
						<ul>
							<li class="info_req">
								<label for="email_address">Email Address:</label>
								<input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>" class="tooltip_trigger"
									title="This demo requires that upon registration, you will need to activate your account via clicking a link that is sent to your email address."
								/>
							</li>
							<li class="info_req">
								<label for="username">Username:</label>
								<input type="text" id="username" name="register_username" value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
									title="Set a username that can be used to login with."
								/>
							</li>
							<li class="info_req">
								<label for="password">Password:</label>
								<input type="password" id="password" name="register_password" value="<?php echo set_value('register_password');?>"/>
							</li>
							<li class="info_req">
								<label for="confirm_password">Confirm Password:</label>
								<input type="password" id="confirm_password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>"/>
							</li>
							<li>							
								<small>
									<strong>Password length must be more than <?php echo $this->flexi_auth->min_password_length(); ?> characters in length.<br/></strong>
								</small>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Register</legend>

						<ul>
							<li>
								<label for="submit">Register:</label>
								<input type="submit" name="register_user" id="submit" value="Submit" class="link_button large"/>
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
