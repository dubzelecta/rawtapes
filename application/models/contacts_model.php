<?php

class contacts_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getContacts() {
        $query = $this->db->get('contacts');
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

}
