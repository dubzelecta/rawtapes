<?php

class events_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvents() {
        $query = $this->db->get('events');
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

    

}
