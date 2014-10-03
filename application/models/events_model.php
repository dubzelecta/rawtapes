<?php

class events_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvents() {
        $this->db->select();
        $this->db->from('events');
        $this->db->where('event_date >',date("Y-m-d h:i:s"));
        $this->db->order_by("event_date", "asc");
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

    

}
