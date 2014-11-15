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
						<legend>Card List</legend>
						<?php if(isset($cards) && count($cards)>0) : ?>
						<?php echo form_open(current_url());    ?>
						<table>
						<thead>
							<tr>
								<th>Card Name</th>
								<th>Serial #</th>
								<th class="align_ctr">Enabled</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($cards as $row) : ?>
							<tr>
							<td><a href="<?php echo $base_url.'card/view/'.$row['id'];?>">
								<?php echo $row['name'];?>
							</a></td>
							<td><?php echo $row['serial'];?></td>
							<td class="align_ctr">
								<input type=hidden name="card_enabled[<?php echo $row['id'];?>]" value="0"/>
								<input type=checkbox name="card_enabled[<?php echo $row['id'];?>]" value="1"  <?php echo ($row['enabled'] == 1) ? 'checked="checked"' : "";?> />
							</td>
							</tr>
						<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="3">
								<input type=submit name="update_cards" value="Update Cards" class="link_button large">
								<?php if ($this->flexi_auth->is_privileged('Manage Cards')):?>
								<input type=submit name="add_card" value="Add New Card" class="link_button large">
								<?php endif;?>
							</td>
							</tr>
						</tfoot>
						</table>
						<?php echo form_close();?>
						<?php else : ?>

							<div> No Cards Found </div>
						<?php endif; ?> 

					</fieldset>
				<?php echo form_close();?>
				<fieldset>
					<legend>Card Use Logs</legend>
                                        <?php echo form_open(current_url());?>
					<table>
                                                <thead>
                                                        <tr>
                                                                <th>Time</th>
                                                                <th>Card Name</th>
                                                                <th>Node</th>
                                                                <th>Result</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($logs as $log) : ?>
                                                        <tr>
                                                        <td><?php echo $log['time'];?></td>
                                                        <td>
								<a href="<?php echo $base_url.'card/view/'.$log['card_id'];?>" >
								<?php echo $log['card_name'];?>
								</a>
							</td>
                                                        <td><?php echo $log['node_name'];?></td>
                                                        <td><?php echo $log['result'];?></td>
                                                        </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                        <tr>
                                                        <td colspan="4">
                                                                <input type=submit name="scroll_log" value="First" class="link_button large">
                                                                <input type=submit name="scroll_log" value="Previous" class="link_button large">
                                                                <input type=submit name="scroll_log" value="Next" class="link_button large">
                                                                <input type=submit name="scroll_log" value="Last" class="link_button large">
                                                        </td>
                                                        </tr>
                                                </tfoot>
					</table>
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
