	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership extends CI_Controller {
 
    function __construct() 
    {
        parent::__construct();

		// To load the CI benchmark and memory usage profiler - set 1==1.
		if (1==2) 
		{
			$sections = array(
				'benchmarks' => TRUE, 'memory_usage' => TRUE, 
				'config' => FALSE, 'controller_info' => FALSE, 'get' => FALSE, 'post' => FALSE, 'queries' => FALSE, 
				'uri_string' => FALSE, 'http_headers' => FALSE, 'session_data' => FALSE
			); 
			$this->output->set_profiler_sections($sections);
			$this->output->enable_profiler(TRUE);
		}
		
		// Load required CI libraries and helpers.
		$this->load->database();
		$this->load->library('session');
 		$this->load->helper('url');
 		$this->load->helper('form');

  		// IMPORTANT! This global must be defined BEFORE the flexi auth library is loaded! 
 		// It is used as a global that is accessible via both models and both libraries, without it, flexi auth will not work.
		$this->auth = new stdClass;

		// Load 'standard' flexi auth library by default.
		$this->load->library('flexi_auth');

		// Check user is logged in via either password or 'Remember me'.
		// Note: Allow access to logged out users that are attempting to validate a change of their email address via the 'update_email' page/method.
		if (! $this->flexi_auth->is_logged_in() && $this->uri->segment(2) != 'update_email')
		{
			// Set a custom error message.
			$this->flexi_auth->set_error_message('You must login to access this area.', TRUE);
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			redirect('auth');
		}
		
		// Note: This is only included to create base urls for purposes of this demo only and are not necessarily considered as 'Best practice'.
                $this->load->vars('base_url', '/');
                $this->load->vars('includes_dir', '/includes/');
		$this->load->vars('current_url', $this->uri->uri_to_assoc(1));
		
		// Define a global variable to store data that is then used by the end view page.
		$this->data = null;
	}

    function index() {
        $user_id = $this->flexi_auth->get_user_id();

        $this->load->model('memberships_model');
        $this->load->model('cards_model');
        if ($this->input->post("activate")) {
            $this->memberships_model->activate();
        }

        $this->data['current_memberships'] = $this->memberships_model->get_user_memberships($user_id,'Current');
        $this->data['memberships'] = $this->memberships_model->get_user_memberships($user_id,'All');
	$this->data['users'] = $this->cards_model->get_username_list();
	$this->data['types'] = $this->memberships_model->membership_type_list();
        $this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
        $this->data['user_id'] = $user_id;
        //$this->data['membership_types'] = $this->memberships_model->get_membership_types();

        // Set any returned status/error messages.
        $this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];

        $this->load->view('membership_list_view', $this->data);
     }

    function types() {
        $user_id = $this->flexi_auth->get_user_id();

	if ($this->flexi_auth->is_privileged('Manage Memberships')) {
            $this->load->model('memberships_model');
	    $action = $this->input->post("action");
            if ($action == "Add") {
		$this->data['new_type'] = $this->input->post("new_type");
                $this->memberships_model->add_type();
            } else if ($action == "Delete") {
                $this->memberships_model->delete_type();
            }
	    if (!isset($this->data['new_type'])) {
		$this->data['new_type'] = array("name"=>"","length"=>"","price"=>"","number"=>"");
	    }
            $this->data['membership_types'] = $this->memberships_model->get_membership_types();
            $this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
            $this->data['user_id'] = $user_id;

            // Set any returned status/error messages.
            $this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];

            $this->load->view('membership_type_list_view', $this->data);
	} else {
            $this->flexi_auth->set_error_message("You don't have permission to view this page!", TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('membership');
	}
    }

    function view($membership_id)
    {
        $user_id = $this->flexi_auth->get_user_id();

        $this->load->model('memberships_model');
        $this->load->model('cards_model');
        if ($this->memberships_model->is_membership_owner($membership_id) || $this->flexi_auth->is_privileged('Manage Memberships')) {
            // Set any returned status/error messages.
            if($this->input->post("action") && ($this->flexi_auth->is_privileged('Manage Memberships') || $this->memberships_model->is_membership_owner($membership_id))) {
                $this->memberships_model->membership_action($membership_id);
            }
            $this->config->load('paypal_ipn');
            if ($this->config->item('paypal_ipn_use_live_settings')) {
		$this->data['paypal_id'] = $this->config->item('paypal_ipn_live_settings')['id'];
		$this->data['paypal_url'] = $this->config->item('paypal_ipn_live_settings')['url'];
	    } else {
		$this->data['paypal_id'] = $this->config->item('paypal_ipn_sandbox_settings')['id'];
		$this->data['paypal_url'] = $this->config->item('paypal_ipn_sandbox_settings')['url'];
	    }
            $this->data['users'] = $this->cards_model->get_username_list();
            $this->data['membership_types'] = $this->memberships_model->membership_type_list();
            $this->data['membership'] = $this->memberships_model->get_membership($membership_id);
            $this->data['user_id'] = $user_id;
            $this->load->view('membership_view', $this->data);
        } else {
            // You don't have privledges, bounce to your membership page
            $this->flexi_auth->set_error_message("You don't have permission to view that membership!", TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('membership');
        }
    }

    function remove_user($membership_id,$userlink_id) {
	$this->load->model('memberships_model');
	if ($this->memberships_model->is_membership_owner($membership_id) || $this->flexi_auth->is_privileged('Manage Memberships')) {
	    $this->memberships_model->membership_remove_user($membership_id,$userlink_id);
	} else {
	    $this->flexi_auth->set_error_message("You don't have permission to view that membership!", TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
	}
	redirect("membership/view/$membership_id");
    }

    function user($user_id)
	{
        // Ensure user has rights
		if (! $this->flexi_auth->is_privileged('Manage Memberships')) {
			// You don't have privledges, bounce to your card page
            $this->flexi_auth->set_error_message("You don't have permission to view random memberships!", TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('membership');
		}
		$this->load->model('memberships_model');
		$this->load->model('cards_model');
		if ($this->input->post("activate")) {
			$this->memberships_model->activate();
		}

        	$this->data['current_memberships'] = $this->memberships_model->get_user_memberships($user_id,'Current');
        	$this->data['memberships'] = $this->memberships_model->get_user_memberships($user_id,'All');
		$this->data['users'] = $this->cards_model->get_username_list();
		$this->data['types'] = $this->memberships_model->membership_type_list();
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
                $this->data['user_id'] = $user_id;
		// Set any returned status/error messages.
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->load->view('membership_list_view', $this->data);
	}
    
    function manage()
    {
        $user_id = $this->flexi_auth->get_user_id();

		$this->load->model('memberships_model');
        // Ensure user has rights
		if (! $this->flexi_auth->is_privileged('Manage Memberships')) {
			// You don't have privledges, bounce to your card page
            $this->flexi_auth->set_error_message("You don't have permission to manage memberships!", TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('membership');
		}
		if ($this->input->post('update_memberships')) {
			// Handle updates
			$this->memberships_model->update_memberships(); //) {
			//	$this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to view user accounts.</p>');
		}
		//$this->data['user_cards'] = $this->cards_model->get_all_user_cards();
		///$this->data['money_cards'] = $this->cards_model->get_all_money_cards();
		//$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->data['membership_count'] = $this->memberships_model->get_membership_counts();
		$this->data['all_memberships'] = $this->memberships_model->get_all_memberships();
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();

		// Set any returned status/error messages.
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->load->view('manage_memberships_view', $this->data);
    }

    function add()
    {
        $user_id = $this->flexi_auth->get_user_id();

	$this->load->model('memberships_model');
	$this->load->model('cards_model');
        // Ensure user has rights
	if (! $this->flexi_auth->is_privileged('Manage Memberships')) {
	    // You don't have privledges, bounce to your card page
            $this->flexi_auth->set_error_message("You don't have permission to manage memberships!", TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('membership');
	}

	if ($action = $this->input->post('action')) {
	    // Handle updates
	    $membership_id = $this->memberships_model->add_new_membership();
            if($action == "Add Membership With Credit") {
                 $this->memberships_model->add_membership_credit($membership_id);
            }
            $this->data['membership'] = $this->input->post('membership');
	}

        $this->data['users'] = $this->cards_model->get_username_list();
        $this->data['membership_types'] = $this->memberships_model->membership_type_list();
        //$this->data['current_user'] = $this->flexi_auth->get_user_id();

	$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
        $this->load->view('membership_add_view', $this->data);
    }

}
	
/* End of file membership.php */
/* Location: ./application/controllers/membership.php */	
