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

			<legend>Membership</legend>
			<h3><?php echo $membership['name']." - ".$membership['type'];?></h3>
			<input name="new_name" value="<?php echo $membership['name']?>"><input type=submit name=action value="Update Name" class="link_button"><br>
			<b>Membership Owner: <?php echo $membership['owner_name'];?></b>
			<hr>
                	<?php echo form_close();?>
                        <b>Credits</b>
                        <table>
                        <thead>
                                <tr>
                                        <th>Purchase Date/Time</th>
                                        <th>Price Paid</th>
                                        <th>Start Date/Time</th>
                                        <th>End Date/Time</th>
                                        <th>Auto-Activate</th>
                                </tr>
                        </thead>
                        <tbody>
                        <?php foreach($membership['credits'] as $credit) : ?>
                                <tr>
                                <td><?php echo $credit['purchased'];?></td>
                                <td>$<?php echo $credit['price_paid'];?></td>
                                <td><?php echo $credit['start'];?></td>
                                <td><?php echo $credit['end'];?></td>
                                <td><?php echo $credit['auto_activate']?></td>
                                </tr>
                        <?php endforeach;?>
                        </tbody>

                        <tfoot>
				<form name="_xclick" action="<?php echo $paypal_url;?>">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="<?php echo $paypal_id;?>">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="item_name" value="<?php echo $membership['type'];?>">
				<input type="hidden" name="item_number" value="<?php echo $membership['type_id'];?>">
				<input type="hidden" name="amount" value="<?php echo $membership['type_price'];?>">
				<input type="hidden" name="on0" value="membership_id">
				<input type="hidden" name="os0" value="<?php echo $membership['id'];?>">
				<input type="hidden" name="custom" value="<?php echo $user_id;?>">
				<input type="hidden" name="notify_url" value="https://lm.randomwire.biz/paypal/ipn">
				<input type="hidden" name="return" value="https://lm.randomwire.biz/membership/view/<?php echo $membership['id'];?>">
				<input type="hidden" name="cancel_return" value="https://lm.randomwire.biz/membership/view/<?php echo $membership['id'];?>">
                                <tr>
                                <td colspan=5><b>Add new credits to this membership<b> <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_buynow_86x21.png" border="0" name="submit" alt="Paypal Buy Button"></td>
                                </tr>
				</form>
                        </tfoot>
                        </table>
			<?php echo form_open(current_url());	?>

                        <b>Users: <?php echo $membership['user_count']." of ".$membership['max_users'];?></b>
                        <ul>
                        <?php foreach($membership['users'] as $user) : ?>
                                <li><?php echo $user['name'];?> - <a href="<?php echo $base_url."membership/remove_user/".$membership['id']."/".$user['id'];?>">Delete</a></li>
                        <?php endforeach;?>
                        </ul>
                        <?php if($membership['user_count']<$membership['max_users']):?>
                                Add new person to this membership: <?php echo form_dropdown("new_membership_user",$users,"");?> <input type=submit name="action" value="Add User" class="link_button">
                        <?php endif;?>
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
