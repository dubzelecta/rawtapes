<?php

class artists_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllArtists() {
        $query = $this->db->get('artists');
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

    function getArtist($artist_id) {
        $this->db->select('*');
        $this->db->from('artists');
        $this->db->where('artist_id', $artist_id);
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0];
        }
        return false;
    }

    function getReleasesByArtistId($artist_id) {
        $this->db->select('bandcamp_link');
        $this->db->from('releases');
        $this->db->where('artist_id', $artist_id);
        $this->db->order_by("release_date", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

    function getRandomArtist() {
        $this->db->order_by('artist_id', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('artists');
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0];
        }
        return false;
    }
    
    function getArtistLinks(){
        $this->db->select(array('header_text_url','url'));
        $this->db->order_by("name", "desc");
        $query = $this->db->get('artists');
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return false;
    }
    
    function getArtistIdByUrl($url){
        $this->db->select('artist_id');
        $this->db->from('artists');
        $this->db->where('url', $url);
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0]['artist_id'];
        }
        return false;
        
    }

}
