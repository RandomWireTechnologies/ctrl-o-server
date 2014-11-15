<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Node extends CI_Controller {
 
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

		// Check user is logged in as an admin.
		// For security, admin users should always sign in via Password rather than 'Remember me'.
		if (! $this->flexi_auth->is_logged_in_via_password() || ! $this->flexi_auth->is_admin()) 
		{
			// Set a custom error message.
			$this->flexi_auth->set_error_message('You must login as an admin to access this area.', TRUE);
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
	// Quick Help Guide
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	
	/**
	 * db_column() function
	 * Columns defined using the 'db_column()' functions are referencing native table columns from the auth libraries 'user_accounts' table.
	 * Using the 'db_column()' function ensures if the column names are changed via the auth config file, then no further references to those table columns 
	 * within the CI installation should need to be updated, as the function will auto reference the config files updated column name.
	 * Native library column names can be defined without using this function, however, you must then ensure that all references to those column names are 
	 * updated throughout the site if later changed.
	 */

	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Dashboard
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

	/**
	 * index
	 * Forwards to the list view.
	 */ 
    function index()
    {
        $this->nodelist();
    }

    function nodelist()
    {
        // Check user has privileges to manage nodes, else display a message to notify the user they do not have valid privileges.
        if (! $this->flexi_auth->is_privileged('View Nodes'))
        {
            $this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to view nodes.</p>');
            redirect('auth');
        }
        // Load node list data
        $this->load->model('nodes_model');
        $this->data['nodes'] = $this->nodes_model->get_nodes();
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('node_list_view', $this->data);
    }

    function view($node_id,$page=0,$limit=20)
    {
        // Check user has privileges to manage nodes, else display a message to notify the user they do not have valid privileges.
        if (! $this->flexi_auth->is_privileged('View Nodes'))
        {
            $this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to view nodes.</p>');
            redirect('auth');
        }

	$scroll = $this->input->post('scroll_log');
	if ($scroll == "Next") {
	    $page++;
	    redirect("node/view/$node_id/$page/$limit");
	} else if ($scroll == "Previous") {
            if ($page > 0) {
		$page--;
	    }
	    redirect("node/view/$node_id/$page/$limit");
	}
        // Load node data
        $this->load->model('nodes_model');
        $this->data['node'] = $this->nodes_model->get_node($node_id);
        $this->data['logs'] = $this->nodes_model->get_node_logs($node_id,$limit,$page*$limit);

        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('node_view', $this->data);
    }

    function send($node_id,$command)
    {
        // Check user has privileges to manage nodes, else display a message to notify the user they do not have valid privileges.
        if (! $this->flexi_auth->is_privileged('Manage Nodes'))
        {
            $this->session->set_flashdata('message', '<p class="error_msg">You do not have privileges to manage nodes.</p>');
            redirect('node');
        }
        // Load node data
        $this->load->model('nodes_model');
        // Get Node address
	$nodeName = $this->nodes_model->get_node_name($node_id);
	// Send command
	$userId = $this->flexi_auth->get_user_id();
	$this->data['message'] = exec("ssh pi@$nodeName 'echo $userId > /opt/nfc/doorcmds/$command'");
        // Show update
	//$this->data['message'] = exec("whoami");
        //echo "Hello World";
        $this->data['node'] = $this->nodes_model->get_node($node_id);
        $this->data['logs'] = $this->nodes_model->get_node_logs($node_id);

        //$this->data['message'] = $this->session->flashdata('message');
        $this->load->view('node_view', $this->data);
    }

}

/* End of file node.php */
/* Location: ./application/controllers/node.php */
