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
						<legend>Schedules</legend>
						<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Commands</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($schedules as $row) : ?>
						    
						    <?php echo form_open(current_url()); ?>
							<tr>
							<td><a href="<?php echo $base_url.'schedule/view/'.$row['id'];?>">
								<?php echo $row['name'];?>
							</a></td>
							<td>
								<input type=submit name="delete_schedule" value="Delete" class="link_button large"/>
							</td>
							</tr>
							<?php echo form_close();?>
						<?php endforeach;?>
						    <?php echo form_open(current_url()); ?>
						    <tr>
						        <td><input name="schedule[name]" value="<?php echo $schedule['name'];?>"/></td>
						        <td><input type=submit name="add_schedule" value="Add Schedule" class="link_button large"/></td>
						    </tr>
						    <?php echo form_close();?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="2">
							</td>
							</tr>
						</tfoot>
						</table>

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
