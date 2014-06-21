<?php

class mixtape_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getLatestMixtape() {
        $query = $this->db->select('mixtape_embed_link');
                $this->db->order_by("time_added", "desc");
        $query = $this->db->get('mixtapes');
 
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0]['mixtape_embed_link'];
        }
        return false;
    }

}
