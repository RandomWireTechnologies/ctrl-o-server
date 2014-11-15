<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Card extends CI_Controller {
 
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

	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// flexi auth demo
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * Many of the functions within this controller load a custom model called 'demo_auth_model' that has been created for the purposes of this demo.
	 * The 'demo_auth_model' file is not part of the flexi auth library, it is included to demonstrate how some of the functions of flexi auth can be used.
	 *
	 * These demos show working examples of how to implement some (most) of the functions available from the flexi auth library.
	 * This particular controller 'auth_public', is used by users who have logged in and now wish to manage their account settings
	 * 
	 * All demos are to be used as exactly that, a demonstation of what the library can do.
	 * In a few cases, some of the examples may not be considered as 'Best practice' at implementing some features in a live environment.
	*/
	
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Dashboard
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * index
	 * Forwards to the user dashboard.
	 */ 
	function index()
	{
	    $user_id = $this->flexi_auth->get_user_id();
		$this->load->model('cards_model');

		if ($this->input->post('update_cards')) {
			// Handle updates
			$this->cards_model->update_cards(); //) {
			//	$this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to view user accounts.</p>');
		} else if ($this->input->post('add_card')) {
			redirect('card/add');
		}
	    $this->data['cards'] = $this->cards_model->get_user_cards($user_id);
		$this->data['logs'] = $this->cards_model->get_user_logs($user_id);
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
		// Set any returned status/error messages.
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->load->view('cards_view', $this->data);
	}
	
	function view($card_id)
	{
	    $user_id = $this->flexi_auth->get_user_id();
		$this->load->model('cards_model');

        if ($this->input->post('update_card')) {
			$this->cards_model->update_cards();
		}
		// Show single card data
		// First check if this card is owned by this user or has rights to view all cards
		if ($this->cards_model->is_card_owner($card_id) || $this->flexi_auth->is_privileged('Manage Cards')) {
			$this->data['logs'] = $this->cards_model->get_card_logs($card_id);
			$this->data['card'] = $this->cards_model->read_card($card_id);
			$this->data['disabled'] = "";
			$this->data['is_developer'] = 0;
			if (!$this->flexi_auth->is_privileged('Manage Cards')) {
				$this->data['disabled'] = "disabled";
			} else {
				$this->data['users'] = $this->cards_model->get_username_list();
			}
			if ($this->flexi_auth->in_group('Developer')) {
				$this->data['is_developer'] = 1;
			}

			// Set any returned status/error messages.
			$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];

			$this->load->view('card_view', $this->data);
		} else {
			// You don't have privledges, bounce to your card page
			$this->flexi_auth->set_error_message("You don't have permission to view that card!", TRUE);
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			redirect('card');
		}
	}
	
	function manage()
	{
	    $user_id = $this->flexi_auth->get_user_id();
		$this->load->model('cards_model');
	    if ($this->input->post('update_cards') || $this->input->post('manage_cards') || $this->input->post('manage_money_cards')) {
			// Handle updates
			$this->cards_model->update_cards(); //) {
			//	$this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to view user accounts.</p>');
		}
		if ($this->input->post('add_card')) {
			redirect('card/add');
		} else if ($this->input->post('add_money_card')) {
		    redirect('card/add/money');
		}
	    // Ensure user has rights
		if (! $this->flexi_auth->is_privileged('Manage Cards')) {
			// You don't have privledges, bounce to your card page
                            $this->flexi_auth->set_error_message("You don't have permission to manage cards!", TRUE);
                            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
                            redirect('card');
		}
		$this->data['users'] = $this->cards_model->get_username_list();
		$this->data['new_cards'] = $this->cards_model->get_all_unassigned_cards();
		$this->data['user_cards'] = $this->cards_model->get_all_user_cards();
		$this->data['money_cards'] = $this->cards_model->get_all_money_cards();
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view('manage_cards_view', $this->data);
	}
	
	
	function add($type = 'user') {
		// Get users current data.
		// This example does so via 'get_user_by_identity()', however, 'get_users()' using any other unqiue identifying column and value could also be used.
		$user_id = $this->flexi_auth->get_user_id();
		$this->load->model('cards_model');

        if (!$this->flexi_auth->is_privileged('Manage Cards')) {
            $this->flexi_auth->set_error_message("You don't have permission to add cards!", TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('card');
		}

		if ($this->input->post('add_card')) {
			// Handle updates
			$this->cards_model->add_new_card(); //) {
		}

		if ($this->flexi_auth->is_privileged('Manage Cards')) {
			$this->data['users'] = $this->cards_model->get_username_list();
		}
		$this->data['current_user'] = $this->flexi_auth->get_user_id();

		if ($type == 'user') {
			$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
            $this->load->view('card_add_view', $this->data);
		} else if ($type == 'money') {
			if (!$this->flexi_auth->is_privileged('Manage Cards')) {
				// Only allow managers to add money cards
				$this->flexi_auth->set_error_message("You don't have permission to add money cards!", TRUE);
                $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
                redirect('card');
			}
			$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
            $this->load->view('card_money_add_view', $this->data);
		}
	}
}
	
/* End of file cards.php */
/* Location: ./application/controllers/cards.php */	
