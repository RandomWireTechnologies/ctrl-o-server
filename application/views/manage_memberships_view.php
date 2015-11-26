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
                    <h2>Manage Memberships</h2>

                    <?php if (! empty($message)) { ?>
                        <div id="message">
                            <?php echo $message; ?>
                        </div>
                    <?php } ?>

                    <div id="add_membership">
                        <a href="/membership/add">Add New Membership</a>
                    </div>
                    <?php echo form_open(current_url());	?>
                    <fieldset>
                        <legend>Memberships (<?php echo $membership_count['active']." Active/",$membership_count['max']." Max/".$membership_count['total']?> Total)</legend>
                        <table>
                            <thead>
                                <tr>
                                    <th>Person</th>
                                    <th>Membership Type</th>
                                    <th>Name</th>
                                    <th>Credit Expires</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($all_memberships as $row) : ?>
                                    <tr>
                                        <td>
                                            <a href="/membership/user/<?php echo $row['owner_id']?>">
                                                <?php echo $row['owner'];?>
                                            </a>
                                        </td>
                                        <td><?php echo $row['type'];?></td>
                                        <td>
                                            <a href="/membership/view/<?php echo $row['membership_id']?>">
                                                <?php echo $row['name'];?>
                                            </a>
                                        </td>
                                        <td><?php echo $row['expires'];?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
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
