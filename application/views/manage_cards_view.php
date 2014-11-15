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
				<h2>Manage Cards</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
				 <?php //echo form_open(current_url());    ?>
                                      <!--  <fieldset>
                                                <legend>Search Filter</legend>

                                                <label for="search">Search Cards:</label>
                                                <input type="text" id="search" name="search_query" value="<?php echo set_value('search_cards',$search_query);?>" class="tooltip_trigger"
                                                        title="Search for cards by user's name or card name."   />
                                                <input type="submit" name="search_cards" value="Search" class="link_button"/>
                                                <a href="<?php echo $base_url; ?>cards/manage" class="link_button grey">Reset</a>

                                        </fieldset> -->
                                <?php //echo form_close();?>

					<fieldset>
						<legend>New Card List</legend>
						<?php echo form_open(current_url());    ?>
						<table>
						<thead>
							<tr>
								<th>Assign User</th>
								<th>Card Name</th>
								<th>Serial #</th>
								<th class="align_ctr">Enabled</th>
								<th class="align_ctr">Delete</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($new_cards as $row) : ?>
							<tr>
							<td>
								<?php echo form_dropdown("user_id[".$row['id']."]",$users,"");?>
							</td>
							<td><a href="<?php echo $base_url.'card/view/'.$row['id'];?>">
								<?php echo $row['name'];?>
							</a></td>
							<td><?php echo $row['serial'];?></td>
							<td class="align_ctr">
								<input type=hidden name="card_enabled[<?php echo $row['id'];?>]" value="0"/>
								<input type=checkbox name="card_enabled[<?php echo $row['id'];?>]" value="1"  <?php echo ($row['enabled'] == 1) ? 'checked="checked"' : "";?> />
							</td>
							<td class="align_ctr">
								<input type=checkbox name="card_delete[<?php echo $row['id'];?>]" value="1" />
							</td>
							</tr>
						<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="6">
								<input type=submit name="manage_cards" value="Update/Delete Cards" class="link_button large">
								<input type=submit name="add_card" value="Add New Card" class="link_button large">
							</td>
							</tr>
						</tfoot>
						</table>
						<?php echo form_close();?>
					</fieldset>

					<fieldset>
						<legend>User's Card List</legend>
						<?php echo form_open(current_url());    ?>
						<table>
						<thead>
							<tr>
								<th>User Name</th>
								<th>Card Name</th>
								<th>Serial #</th>
								<th>Balance</th>
								<th class="align_ctr">Enabled</th>
								<th class="align_ctr">Delete</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($user_cards as $row) : ?>
							<tr>
							<td><?php echo $row['first_name']." ".$row['last_name']?></td>
							<td><a href="<?php echo $base_url.'card/view/'.$row['card_id'];?>">
								<?php echo $row['name'];?>
							</a></td>
							<td><?php echo $row['serial'];?></td>
							<td><?php echo $row['balance'];?></td>
							<td class="align_ctr">
								<input type=hidden name="card_enabled[<?php echo $row['card_id'];?>]" value="0"/>
								<input type=checkbox name="card_enabled[<?php echo $row['card_id'];?>]" value="1"  <?php echo ($row['enabled'] == 1) ? 'checked="checked"' : "";?> />
							</td>
							<td class="align_ctr">
								<input type=checkbox name="card_delete[<?php echo $row['card_id'];?>]" value="1" />
							</td>
							</tr>
						<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="6">
								<input type=submit name="manage_cards" value="Update/Delete Cards" class="link_button large">
								<input type=submit name="add_card" value="Add New Card" class="link_button large">
							</td>
							</tr>
						</tfoot>
						</table>
						<?php echo form_close();?>
					</fieldset>

					<fieldset>
						<legend>Money Card List</legend>
						<?php echo form_open(current_url());    ?>
						<table>
						<thead>
							<tr>
								<th>Card Name</th>
								<th>Serial #</th>
								<th>Balance</th>
								<th class="align_ctr">Enabled</th>
								<th class="align_ctr">Delete</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($money_cards as $row) : ?>
							<tr>
							<td><a href="<?php echo $base_url.'card/view/'.$row['id'];?>">
								<?php echo $row['name'];?>
							</a></td>
							<td><?php echo $row['serial'];?></td>
							<td><?php echo $row['balance'];?></td>
							<td class="align_ctr">
								<input type=hidden name="card_enabled[<?php echo $row['id'];?>]" value="0"/>
								<input type=checkbox name="card_enabled[<?php echo $row['id'];?>]" value="1"  <?php echo ($row['enabled'] == 1) ? 'checked="checked"' : "";?> />
							</td>
							<td class="align_ctr">
								<input type=checkbox name="card_delete[<?php echo $row['id'];?>]" value="1" />
							</td>
							</tr>
						<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="6">
								<input type=submit name="manage_money_cards" value="Update/Delete Cards" class="link_button large">
								<input type=submit name="add_money_card" value="Add New Card" class="link_button large">
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
