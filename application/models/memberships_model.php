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
			$this->db->select("membership_names.*,membership_types.name as type, membership_types.number as max_users, count(distinct membership_users.user_id) as user_count, max(membership_credits.end) as expires");
			$this->db->join("membership_types","membership_types.id = membership_names.type_id","left");
			$this->db->join("membership_users","membership_users.membership_id = membership_names.id","left");
			$this->db->join("membership_credits","membership_credits.membership_id = membership_names.id","left");
			$this->db->group_by("membership_names.id");
			$this->db->where('membership_names.owner_id', $user_id);
			$this->db->where('membership_credits.end is not null');
			$query = $this->db->get("membership_names");
			$memberships = $query->result_array();
			foreach ($memberships as $key => $membership) {
				$memberships[$key]['credits'] = $this->db->get_where("membership_credits",array('membership_id' => $membership['id']))->result_array();
				$this->db->select("membership_users.id,membership_users.user_id,concat(user_profiles.first_name,' ',user_profiles.last_name) as name",FALSE);
				$this->db->join("user_profiles","user_profiles.user_id = membership_users.user_id","left");
				$this->db->where("membership_users.membership_id", $membership['id']);
				$memberships[$key]['users'] = $this->db->get("membership_users")->result_array();
			}
			return $memberships;
		} else {
		    $this->db->select("membership_names.*,concat(user_profiles.first_name,' ',user_profiles.last_name) as owner_name, membership_types.name as membership_type, max(membership_credits.end) as expires", FALSE);
		    $this->db->join("membership_types","membership_types.id = membership_names.type_id","left");
			$this->db->join("user_profiles","user_profiles.user_id = membership_names.owner_id","left");
			$this->db->join("membership_users","membership_users.membership_id = membership_names.id","left");
			$this->db->join("membership_credits","membership_credits.membership_id = membership_names.id","left");
			$this->db->group_by("membership_names.id");
			$this->db->where('membership_users.user_id', $user_id);
			$this->db->where('membership_credits.start <','NOW()', FALSE);
			$this->db->where('membership_credits.end >', 'NOW()', FALSE);
			$this->db->where('membership_credits.end is not null');
			$query = $this->db->get("membership_names");
			return $query->result_array();
		}
	}

	function get_all_memberships() {
		$this->db->select("membership_names.*,membership_names.id as membership_id,membership_types.name as type, CONCAT_WS(' ',user_profiles.first_name,user_profiles.last_name ) as owner, max(membership_credits.end) as expires");
		$this->db->from("membership_names");
		$this->db->join("membership_types","membership_types.id = membership_names.type_id","left");
		$this->db->join("user_profiles","user_profiles.user_id = membership_names.owner_id");
		$this->db->join("membership_credits","membership_credits.membership_id = membership_names.id","left");
		$this->db->group_by("membership_names.id");
		$this->db->where("membership_credits.end is not null");
		$this->db->order_by("owner","ASC");
		$query = $this->db->get();
		return $query->result_array();
	}

    function get_membership($membership_id)
    {
	$this->db->select("membership_names.*,membership_types.name as type,membership_types.price as type_price, CONCAT_WS(' ',user_profiles.first_name,user_profiles.last_name ) as owner_name, membership_types.number as max_users, count(distinct membership_users.user_id) as user_count");
	$this->db->join("membership_types","membership_types.id = membership_names.type_id","left");
	$this->db->join("user_profiles","user_profiles.user_id = membership_names.owner_id","left");
	$this->db->join("membership_users","membership_users.membership_id = membership_names.id","left");
        $this->db->where('membership_names.id',$membership_id);
        $membership = $this->db->get("membership_names")->row_array();
	$membership['credits'] = $this->db->get_where("membership_credits",array('membership_id' => $membership['id']))->result_array();
	$this->db->select("membership_users.id,membership_users.user_id,concat(user_profiles.first_name,' ',user_profiles.last_name) as name",FALSE);
	$this->db->join("user_profiles","user_profiles.user_id = membership_users.user_id","left");
	$this->db->where("membership_users.membership_id", $membership['id']);
	$membership['users'] = $this->db->get("membership_users")->result_array();
	
        return $membership;
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

    function membership_action($membership_id) {
        $action = $this->input->post("action");
        if ($action == "Update Name") {
            $membership = array("name"=>$this->input->post("new_name"));
            $this->db->where("id",$membership_id);
            $this->db->update("membership_names",$membership);
        } else if ($action == "Add User") {
            $users = array("user_id"=>$this->input->post("new_membership_user"),"membership_id"=>$membership_id);
            $this->db->insert("membership_users",$users);
        } else if ($action == "Paypal Buy Button") {
        
        }
    }

    function membership_remove_user($membership_id,$userlink_id) {
	// If current user has membership management rights or owns this membership then allow deletion
        $user_id = $this->flexi_auth->get_user_id();
	$owner_id = $this->db->get_where("membership_names",array("id"=>$membership_id))->row_array()[0]['owner_id'];
	if (($user_id == $owner_id)||($this->flexi_auth->is_privileged('Manage Memberships'))) {
		$this->db->where("id",$userlink_id);
		$this->db->delete("membership_users");
	}
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
        $this->db->insert("membership_credits",$membership);
    }

    function add_new_membership() {
	// Validate data from form
	$action = $this->input->post('action');
        $membership = $this->input->post('membership');
	    //************************ ADD CHECKING HERE ********************************************//
	    // Convert blanks to nulls
	    if ($membership['notes']=="") {unset($membership['notes']);}
	    if ($membership['onwer_id']=="") {
	        $this->data['message'] = "<p class='error_msg'>You must select a user!</p>";
		return;
	    }
	    if ($membership['purchased']=="") {
	        $this->data['message'] = "<p class='error_msg'>You must set a purchase date!</p>";
		return;
	    }
	    if ($membership['price_paid']=="") {
	        $this->data['message'] = "<p class='error_msg'>You must set a price paid!</p>";
		return;
	    }
	    // Insert data into database
	    if ($this->db->insert("memberships",$membership)) {
		$this->data['message'] = "<p class='status_msg'>Membership Added</p>";
                return $this->db->insert_id;
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
