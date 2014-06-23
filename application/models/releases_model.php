<?php

class releases_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllReleases() {
        $this->db->select();
        $this->db->order_by("release_date", "desc");
        $query = $this->db->get('releases');

        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

    function getRelease($release_id) {
        $this->db->select('*');
        $this->db->from('releases');
        $this->db->join('artists', 'artists.artist_id = releases.artist_id');
        $this->db->where('releases.release_id',$release_id);
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0];
        }
        return false;
    }
    
    function getReleaseIdByUrl($url){
        $this->db->select('release_id');
        $this->db->from('releases');
        
        $this->db->where('url',$url);
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0]['release_id'];
        }
        return false;
    }

}
