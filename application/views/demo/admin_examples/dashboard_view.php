<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard Demo | flexi auth | A User Authentication Library for CodeIgniter</title>
	<meta name="description" content="flexi auth, the user authentication library designed for developers."/> 
	<meta name="keywords" content="demo, flexi auth, user authentication, codeigniter"/>
	<?php $this->load->view('includes/head'); ?> 
</head>

<body id="admin_dashboard">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	
	<!-- Intro Content -->
	<div class="content_wrap intro_bg">
		<div class="content clearfix">
			<div class="col100">
				<h2>Admin: Dashboard</h2>
				<p>This page acts as an example dashboard landing page for logged in admin users, demonstrating how some of the functions within the flexi auth library can be used to manage the user accounts, groups and privileges.</p>
			</div>		
		</div>
	</div>
	
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
				    <h3>Access Control</h3>
				    <p>Manage Nodes, Cards, and Memberships</p>
				    <ul>
						<li>
							<a href="<?php echo $base_url;?>node">Manage Nodes</a>			
						</li>	
						<li>
							<a href="<?php echo $base_url;?>card/manage">Manage Cards</a>			
						</li>	
						<li>
							<a href="<?php echo $base_url;?>membership/manage">Manage Memberships</a>			
						</li>	
					</ul>	
					<h3>User Accounts</h3>
					<p>Manage the account details of all site users.</p>
					<ul>
						<li>
							<a href="<?php echo $base_url;?>auth_admin/manage_user_accounts">Manage User Accounts</a>			
						</li>	
					</ul>
					<hr/>

					<h3>User Groups</h3>
					<p>Manage the user groups that users can be assigned to.</p>
					<ul>
						<li>
							<a href="<?php echo $base_url;?>auth_admin/manage_user_groups">Manage User Groups</a>			
						</li>	
					</ul>
					<hr/>

					<h3>User Privileges</h3>
					<p>Manage the specific user privileges that can be assigned to users.</p>
					<ul>
						<li>
							<a href="<?php echo $base_url;?>auth_admin/manage_privileges">Manage User Privileges</a>			
						</li>	
					</ul>
					<hr/>

					<h3>User Activity</h3>
					<p>View lists of users that are currently active, inactive or who have a high number of failed logins attempts.</p>
					<ul>
						<li>
							<a href="<?php echo $base_url;?>auth_admin/list_user_status/active">List all active users</a>
						</li>	
						<li>
							<a href="<?php echo $base_url;?>auth_admin/list_user_status/inactive">List all inactive users</a>
						</li>	
						<li>
							<a href="<?php echo $base_url;?>auth_admin/delete_unactivated_users">List all unactivated (Never been activated) users over 31 days old</a>
						</li>	
						<li>
							<a href="<?php echo $base_url;?>auth_admin/failed_login_users">List users with a high number of failed login attempts</a> - Helps identify possible brute force hack attempts.			
						</li>	
					</ul>
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