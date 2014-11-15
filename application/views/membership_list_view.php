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
				<h2>Memberships</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Current</legend>
						<table>
                                                <thead>
                                                        <tr>
                                                                <th>Membership Type</th>
                                                                <th>Start Date/Time</th>
                                                                <th>End Date/Time</th>
                                                                <th>Purchase Date/Time</th>
                                                                <th>Price Paid</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($current_memberships as $row) : ?>
                                                        <tr>
                                                        <td><?php echo $row['type'];?></td>
                                                        <td><?php echo $row['start'];?></td>
                                                        <td><?php echo $row['end'];?></td>
                                                        <td><?php echo $row['purchased'];?></td>
                                                        <td>$<?php echo $row['price'];?></td>
                                                        </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                                </table>

					</fieldset>
					<fieldset>
						<legend>New/Unused</legend>
						<h3>Purchase a new membership</h3>
						<div> Coming soon...</div>
                                                <h3>Activate an unused membership</h3>
						<table>
                                                <thead>
                                                        <tr>
                                                                <th>Membership Type</th>
                                                                <th>Purchase Date/Time</th>
                                                                <th>Price Paid</th>
                                                                <th>Activate</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($new_memberships as $row) : ?>
                                                        <tr>
                                                        <td><?php echo $row['type'];?></td>
                                                        <td><?php echo $row['purchased'];?></td>
                                                        <td>$<?php echo $row['price'];?></td>
							<td>
								<input type=submit name="activate[<?php echo $row['membership_id']?>]" value="Activate" class="link_button large"/>
							</td>
                                                        </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                                </table>

					</fieldset>
					<fieldset>
						<legend>Expired/Used</legend>

						<table>
                                                <thead>
                                                        <tr>
                                                                <th>Membership Type</th>
                                                                <th>Start Date/Time</th>
                                                                <th>End Date/Time</th>
                                                                <th>Purchase Date/Time</th>
                                                                <th>Price Paid</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($used_memberships as $row) : ?>
                                                        <tr>
                                                        <td><?php echo $row['type'];?></td>
                                                        <td><?php echo $row['start'];?></td>
                                                        <td><?php echo $row['end'];?></td>
                                                        <td><?php echo $row['purchased'];?></td>
                                                        <td>$<?php echo $row['price'];?></td>
                                                        </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                                </table>

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
