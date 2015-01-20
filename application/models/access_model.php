<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access_model extends CI_Model {
	
	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
		
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Access
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

 	/**
	 * get_users
	 * Gets a list of users including option for All users (-1).
	 */
	function get_users() {
		$this->db->select("user_id,concat(first_name,' ',last_name) as name", FALSE);
		$this->db->order_by("name", "asc");
		$query = $this->db->get("user_profiles");
		$data = $query->result_array();
		$result = array();
		$result['-1'] = "All";
		foreach ($data as $item) {
			$result[$item['user_id']] = $item['name'];
		}
		return $result;
	}
	
	
 	/**
	 * get_schedules
	 * Gets a list of schedules including option for no schedule (null).
	 */
	function get_schedules() {
		$this->db->select("id,name", FALSE);
		$this->db->order_by("name", "asc");
		$query = $this->db->get("schedules");
		$data = $query->result_array();
		$result = array();
		$result['null'] = "None";
		foreach ($data as $item) {
			$result[$item['id']] = $item['name'];
		}
		return $result;
	}
	
 	/**
	 * get_membership_types
	 * Gets a list of membership types including options for no type (null) and anytype (-1).
	 */
	function get_membership_types() {
		$this->db->select("id,name", FALSE);
		$this->db->order_by("name", "asc");
		$query = $this->db->get("membership_types");
		$data = $query->result_array();
		$result = array();
		$result['null'] = "None";
		$result['-1'] = "Any";
		foreach ($data as $item) {
			$result[$item['id']] = $item['name'];
		}
		return $result;
	}
	
	/**
	 * get_user_privileges($node_id)
	 * Gets a list of user privileges set for a perticular node.
	 */
	function get_user_privileges($node_id) {
		$this->db->select("concat(user_profiles.first_name,user_profiles.last_name) as user,schedules.name as schedule,membership_types.name as membership_type");
		$this->db->from("access_user_priveleges");
		$this->db->join("user_profiles","user_profiles.user_id = access_user_priveleges.user_id");
		$this->db->join("schedules","schedules.id = access_user_priveleges.schedule_id");
		$this->db->join("membership_types","membership_types.id = access_user_priveleges.membership_type_id");
		$this->db->where("access_user_priveleges.node_id",$node_id);
		$this->db->order_by("user","asc");
		//$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query->result_array();
	}
//
//	function get_all_user_cards() {
//		$this->db->select("*,cards.id as card_id");
//		$this->db->from("cards");
//		$this->db->join("user_profiles","user_profiles.user_id = cards.user_id");
//		$query = $this->db->get();
//		return $query->result_array();
//	}
//
//	function get_all_unassigned_cards() {
//		$this->db->where("balance",null);
//		$this->db->where('user_id',null);
//		$this->db->or_where('user_id',0);
//		$query = $this->db->get("cards");
//		return $query->result_array();
//	}
//
//	function get_all_money_cards() {
//		$this->db->where("balance IS NOT NULL");
//		$query = $this->db->get_where("cards",array('user_id' => null));
//		return $query->result_array();
//	}
//
//	function update_cards() {
//		if ($is_enabled = $this->input->post('card_enabled')) {
//			$fail_count = 0;
//			foreach($is_enabled as $card_id=>$enabled) {
//				// Check for global privledges or ownership of card
//				if ( $this->is_card_owner($card_id) || $this->flexi_auth->is_privileged('Manage Cards')) {
//					$data = array("enabled"=>$enabled);
//					$this->update_card($card_id,$data);
//				} else {
//					$fail_count++;
//				}
//			}
//			if ($fail_count == 0) {
//				//$this->flexi_auth->set_status_message("Cards updated");
//				$this->data['message'] = "<p class='status_msg'>Cards updated</p>";
//			} else {
//				//$this->flexi_auth->set_error_message("Update failed: You don't have permission");
//				$this->data['message'] = "<p class='error_msg'>Update failed: You don't have permission</p>";
//			}
//		}
//		if ($deletes = $this->input->post('card_delete')) {
//			if ($this->flexi_auth->is_privileged('Manage Cards')) {
//				foreach($deletes as $card_id=>$delete) {
//					if ($delete == 1) {
//						$this->delete_card($card_id);
//					} else {
//						$this->data['message'] = "<p class='error_msg'>Delete failed</p>";
//					}
//				}
//			} else {
//				$this->data['message'] = "<p class='error_msg'>Delete failed: You don't have permission</p>";
//			}
//		}
//		if ($user_ids = $this->input->post('user_id')) {
//			if ($this->flexi_auth->is_privileged('Manage Cards')) {
//				foreach($user_ids as $card_id=>$user_id) {
//					if ($user_id != "") {
//						$this->update_card($card_id,array("user_id"=>$user_id));
//					}
//				}
//			} else {
//				$this->data['message'] = "<p class='error_msg'>User set failed: You don't have permission</p>";
//			}
//		}
//		if ($this->input->post('update_card') == "Update Card") {
//			// validate card data
//			$card = $this->input->post('card');
//			if (!$this->flexi_auth->is_privileged('Manage Cards')) {
//				unset($card['user_id']);
//				unset($card['balance']);
//			} else {
//				if ($card['user_id'] == "") {$card['user_id'] = null;}
//				if ($card['balance'] == "") {$card['balance'] = null;}
//			}
//
//			if ($this->update_card($card['id'],$card)) {
//				$this->data['message'] = "<p class='status_msg'>Card Updated</p>";
//			} else {
//				$this->data['message'] = "<p class='error_msg'>Failed to update</p>";
//			}
//			//$card_id = $this->input->post('card_id');
//			//$this->update_card($card_id,array("name"=>$this->input->post('name'),"serial"=>$this->input->post('serial'),"enabled"=>$this->input->post('enabled')));
//		}
//	}
//
//	function is_card_owner($card_id) {
//		$query = $this->db->get_where("cards",array("user_id"=>$this->flexi_auth->get_user_id(),"id"=>$card_id));
//		return ($query->num_rows() === 1);
//	}
//
//	function get_username_list() {
//		$this->db->select("user_id,concat(first_name,' ',last_name) as name", FALSE);
//		$this->db->order_by("name", "asc");
//		$query = $this->db->get("user_profiles");
//		$data = $query->result_array();
//		$result = array();
//		$result[''] = "&lt;Nobody&gt;";
//		foreach ($data as $item) {
//			$result[$item['user_id']] = $item['name'];
//		}
//		return $result;
//	}
//
//	function get_card_logs($card_id, $limit=10,$offset=0) {
//		$this->db->from("log");
//		$this->db->join("nodes","nodes.id = log.node_id");
//		$this->db->where("log.card_id",$card_id);
//		$this->db->order_by("log.time","desc");
//		$this->db->limit($limit,$offset);
//		$query = $this->db->get();
//		return $query->result_array();
//	}
//
//	function add_new_card() {
//		// Validate data from form
//		$card = $this->input->post('card');
//	//************************ ADD CHECKING HERE ********************************************//
//		// Insert data into database
//		if ($this->db->insert("cards",$card)) {
//			$this->data['message'] = "<p class='status_msg'>Card Added</p>";
//			redirect("card");
//		} else {
//			$this->data['message'] = "<p class='error_msg'>Failed to add...</p>";
//		}
//		// $this->data['message'] = "<p class='status_msg'>Card data =</p>";
//	}
//
//	function add_card($card_data) {
//		if ($card_data['user_id'] == "") {
//			$card_data['user_id'] = null;
//		}
//		$this->db->insert("cards",$card_data);
//		return;
//	}
//
//	function read_card($card_id) {
//		$this->db->where("id", $card_id);
//		$query = $this->db->get("cards");
//		return $query->row_array();
//	}
//
//	function update_card($card_id, $card_data) {
//	    if (array_key_exists('serial',$card_data)) {
//    		$this->db->where("serial", $card_data['serial']);
//    		$query = $this->db->get("cards");
//    		$count = $query->num_rows();
//    		$data = $query->row_array();
//    		if ($count > 0) {
//    		    if ($data['id'] != $card_id) {
//        		    $this->data['message'] = "<p class='error_msg'>Error: Serial Number Already in Use</p>";
//        		    return;
//        		}
//    		}
//    	}
//		$this->db->where("id", $card_id);
//		return $this->db->update("cards", $card_data);
//	}
//
//	function delete_card($card_id) {
//		$this->db->where("id", $card_id);
//		$this->db->delete("cards");
//	}

}

/* End of file cards_model.php */
/* Location: ./application/models/cards_model.php */
