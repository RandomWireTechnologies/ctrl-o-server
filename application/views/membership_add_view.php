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
			<h2>New Membership</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Create New Membership</legend>
						<?php $now = date('Y-m-d H:i:s'); ?>
    						User: <?php echo form_dropdown("membership[owner_id]",$users,'');?>
						Membership Type: <?php echo form_dropdown("membership[type_id]",$membership_types); ?>
						Name: <input type="text" id="name" name="membership[name]" value="<?php echo set_value("membership[name]","Default Membership");?>" />
						<input type="submit" name="action" value="Create Membership Only" class="link_button"> (Only if member did <b>not</b> pay)
					</fieldset>
					<fieldset>
						<legend>Add Membership Credit</legend>
						<ul>
						<li>
							<label for="date">Purchase Date:</label>
							<input type="text" id="purchased" name="membership[purchased]" value="<?php echo set_value('membership[purchased]',$now);?>" />
						</li>
						<li>
							<label for="activate">Activate:</label>
							<input type="checkbox" id="activate" name="activate" value=1 checked/>
						</li>
						<li class="info_req">
							<label for="price">Price Paid:</label>
							<input type="text" id="price" name="membership[price_paid]" value="<?php echo set_value('price_paid');?>" />
						</li>
						<li>
							<label for="notes">Notes:</label>
							<input type="text" id="notes" name="membership[notes]" value="<?php echo set_value('notes');?>" />
						</li>
						<li>
							<input type=submit name="action" value="Add Membership With Credit" class="link_button large">
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
