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
				<h2>RFID Cards</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Add New Card</legend>
						<ul>
						<?php if ($this->flexi_auth->is_privileged('Manage Cards')) { ?>
							<li class="info_req">
							<label for="user">User:</label>
							<?php echo form_dropdown("card[user_id]",$users,$current_user);?>
							</li>
						<?php } else {
							echo form_hidden("card[user_id]",$current_user);
						} ?>
						<li class="info_req">
							<label for="name">Card Name:</label>
							<input type="text" id="card_name" name="card[name]" value="<?php echo set_value('name');?>" />
						</li>
						<li class="info_req">
							<label for="name">Card Serial:</label>
							<input type="text" id="card_serial" name="card[serial]" value="<?php echo set_value('serial');?>" />
						</li>
						<li>
							<input type=submit name="add_card" value="Add Card" class="link_button large">
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
