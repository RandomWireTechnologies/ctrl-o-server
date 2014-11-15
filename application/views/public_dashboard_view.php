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

<body id="public_dashboard">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	
	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content clearfix">
			<div class="col100">
			
			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<div class="w100 frame">							
					<h3>Profile</h3>
					<ul>
						<li>
							<a href="<?php echo $base_url;?>user/profile">Update Account Details</a>
						</li>	
					</ul>
					<hr/>
					
					<h3>Email Address</h3>
					<ul>
						<li>
							<a href="<?php echo $base_url;?>user/update_email">Update Email Address</a>
						</li>	
					</ul>
					<hr/>
					
					<h3>Password</h3>
					<ul>
						<li>
							<a href="<?php echo $base_url;?>user/change_password">Update Password</a>
						</li>	
					</ul>
					<hr/>
				</div>
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
