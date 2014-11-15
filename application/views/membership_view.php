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

    			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
	    		<?php } ?>
				
                <?php echo form_open(current_url());	?>  	
                    <fieldset>
						<legend>Membership</legend>
						<ul>
						<li class="info_req">
    						<label for="user">User:</label>
    						<?php echo form_dropdown("membership[user_id]",$users,$membership['user_id']);?>
						</li>
						<li class="info_req">
							<label for="type">Membership Type:</label>
							<?php echo form_dropdown("membership[type_id]",$membership_types,$membership['type_id']); ?>
						</li>
						<li class="info_req">
							<label for="date">Purchase Date:</label>
							<input type="text" id="purchase_date" name="membership[purchased]" value="<?php echo $membership['purchased'];?>" />
						</li>
						<li>
							<label for="date">Start Date:</label>
							<input type="text" id="start_date" name="membership[start]" value="<?php echo $membership['start'];?>" />
						</li>
						<li>
							<label for="date">End Date:</label>
							<input type="text" id="end_date" name="membership[end]" value="<?php echo $membership['end'];?>" />
						</li>
						<li class="info_req">
							<label for="price">Price:</label>
							<input type="text" id="price" name="membership[price]" value="<?php echo $membership['price'];?>" />
						</li>
						<li>
							<label for="notes">Notes:</label>
							<input type="text" id="notes" name="membership[notes]" value="<?php echo $membership['notes'];?>" />
						</li>
						<li>
							<input type=submit name="update_membership" value="Update Membership" class="link_button large">
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
