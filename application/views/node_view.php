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
						<legend>Pi Node Data</legend>
						
			            <?php echo form_open(current_url());?>
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
							<td colspan="6"></td>
							</tr>
						</tfoot>
						</table>
					    <?php echo form_close();?>
					</fieldset>
					<fieldset>
					    <legend>Automatic Unlock Schedules</legend>
					    <table>
					        <thead>
					            <th>Name</th>
					            <th>Schedule</th>
					            <th>Enabled</th>
					            <th>Add/Delete</th>
					        </thead>
					        <tbody>
					            <?php foreach($unlock_schedules as $unlock_schedule) : ?>
					            <?php echo form_open(current_url());?>
					            <tr>
					                <input type=hidden name="unlock[id]" value="<?php echo $unlock_schedule['id'];?>"/>
					                <td><?php echo $unlock_schedule['name'];?></td>
    					            <td><?php echo $unlock_schedule['schedule'];?></td>
    					            <td>
    					                <?php $yesorno = ""; $enable ="";
    							        if($unlock_schedule['enabled']) {
    							            $yesorno = "Yes";
    							            $enable = "Disable";
    							        } else {
    							            $yesorno = "No";
    							            $enable = "Enable";
    							        }
    							        echo "$yesorno - <a href='".$base_url."node/unlock/".$unlock_schedule['id']."/".strtolower($enable)"'>".$enable."</a>";
    							        ?>
    					            </td>
    					            <td><input type=submit name="delete_unlock" value "Delete" class="link_button large"></td>
					            </tr>
					            <?php echo form_close();?>
					            <?php endforeach;?>
					            
					            <?php echo form_open(current_url());?>
					            <tr>
					                <td>
					                    <input type=hidden name="new_unlock[node_id]" value="<?php echo $node['id'];?>"/>
					                    <input type=text name="new_unlock[name]" value="<?php echo $new_unlock['name'];?>" />
					                </td>
					                <td>
					                    <?php echo form_dropdown("new_unlock[schedule_id]",$schedules,$new_unlock['schedule_id']);?>
					                </td>
					                <td>
					                    <input type=hidden name="new_unlock[enabled]" value="0"/>
								        <input type=checkbox name="new_unlock[enabled]" value="1"  <?php echo ($new_unlock['enabled'] == 1) ? 'checked="checked"' : "";?> />
					                </td>
					                <td>
					                    <input type=submit name="add_unlock" value "Add Unlock Schedule" class="link_button large">
					                </td>
					            </tr>
					            <?php echo form_close();?>
					        </tbody>
					        <tfoot>
					            <tr>
					                <td colspan="4">
					                    
					                </td>
					            </tr>
					        </tfoot>
					    </table>
					</fieldset>
					<fieldset>
					    <legend>Node Access</legend>
					    <legend>Add User Privileges</legend>
					    
			            <?php echo form_open(current_url());?>
					    <table>
					        <thead>
					            <th>User</th>
					            <th>Schedule</th>
					            <th>Membership Type</th>
					        </thead>
					        <tbody>
					            <tr>
							    <?php echo form_hidden("user_priv[node_id]",$node['id']);?>
					            <td><?php echo form_dropdown("user_priv[user_id]",$users,$user_priv['user_id']);?></td>
					            <td><?php echo form_dropdown("user_priv[schedule_id]",$schedules,$user_priv['schedule_id']);?></td>
					            <td><?php echo form_dropdown("user_priv[membership_type_id]",$membership_types,$user_priv['membership_type_id']);?></td>
					            </tr>
					        </tbody>
					        <tfoot>
					            <td><input type=submit name="add_user_privilege" value="Add Privileges" class="link_button large"></td>
					            <td colspan="2"></td>
					        </tfoot>
					    </table>
				        <?php echo form_close();?>
					    <legend>Current User Privileges</legend>
					    <table>
					        <thead>
					            <th>User</th>
					            <th>Schedule</th>
					            <th>Membership Type</th>
					            <th>Delete</th>
					        </thead>
					        <tbody>
					            <?php foreach($user_privileges as $user_privilege) : ?>
			                    <?php echo form_open(current_url());?>
							    <?php echo form_hidden("user_priv[id]",$user_privilege['id']);?>
					            <tr>
    					            <td><?php echo $user_privilege['user'];?></td>
    					            <td><?php echo $user_privilege['schedule'];?></td>
    					            <td><?php echo $user_privilege['membership_type'];?></td>
    					            <td><input type=submit name="delete_user_privilege" value="Remove" class="link_button large"></td>
					            </tr>
				                <?php echo form_close();?>
					            <?php endforeach;?>
					        </tbody>
					        <tfoot>
					            <td colspan="4"></td>
					        </tfoot>
					    </table>
					</fieldset>
					
					<fieldset>
						<legend>Node Log</legend>
						
			            <?php echo form_open(current_url());?>
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
