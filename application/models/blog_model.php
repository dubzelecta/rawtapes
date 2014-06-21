<?php

class blog_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllPosts() {
        $this->db->select();
        $this->db->where('enabled','yes');
        $query = $this->db->get('blog_post');
        $result = $query->result_array();
        if(!empty($result)){
            return $result;
        }
        return false;
    }

}
