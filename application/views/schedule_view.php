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
						<legend>Schedule Data</legend>
						<legend><?php echo $schedule['name'];?></legend>
						<table>
						<thead>
							<tr>
								<th>Day of Week</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Start Time</th>
								<th>End Time</th>
								<th>Commands</th>
							</tr>
						</thead>
						<tbody>
						    <?php foreach($schedule_times as $schedule_time) : ?>
					        <?php echo form_open(current_url());?>
							<tr>
							<td>
							    <?php echo form_hidden("schedule_time[id]",$schedule_time['id']);?>
							    <?php echo form_dropdown("schedule_time[day_of_week]",$days_of_week,$schedule_time['day_of_week']);?>
							</td>
							<td>
								<input type=text name="schedule_time[start_date]" value="<?php echo $schedule_time['start_date'];?>" />
							</td>
							<td>
								<input type=text name="schedule_time[end_date]" value="<?php echo $schedule_time['end_date'];?>" />
							</td>
							<td>
								<input type=text name="schedule_time[start_time]" value="<?php echo $schedule_time['start_time'];?>" />
							</td>
							<td>
								<input type=text name="schedule_time[end_time]" value="<?php echo $schedule_time['end_time'];?>" />
							</td>
							<td>
							    <input type=submit name="update_schedule_times" value="Update" class="link_button large">
							    <input type=submit name="delete_schedule_times" value="Delete" class="link_button large">
							</td>
							</tr>
							<?php echo form_close();?>
						    <?php endforeach;?>
						    <?php echo form_open(current_url());?>
						    <tr>
						        <td>
						            <?php echo form_hidden("schedule_time[schedule_id]",$schedule['id']);?>
							        <?php echo form_dropdown("schedule_time[day_of_week]",$days_of_week,$schedule_time['day_of_week']);?>
    							</td>
    							<td>
    								<input type=text name="schedule_time[start_date]" value="<?php echo $schedule_time['start_date'];?>" />
    							</td>
    							<td>
    								<input type=text name="schedule_time[end_date]" value="<?php echo $schedule_time['end_date'];?>" />
    							</td>
    							<td>
    								<input type=text name="schedule_time[start_time]" value="<?php echo $schedule_time['start_time'];?>" />
    							</td>
    							<td>
    								<input type=text name="schedule_time[end_time]" value="<?php echo $schedule_time['end_time'];?>" />
    							</td>
    							<td>
    							    <input type=submit name="add_schedule_times" value="Add" class="link_button large">
    							</td>
						    </tr>
						    <?php echo form_close();?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="6"></td>
							</tr>
						</tfoot>
						</table>
					    <?php echo form_close();?>
					</fieldset>
					
					<fieldset>
						<legend>Schedule Usage</legend>
						<p>Where is this schedule used?</p>
			            
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
