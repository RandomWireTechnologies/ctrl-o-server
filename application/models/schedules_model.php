<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedules_model extends CI_Model {
	
    // The following method prevents an error occurring when $this->data is modified.
    // Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
    public function &__get($key)
    {
        $CI =& get_instance();
        return $CI->$key;
    }
    
    ###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
    // Schedules
    ###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
    
    /**
     * get_schedules
     * Gets a list of schedules
     */
    function get_schedules() {
        // Select schedule data to be displayed.
        $query = $this->db->get("schedules");
        return $query->result_array();
    }
    
    function get_days_of_week() {
        // Returns a list of days of week for dropdown
        return array('null'=>"Any",1=>"Sunday",2=>"Monday",3=>"Tuesday",4=>"Wednesday",5=>"Thursday",6=>"Friday",7=>"Saturday");
    }
    
    function get_schedule($schedule_id) {
        // Select schedule data to be displayed.
        $this->db->where("id",$schedule_id);
        $query = $this->db->get("schedules");
        return $query->row_array();
    }
    
    function get_schedule_times($schedule_id) {
        // Select schedule data to be displayed.
        $this->db->where("schedule_id",$schedule_id);
        $query = $this->db->get("schedule_times");
        return $query->result_array();
    }
    
    function update_schedule_times() {
        $schedule_time = $this->input->post('schedule_time');
        if ($schedule_time) {
            $this->db->where('id',$schedule_time['id']);
            $this->db->update('schedule_times',$schedule_time);
        }
    }
    
    function add_schedule() {
        // Validate data from form
        $schedule = $this->input->post('schedule');
        //************************ ADD CHECKING HERE ********************************************//
        // Insert data into database
        if ($this->db->insert("schedules",$schedule)) {
            $this->data['message'] = "<p class='status_msg'>Schedule Added</p>";
    	} else {
            $this->data['message'] = "<p class='error_msg'>Failed to add...</p>";
    	}
    }
    
    function delete_schedule() {
        // Validate data from form
        $schedule = $this->input->post('schedule');
        //************************ ADD CHECKING HERE ********************************************//
        // Delete data
        $this->db->where('id',$schedule['id']);
        $this->db->delete("schedules");
        $this->db->where('schedule_id',$schedule['id']);
        $this->db->delete("schedule_times");
    }
    
    function add_schedule_times() {
        // Validate data from form
        $schedule_time = $this->input->post('schedule_time');
        //************************ ADD CHECKING HERE ********************************************//
        // Insert data into database
        if ($this->db->insert("schedule_times",$schedule_time)) {
            $this->data['message'] = "<p class='status_msg'>Schedule Added</p>";
        } else {
            $this->data['message'] = "<p class='error_msg'>Failed to add...</p>";
        }
    }
    
    function delete_schedule_times() {
        // Validate data from form
        $schedule_time = $this->input->post('schedule_time');
        //************************ ADD CHECKING HERE ********************************************//
        $this->db->where("id", $schedule_time['id']);
        $this->db->delete("schedule_times");
    }
}

/* End of file schedules_model.php */
/* Location: ./application/models/schedules_model.php */
