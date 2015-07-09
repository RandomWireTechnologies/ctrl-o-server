<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memberships_model extends CI_Model {
	
	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
		
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Memberships
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	

 	/**
	 * get_user_memberships
	 * Gets a paginated list of users that can be filtered via the user search form, filtering by the users email and first and last names.
	 */
	function get_user_memberships($user_id, $type='All') {
		if ($type == 'All') {
			$query = $this->db->get_where("membership_names",array('owner_id' => $user_id));
		} else if ($type == 'Expired') {
		    $this->db->select("*,membership_types.name as type,memberships.id as membership_id,memberships.price as price");
		    $this->db->join("membership_types","membership_types.id = memberships.type_id","left");
			$this->db->where('user_id', $user_id);
			$this->db->where('end <', 'NOW()', FALSE);
			$query = $this->db->get("membership_names");
		} else if ($type == 'Unused') {
		    $this->db->select("*,membership_types.name as type,membership_names.id as membership_id,membership_credits.price_paid as price");
		    $this->db->join("membership_types","membership_types.id = membership_names.type_id","left");
			$this->db->join("membership_users","membership_users.membership_id = membership_names.id","left");
			$this->db->join("membership_credits","membership_credits.membership_id = membership_names.id","left");
			$this->db->where('membership_users.user_id', $user_id);
			$this->db->where('start', NULL, FALSE);
			$query = $this->db->get("membership_names");
		} else {
		    $this->db->select("*,membership_types.name as type,membership_names.id as membership_id,membership_credits.price_paid as price");
		    $this->db->join("membership_types","membership_types.id = membership_names.type_id","left");
			$this->db->join("membership_users","membership_users.membership_id = membership_names.id","left");
			$this->db->join("membership_credits","membership_credits.membership_id = membership_names.id","left");
			$this->db->where('membership_users.user_id', $user_id);
			$this->db->where('membership_credits.start <','NOW()', FALSE);
			$this->db->where('membership_credits.end >', 'NOW()', FALSE);
			$query = $this->db->get("membership_names");
		}
		return $query->result_array();
	}

	function get_all_memberships() {
		$this->db->select("*,memberships.id as membership_id,membership_types.name as type, CONCAT_WS(' ',user_profiles.first_name,user_profiles.last_name ) as name, memberships.price as price");
		$this->db->from("memberships");
		$this->db->join("membership_types","membership_types.id = memberships.type_id","left");
		$this->db->join("user_profiles","user_profiles.user_id = memberships.user_id");
		$this->db->order_by("membership_id","desc");
		$query = $this->db->get();
		return $query->result_array();
	}

    function get_membership($membership_id)
    {
        $this->db->where('id',$membership_id);
        $query = $this->db->get("memberships");
        return $query->row_array();
    }

    function get_membership_types() {
        $query = $this->db->get("membership_types");
        return $query->result_array();
    }
    
    function membership_type_list() {
        $query = $this->db->get("membership_types");
		$data = $query->result_array();
		$result = array();
		foreach ($data as $item) {
			$result[$item['id']] = $item['name'];
		}
		return $result;
    }
    
    function get_membership_counts() {
        $query = $this->db->select("count(distinct c.user_id) as active,count(distinct m.user_id) as max,count(distinct p.user_id) as total from current_memberships as c, memberships as m, user_profiles as p", FALSE)->get();
        return $query->row_array();        
    }

    function update_membership($membership_id) {
	    if (!$this->flexi_auth->is_privileged('Manage Memberships')) {
            $this->data['message'] = "<p class='error_msg'>Update failed: You don't have permission</p>";
            return;
	    }
	    $membership = $this->input->post('membership');
	    
	    if ($membership['start']=="") {$membership['start'] = NULL;}
	    if ($membership['end']=="") {$membership['end'] = NULL;}
	    if ($membership['notes']=="") {$membership['notes'] = NULL;}
	    
		$this->db->where("id", $membership_id);
	    $this->db->update("memberships",$membership);
    }

	function is_membership_owner($membership_id) {
		$query = $this->db->get_where("memberships",array("user_id"=>$this->flexi_auth->get_user_id(),"id"=>$membership_id));
		return ($query->num_rows() === 1);
	}

    function purchased($membership) {
        $this->db->insert("memberships",$membership);
    }

	function add_new_membership() {
		// Validate data from form
        $membership = $this->input->post('membership');
	    //************************ ADD CHECKING HERE ********************************************//
	    // Convert blanks to nulls
	    if ($membership['start']=="") {unset($membership['start']);}
	    if ($membership['end']=="") {unset($membership['end']);}
	    if ($membership['notes']=="") {unset($membership['notes']);}
	    if ($membership['user_id']=="") {
	        $this->data['message'] = "<p class='error_msg'>You must select a user!</p>";
		return;
	    }
	    if ($membership['purchased']=="") {
	        $this->data['message'] = "<p class='error_msg'>You must set a purchase date!</p>";
		return;
	    }
		// Insert data into database
		if ($this->db->insert("memberships",$membership)) {
			$this->data['message'] = "<p class='status_msg'>Membership Added</p>";
			redirect("membership/manage");
		} else {
			$this->data['message'] = "<p class='error_msg'>Failed to add...</p>";
		}
	}
	
	function activate() {
	    $data = $this->input->post("activate");
	    $activates = array_keys($data);
	    $id = $activates[0];
	    // Check to make sure rights to activate
	    if ($this->flexi_auth->is_privileged('Manage Memberships') || $this->is_membership_owner($id)) {
	        // Get membership length
	        $this->db->select("membership_types.length as length");
	        $this->db->from("memberships");
	        $this->db->join("membership_types","membership_types.id = memberships.type_id", "left");
	        $this->db->where("memberships.id", $id);
	        $query = $this->db->get();
	        $data = $query->row_array();
	        $length = $data['length'];
            $now = date('Y-m-d H:i:s');
            $end = date('Y-m-d H:i:s', strtotime("+$length days"));
            $membership['start'] = $now;
            $membership['end'] = $end;
            
    		$this->db->where("id", $id);
    	    $this->db->update("memberships",$membership);
    	    
	    } else {
			$this->data['message'] = "<p class='error_msg'>You don't have permission to activate this membership!</p>";
	    }
	}

    function renew_membership($membership_id,$price=null,$notes=null) {
        $this->db->where('id',$membership_id);
        $query = $this->db->get("memberships");
        $membership = $query->row_array();
        $this->db->where('id',$membership['type_id']);
        $query = $this->db->get("membership_types");
        $membership_type = $query->row_array();
        // Update to new membership
        unset($membership['id']);
        $now = date('Y-m-d H:i:s');
        $length = $membership_type['length'];
        $end = date('Y-m-d H:i:s', strtotime("+$length days"));
        $membership['purchased'] = $now;
        $membership['start'] = $now;
        $membership['end'] = $end;
        if ($price != null) {
            $membership['price'] = $price;
        }
        if ($notes != null) {
            $membership['notes'] = $notes;
        }
        // Insert new membership
        $this->db->insert("memberships",$membership);
    }

	function delete_membership($membership_id) {
		$this->db->where("id", $membership_id);
		$this->db->delete("memberships");
	}

}

/* End of file memberships_model.php */
/* Location: ./application/models/memberships_model.php */
