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
				<h2>Pi Nodes</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				
				<?php echo form_open(current_url());	?>  	
					<fieldset>
						<legend>Node List</legend>
						<?php if(isset($nodes) && count($nodes)>0) : ?>
						<?php echo form_open(current_url());    ?>
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
						<?php foreach($nodes as $row) : ?>
							<tr>
							<td><a href="<?php echo $base_url.'node/view/'.$row['id'];?>">
								<?php echo $row['name'];?>
							</a></td>
							<td>
								<?php echo $row['type'];?>
							</td>
							<td>
							    <?php echo $row['hostname'];?>
							</td>
							<td>
							    <?php echo $row['ip'];?>
							</td>
							<td>
							    <?php echo $row['mac'];?>
							</td>
							<td>
							    <?php $yesorno = ""; $enable ="";
							        if($row['enabled']) {
							            $yesorno = "Yes";
							            $enable = "Disable";
							        } else {
							            $yesorno = "No";
							            $enable = "Enable";
							        }
							        echo "$yesorno - <a href='".$base_url."node/".strtolower($enable)."/".$row['id']."'>".$enable."</a>";
							        ?>
							</td>
							<td>
								<a href="<?php echo $base_url.'node/send/'.$row['id'];?>/open">Open Door</a>
								<a href="<?php echo $base_url.'node/send/'.$row['id'];?>/init">Init Card</a>
							</td>
							</tr>
						<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="7">
								<!-- input type=submit name="update_cards" value="Update Cards" class="link_button large" -->
								<!-- input type=submit name="add_card" value="Add New Card" class="link_button large" -->
							</td>
							</tr>
						</tfoot>
						</table>
						<?php echo form_close();?>
						<?php else : ?>

							<div> No Nodes Found </div>
						<?php endif; ?> 

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
