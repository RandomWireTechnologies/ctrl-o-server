<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nodes_model extends CI_Model {
	
	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}

	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Cards
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

 	/**
	 * get_user_cards
	 * Gets a paginated list of users that can be filtered via the user search form, filtering by the users email and first and last names.
	 */
	function get_nodes() {
		// Select user data to be displayed.
		$query = $this->db->get("nodes");
		return $query->result_array();
	}

	function get_node($node_id) {
		// Select user data to be displayed.
		$query = $this->db->get_where("nodes",array('id' => $node_id));
		//return $query->result_array();
		return $query->row_array();
	}

	function get_node_logs($node_id, $limit=30, $offset=0) {
		$this->db->select("*,CONCAT_WS(' ',user_profiles.first_name,user_profiles.last_name ) as user_name,cards.name as card_name,cards.id as card_id");
		$this->db->from("log");
		$this->db->join("user_profiles","user_profiles.user_id = log.user_id","left");
		$this->db->join("cards","cards.id = log.card_id","left");
		$this->db->where("log.node_id",$node_id);
		$this->db->order_by("log.time","desc");
		$this->db->limit($limit,$offset);
		//$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_node_name($node_id) {
        $query = $this->db->get_where("nodes",array('id' => $node_id));
        $data = $query->row_array();
        return $data['name'];
    }
    
    function get_node_hostname($node_id) {
        $query = $this->db->get_where("nodes",array('id' => $node_id));
        $data = $query->row_array();
        return $data['hostname'];
    }

	function update_cards() {
		if ($is_enabled = $this->input->post('card_enabled')) {
			$fail_count = 0;
			foreach($is_enabled as $card_id=>$enabled) {
				// Check for global privledges or ownership of card
				if ( $this->is_card_owner($card_id) || $this->flexi_auth->is_privileged('Manage Cards')) {
					$data = array("enabled"=>$enabled);
					$this->update_card($card_id,$data);
				} else {
					$fail_count++;
				}
			}
			if ($fail_count == 0) {
				//$this->flexi_auth->set_status_message("Cards updated");
				$this->data['message'] = "<p class='status_msg'>Cards updated</p>";
			} else {
				//$this->flexi_auth->set_error_message("Update failed: You don't have permission");
				$this->data['message'] = "<p class='error_msg'>Update failed: You don't have permission</p>";
			}
		}
		if ($deletes = $this->input->post('card_delete')) {
			if ($this->flexi_auth->is_privileged('Manage Cards')) {
				foreach($deletes as $card_id=>$delete) {
					if ($delete == 1) {
						$this->delete_card($card_id);
					} else {
						$this->data['message'] = "<p class='error_msg'>Delete failed</p>";
					}
				}
			} else {
				$this->data['message'] = "<p class='error_msg'>Delete failed: You don't have permission</p>";
			}
		}

		if ($this->input->post('update_card') == "Update Card") {
			// validate card data
			$card = $this->input->post('card');
			if ($this->update_card($card['id'],$card)) {
				$this->data['message'] = "<p class='status_msg'>Card Updated</p>";
			} else {
				$this->data['message'] = "<p class='error_msg'>Failed to update</p>";
			}
			//$card_id = $this->input->post('card_id');
			//$this->update_card($card_id,array("name"=>$this->input->post('name'),"serial"=>$this->input->post('serial'),"enabled"=>$this->input->post('enabled')));
		}
	}

	function get_card_logs($card_id, $limit=10,$offset=0) {
		$this->db->from("log");
		$this->db->join("nodes","nodes.id = log.node_id");
		$this->db->where("log.card_id",$card_id);
		$this->db->order_by("log.time","desc");
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query->result_array();
	}

    function enable($node_id) {
        $data = array ('enabled' => 1);
        $this->db->where('id',$node_id);
        $this->db->update("nodes",$data);
        return;
    }
    
    function disable($node_id) {
        $data = array ('enabled' => 0);
        $this->db->where('id',$node_id);
        $this->db->update("nodes",$data);
        return;
    }

	function add_new_card() {
		// Validate data from form
		$card = $this->input->post('card');
	//************************ ADD CHECKING HERE ********************************************//
		// Insert data into database
		if ($this->db->insert("cards",$card)) {
			$this->data['message'] = "<p class='status_msg'>Card Added</p>";
			redirect("/card");
		} else {
			$this->data['message'] = "<p class='error_msg'>Failed to add...</p>";
		}
		// $this->data['message'] = "<p class='status_msg'>Card data =</p>";
	}

	function add_card($card_data) {
		$this->db->insert("cards",$card_data);
		return;
	}

	function read_card($card_id) {
		$this->db->where("id", $card_id);
		$query = $this->db->get("cards");
		return $query->row_array();
	}

	function update_card($card_id, $card_data) {
		$this->db->where("id", $card_id);
		return $this->db->update("cards", $card_data);
	}

	function delete_card($card_id) {
		$this->db->where("id", $card_id);
		$this->db->delete("cards");
	}

}

/* End of file cards_model.php */
/* Location: ./application/models/cards_model.php */
