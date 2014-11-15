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
        $log_file = 'paypal.log';
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
        $user_id = $this->paypal_ipn->order['custom'];
        if (is_null($user_id)) {
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

        $payment_date = date( 'Y-m-d H:i:s', strtotime( $this->paypal_ipn->order['payment_date']));
// Get Items
        foreach ($this->paypal_ipn->orderItems as $item) {
// Get the item name and user id (item id)
            $membership_type = $item['item_number'];
            $this->load->model('memberships_model');
            if(isset($membership)) {
                unset($membership);
            }
            $membership['user_id'] = $user_id;
            if(is_int($item['item_number'])) {
                $membership['type_id'] = $item['item_number'];
            } else {
                if ($item['item_number'] == "sub-Maker") {
                    $membership['type_id'] = 6;
                    $start_date = $payment_date;
                    $end_date = date( 'Y-m-d H:i:s', strtotime("$start_date +31 days"));
                    $membership['start'] = $start_date;
                    $membership['end'] = $end_date;
                } elseif ($item['item_number'] == "sub-Pro") {
                    $membership['type_id'] = 7;
                    $start_date = $payment_date;
                    $end_date = date( 'Y-m-d H:i:s', strtotime("$start_date +31 days"));
                    $membership['start'] = $start_date;
                    $membership['end'] = $end_date;
                } elseif ($item['item_number'] == "sub-EntSmBiz") {
                    $membership['type_id'] = 8;
                    $start_date = $payment_date;
                    $end_date = date( 'Y-m-d H:i:s', strtotime("$start_date +31 days"));
                    $membership['start'] = $start_date;
                    $membership['end'] = $end_date;
                } elseif ($item['item_number'] == "1mo-Maker") {
                    $membership['type_id'] = 3;
                } elseif ($item['item_number'] == "1mo-Pro") {
                    $membership['type_id'] = 4;
                } elseif ($item['item_number'] == "1mo-EntSmBiz") {
                    $membership['type_id'] = 5;
                }
            }
            $membership['purchased'] = $payment_date;
            $membership['price'] = $item['mc_gross'];
            $membership['notes'] = "Purchased from PayPal";

            if (!is_null($user_id) && !is_null($membership['type_id'])) {
                $this->memberships_model->purchased($membership);
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
