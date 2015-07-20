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
				
                    <fieldset>
			<?php echo form_open(current_url());	?>  	

			<legend>Membership Type</legend>
			<h3><?php echo $type['name'];?></h3>
			<input name="new_name" value="<?php echo $type['name']?>"><input type=submit name=action value="Update Name" class="link_button"><br>
			<hr>
			<ul>
				<li><strong>Duration:</strong><?php echo $type['length'];?></li>
				<li><strong>Price:</strong><?php echo $type['length'];?></li>
				<li><strong>Number of Users:</strong><?php echo $type['number'];?></li>
				<li><strong>Subscription Allowed:</strong><?php echo $type['subscription'];?></li>
			</ul>

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
