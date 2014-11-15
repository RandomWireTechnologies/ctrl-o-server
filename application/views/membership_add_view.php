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
						<legend>Add New Membership</legend>
						<ul>
						<li class="info_req">
    						<label for="user">User:</label>
    						<?php echo form_dropdown("membership[user_id]",$users,'');?>
						</li>
						<li class="info_req">
							<label for="type">Membership Type:</label>
							<?php echo form_dropdown("membership[type_id]",$membership_types); ?>
						</li>
						<li class="info_req">
							<label for="date">Purchase Date:</label>
							<?php $now = date('Y-m-d H:i:s'); ?>
							<input type="text" id="purchase_date" name="membership[purchased]" value="<?php echo set_value("membership[purchased]",$now);?>" />
						</li>
						<li>
							<label for="date">Start Date:</label>
							<input type="text" id="start_date" name="membership[start]" value="<?php echo set_value('membership[start]',$now);?>" />
						</li>
						<li>
							<label for="date">End Date:</label>
							<input type="text" id="end_date" name="membership[end]" value="<?php echo set_value('membership[end]');?>" />
						</li>
						<li class="info_req">
							<label for="price">Price:</label>
							<input type="text" id="price" name="membership[price]" value="<?php echo set_value('price');?>" />
							<label for="default">Use default:</label>
							<?php set_value('default_price',0) ? $checked = "checked" : $checked = "";?>
							<input type="checkbox" id="price_default" name="default_price" value=1 <?php echo $checked;?>/>
						</li>
						<li>
							<label for="notes">Notes:</label>
							<input type="text" id="notes" name="membership[notes]" value="<?php echo set_value('notes');?>" />
						</li>
						<li>
							<input type=submit name="add_membership" value="Add Membership" class="link_button large">
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
