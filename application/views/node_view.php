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
						<legend>Pi Node Data</legend>
						<table>
						<thead>
							<tr>
								<th>Node Name</th>
								<th>Node Type</th>
								<th>Hostname</th>
								<th>IP</th>
								<th>MAC</th>
								<th>Enabled</th>
								<th>Commands</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>
							    <?php echo form_hidden("node[id]",$node['id']);?>
							    <input name="node[name]" value="<?php echo $node['name'];?>" />
							</td>
							<td>
								<?php echo $node['type'];?>
							</td>
							<td>
							    <?php echo $node['hostname'];?>
							</td>
							<td>
							    <?php echo $node['ip'];?>
							</td>
							<td>
							    <?php echo $node['mac'];?>
							</td>
							<td>
							    <?php $yesorno = ""; $enable ="";
							        if($node['enabled']) {
							            $yesorno = "Yes";
							            $enable = "Disable";
							        } else {
							            $yesorno = "No";
							            $enable = "Enable";
							        }
							        echo "$yesorno - <a href='".$base_url."node/".strtolower($enable)."/".$node['id']."'>".$enable."</a>";
							        ?>
							</td>
							<td>
								<a href="<?php echo $base_url.'node/send/'.$node['id'];?>/open">Open Door</a>
								<a href="<?php echo $base_url.'node/send/'.$node['id'];?>/init">Init Card</a>
							</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
							<td>
						        <input type=submit name="update_node" value="Update Node" class="link_button large">
						    </td>
							<td colspan="6">
								<!-- input type=submit name="update_cards" value="Update Cards" class="link_button large" -->
								<!-- input type=submit name="add_card" value="Add New Card" class="link_button large" -->
							</td>
							</tr>
						</tfoot>
						</table>
					</fieldset>
					<fieldset>
						<legend>Node Log</legend>
						<table>
						<thead>
							<tr>
								<th>Time</th>
								<th>User</th>
								<th>Card</th>
								<th>Type</th>
								<th>Result</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($logs as $log) : ?>
							<tr>
							<td><?php echo $log['time'];?></td>
							<td><?php echo $log['user_name'];?></td>
							<td>
								<a href="<?php echo '/card/view/'.$log['card_id'];?>">
								<?php echo $log['card_name'];?></td>
								</a>
							<td><?php echo $log['type'];?></td>
							<td><?php echo $log['result'];?></td>
							</tr>
						<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="5">
								<input type=submit name="scroll_log" value="First" class="link_button large">
								<input type=submit name="scroll_log" value="Previous" class="link_button large">
								<input type=submit name="scroll_log" value="Next" class="link_button large">
								<input type=submit name="scroll_log" value="Last" class="link_button large">
							</td>
							</tr>
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
