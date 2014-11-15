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
						<?php echo form_open(current_url());    ?>
						<legend>RFID Card Data</legend>
						<ul>
						<?php if ($this->flexi_auth->is_privileged('Manage Cards')):?>
						<li class="info_req">
							<label for="user">User:</label>
							<?php echo form_dropdown("card[user_id]",$users,$card['user_id']);?>
						</li>
						<?php endif;?>
						<li class="info_req">
							<label for="name">Name:</label>
							<input name="card[name]" value="<?php echo $card['name'];?>" />
							<?php echo form_hidden("card[id]",$card['id']);?>
						</li>
						<li class="info_req">
							<label for="serial">Serial:</label>
							<input name="card[serial]" value="<?php echo $card['serial'];?>" <?php echo $disabled;?> />
						</li>
						<li class="info_req">
							<label for="enabled">Enabled:</label>
							<input type=hidden name="card[enabled]" value=0 />
							<input type=checkbox name="card[enabled]" value=1 <?php if($card['enabled']) {echo "checked='checked'";}?> />
						</li>
						<?php if ($card['balance'] || $this->flexi_auth->is_privileged('Manage Cards')):?>
						<li>
							<label for="balance">Balance:</label>
							<input name="card[balance]" value="<?php echo $card['balance'];?>" <?php echo $disabled;?> />
						</li>
						<?php endif;?>
						<?php if ($is_developer):?>
						<li class="info_req">
							<label for="hash">Hash:</label>
							<input name="card[hash]" value="<?php echo $card['hash'];?>" size=78 maxlength=64/>
						</li>
						<li class="info_req">
							<label for="fault">Fault:</label>
							<input name="card[fault]" value="<?php echo $card['fault'];?>" size=78 maxlength=4/>
						</li>
						<?php endif;?>
						<li>
                                                        <input type=submit name="update_card" value="Update Card" class="link_button large">
                                                </li>

						</ul>
					</fieldset>
					<fieldset>
						<legend>Card Log</legend>
						<table>
						<thead>
							<tr>
								<th>Time</th>
								<th>Node</th>
								<th>Result</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($logs as $log) : ?>
							<tr>
							<td><?php echo $log['time'];?></td>
							<td><?php echo $log['name'];?></td>
							<td><?php echo $log['result'];?></td>
							</tr>
						<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="3">
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
