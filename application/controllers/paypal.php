<?php
// codeigniter/controllers/example.php

/* This is an example controller showing how to use the PayPal_IPN library. This is a
* simple example: it does not send any notification emails or similar, it simply
* logs the order to the database.
* 
* This file is copyright (c) 2011 Alexander Dean, alex@keplarllp.com
* 
* This file is part of codeigniter-paypal-ipn
* 
* codeigniter-paypal-ipn is free software: you can redistribute it and/or modify it under the
* terms of the GNU Affero General Public License as published by the Free Software Foundation,
* either version 3 of the License, or (at your option) any later version.
* 
* codeigniter-paypal-ipn is distributed in the hope that it will be useful, but WITHOUT ANY
* WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
* PURPOSE. See the GNU Affero General Public License for more details.
* 
* You should have received a copy of the GNU Affero General Public License along with
* codeigniter-paypal-ipn. If not, see <http://www.gnu.org/licenses/>.
*/

class Paypal extends CI_Controller {

// To handle the IPN post made by PayPal (uses the Paypal_Lib library).
function ipn()
{
    $log_file = '/p/web/lm.randomwire.biz/paypal.log';
    $this->load->library('PayPal_IPN'); // Load the library
    $this->auth = new stdClass; // Stupid requirement before loading flexi_auth
    $this->load->library('flexi_auth');

    // Try to get the IPN data.
    if ($this->paypal_ipn->validateIPN())
    {
        // Succeeded, now let's extract the order
        $this->paypal_ipn->extractOrder();

        // And we save the order now (persist and extract are separate because you might only want to persist the order in certain circumstances).
        $this->paypal_ipn->saveOrder();

        // Now let's check what the payment status is and act accordingly
        if ($this->paypal_ipn->orderStatus == PayPal_IPN::PAID)
        {
            $user_id = null;
            $membership_id = null;
            //$membership_id = $this->paypal_ipn->order['custom'];
            $custom = $this->paypal_ipn->order['custom'];
	    $custom_data = unserialize($custom);
	    $membership_id = $custom_data['membership_id'];
	    $user_id = $custom_data['user_id'];
	    //$auto_activate = $custom_data['auto_activate'];
	    file_put_contents($log_file, "User Id=$user_id\n", FILE_APPEND);
            if (is_null($membership_id)) {
                $user_data = $this->flexi_auth->get_user_by_identity_query($this->paypal_ipn->order['payer_email']);
                if (!is_null($user_data)) {
                    $count = $user_data->num_rows();
                    if ($count > 0) {
                        $user = $user_data->result_array();
                        $user_id = $user[0]['user_id'];
                        if ( !function_exists('file_put_contents') && !defined('FILE_APPEND') ) {
                            file_put_contents($log_file, 'test\n', FILE_APPEND);
                        }
                    }
                    //$user_id = $user_data[0]['id'];
                }
            }

            if(isset($membership_credit)) {
                unset($membership_credit);
            }

            $payment_date = date( 'Y-m-d H:i:s', strtotime( $this->paypal_ipn->order['payment_date']));
            // Get Items
            foreach ($this->paypal_ipn->orderItems as $item) {
                // Get the item name and user id (item id)
                if(is_numeric($item['item_number'])) {
                    $membership_credit['type_id'] = $item['item_number'];
	 	    file_put_contents($log_file, "Membership Type Id=".$membership_credit['type_id']."\n", FILE_APPEND);
                } else {
                    if ($item['item_number'] == "sub-Maker") {
                        $membership_credit['type_id'] = 6;
                        $start_date = $payment_date;
                        $end_date = date( 'Y-m-d H:i:s', strtotime("$start_date +31 days"));
                        $membership_credit['start'] = $start_date;
                        $membership_credit['end'] = $end_date;
                    } elseif ($item['item_number'] == "sub-Pro") {
                        $membership_credit['type_id'] = 7;
                        $start_date = $payment_date;
                        $end_date = date( 'Y-m-d H:i:s', strtotime("$start_date +31 days"));
                        $membership_credit['start'] = $start_date;
                        $membership_credit['end'] = $end_date;
                    } elseif ($item['item_number'] == "sub-EntSmBiz") {
                        $membership_credit['type_id'] = 8;
                        $start_date = $payment_date;
                        $end_date = date( 'Y-m-d H:i:s', strtotime("$start_date +31 days"));
                        $membership_credit['start'] = $start_date;
                        $membership_credit['end'] = $end_date;
                    } elseif ($item['item_number'] == "1mo-Maker") {
                        $membership_credit['type_id'] = 3;
                    } elseif ($item['item_number'] == "1mo-Pro") {
                        $membership_credit['type_id'] = 4;
                    } elseif ($item['item_number'] == "1mo-EntSmBiz") {
                        $membership_credit['type_id'] = 5;
                    }
                }

		file_put_contents($log_file, "Options Passed: N=".$item['option_name_1']." V=".$item['option_selection_1']."\n", FILE_APPEND);
		if($item['option_name_1'] == "membership_id") {
		    $membership_id = $item['option_selection_1'];
		    file_put_contents($log_file, "Membership ID Passed as ID=$membership_id\n", FILE_APPEND);
		}
 
                $this->load->model('memberships_model');
                if(is_null($membership_id) && is_numeric($membership['type_id']) && is_numeric($user_id)) {
                    $membership_id = $this->memberships_model->get_users_membership_id($user_id,$membership_type);
		    file_put_contents($log_file, "Getting Membership Id... ID=$membership_id\n", FILE_APPEND);
                }
		if(is_null($user_id) && is_numeric($membership_id)) {
		    $user_id = $this->memberships_model->get_membership_owner($membership_id);
		    file_put_contents($log_file, "Getting User Id from database, memid=$membership_id, owner_Id=$user_id\n", FILE_APPEND);
		}
                if (!is_null($membership_id)) {
                    $membership_credit['owner_id'] = $user_id;
                    $membership_credit['membership_id'] = $membership_id;
                    $membership_credit['purchased'] = $payment_date;
                    $membership_credit['price_paid'] = $item['mc_gross'];
                    $membership_credit['notes'] = "Purchased from PayPal";

		    file_put_contents($log_file, "Membership Credit: Owner=$user_id, Type=".$membership_credit['type_id']."\n", FILE_APPEND);

                    if (!is_null($user_id) && !is_null($membership_credit['type_id'])) {
		        file_put_contents($log_file, "Storing Values...\n", FILE_APPEND);
		        file_put_contents($log_file, " Owner=".$membership_credit['owner_id']."\n", FILE_APPEND);
		        file_put_contents($log_file, " MID=".$membership_credit['membership_id']."\n", FILE_APPEND);
		        file_put_contents($log_file, " Purchased=".$membership_credit['purchased']."\n", FILE_APPEND);
		        file_put_contents($log_file, " PricePaid=".$membership_credit['price_paid']."\n", FILE_APPEND);
		        file_put_contents($log_file, " Notes=".$membership_credit['notes']."\n", FILE_APPEND);
                        $this->memberships_model->purchased($membership_credit);
                    }
                }
            }
            /* HEALTH WARNING:
            *
            * Please note that this PAID block does nothing. In other words, this controller will not respond to a successful order
            * with any notification such as email or similar. You will have to identify paid orders by checking your database.
            *
            * If you want to send email notifications on successful receipt of an order, please see the alternative, Smarty template-
            * based example controller: example-smarty-email-notification.php
            */
        }
    }
    else // Just redirect to the root URL
    {
        $this->load->helper('url');
        redirect('/', 'refresh');
    }
}

function test($user_id = FALSE) {
    $this->auth = new stdClass;
    $this->load->library('flexi_auth');
// Define a global variable to store data that is then used by the end view page.
    if ($user_id == FALSE) {
        $user_data = NULL;
    } else {
        $user_data = $this->flexi_auth->get_user_by_id_query($user_id);
    }
//$user_data = $this->flexi_auth->get_user_by_identity_query($user_id);
    if (is_null($user_data)) {
// Get any status message that may have been set.
        $this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->load->view('register_view', $this->data);
    } else {
        $count = $user_data->num_rows();
        if ($count > 0) {
            $user = $user_data->result_array();
            $user = $user[0];
// echo "user= $user <br>";
            print_r($user);
        } else {
            echo "none found";
        }
// Get any status message that may have been set.
        $this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
//		    $this->load->view('login_view', $this->data);
    }
}

}
