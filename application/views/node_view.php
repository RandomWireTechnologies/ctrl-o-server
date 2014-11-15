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
						<ul>
						<li class="info_req">
							<label for="name">Name:</label>
							<input name="node[name]" value="<?php echo $node['name'];?>" />
							<?php echo form_hidden("node[id]",$node['id']);?>
						</li>
						<li class="info_req">
							<label for="type">Type:</label>
							<input name="node[type]" value="<?php echo $node['type'];?>" />
						</li>
						<li>
							<label for="commands">Commands:</label>
							<a href=""> </a>
						</li>
						<li>
                                                        <input type=submit name="update_node" value="Update Node" class="link_button large">
                                                </li>

						</ul>
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
