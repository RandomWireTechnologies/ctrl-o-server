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

                        <fieldset>
                            <legend>Current</legend>
                            <?php if (count($current_memberships) == 0) :?>
                                <h3>No active memberships!</h3>
                            <?php else : ?>

                                <table>
                                    <thead>
                                        <tr>
                                            <th>Membership Owner</th>
                                            <th>Membership Name</th>
                                            <th>Membership Type</th>
                                            <th>Credit Expires</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($current_memberships as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['owner_name'];?></td>
                                            <td><a href="<?php echo $base_url.'membership/view/'.$row['id'];?>">
                                                <?php echo $row['name'];?>
                                                </a></td>
                                            <td><?php echo $row['membership_type'];?></td>
                                            <td><?php echo $row['expires'];?></td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            <?php endif;?>
                        </fieldset>
                        <fieldset>
                            <legend>My Memberships</legend>
                            <?php if (count($memberships) == 0) :?>
                                <h3>None</h3>
                            <?php else : ?>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Users</th>
                                            <th>Credit Expires</th>
                                            <th>Add More Credit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($memberships as $membership) : ?>
                                        <tr>
                                            <td><a href="<?php echo $base_url."membership/view/".$membership['id'];?>"><?php echo $membership['name'];?></a></td>
                                            <td><?php echo $membership['type'];?></td>
                                            <td><?php echo $membership['user_count']."/".$membership['max_users'];?></td>
                                            <td><?php echo $membership['expires'];?></td>
                                            <td>
                                                <?php echo form_open($paypal_url); ?>
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="<?php echo $membership['paypal_button']; ?>">
                                                <input type="hidden" name="custom" value="<?php echo $membership['paypal_button_cusom'];?>">
                                                <input type="hidden" name="return" value="https://<?php echo $_SERVER['SERVER_NAME'];?>/membership/view/<?php echo $membership['id'];?>">
                                                <input type="hidden" name="cancel_return" value="https://<?php echo $_SERVER['SERVER_NAME'];?>/membership/view/<?php echo $membership['id'];?>">
                                                <input type="image" src="<?php $base_url;?>/includes/images/paypal_buy_small.png" border="0" name="submit" alt="Paypal Buy Button">
                                                <?php echo form_close();?>
                                                <?php echo form_open($paypal_url); ?>
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="<?php echo $membership['paypal_subscription_button']; ?>">
                                                <input type="hidden" name="custom" value="<?php echo $membership['paypal_subscription_button_custom'];?>">
                                                <input type="hidden" name="return" value="https://<?php echo $_SERVER['SERVER_NAME'];?>/membership/view/<?php echo $membership['id'];?>">
                                                <input type="hidden" name="cancel_return" value="https://<?php echo $_SERVER['SERVER_NAME'];?>/membership/view/<?php echo $membership['id'];?>">
                                                <input type="image" src="<?php $base_url;?>/includes/images/paypal_subscribe_small.png" border="0" name="submit" alt="Paypal Subscribe Button">
                                                <?php echo form_close();?>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            <?php endif;?>

                        </fieldset>
                        <?php echo form_open(current_url());	?>

                        <fieldset>
                            <legend>Create New Membership</legend>
                            Type: <?php echo form_dropdown("new_membership_type",$types,"");?>
                            Name: <input name="new_name">
                            <input type=submit class="link_button name="buy" value="Paypal Buy Button">
                            <input type=submit class="link_button name="subscribe" value="Paypal Subscribe Button">
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
