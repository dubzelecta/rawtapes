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

    function getArtistName($artist_id) {
        $this->db->select(array('name','url'));
        $this->db->from('artists');
        $this->db->where('artist_id', $artist_id);
        $query = $this->db->get();
        $result = $query->result_array();
//        var_dump($result);
//        die;
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

    function getOtherArtistReleases($artist_id) {
        $this->db->select();
        $this->db->from('artisttorelease');
        $this->db->where('artist_id', $artist_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $result = $this->reFormatOtherArtistReleases($result);
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

    function getBandCampLinkByReleaseId($releaseId){
        $this->db->select('bandcamp_link');
        $this->db->from('releases');
        $this->db->where('release_id',$releaseId);
        $query = $this->db->get();
        $result = $query->result_array();
        if(!empty($result)){
            return $result[0]['bandcamp_link'];    
        }
        return false;
    }
    
    function reFormatOtherArtistReleases($releasesArray) {
        if (isset($releasesArray) && !empty($releasesArray)) {
            foreach ($releasesArray as $key => $value) {
                $bandcamp_urls[] = $this->getBandCampLinkByReleaseId($value['release_id']);
            }
            return $bandcamp_urls;
        }
        return $releasesArray;
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

    function getArtistLinks() {
        $this->db->select(array('header_text_url','header_hover_text','url'));
        $this->db->where('showinartists',"Yes");
        $this->db->order_by("name", "desc");
        $query = $this->db->get('artists');
        $result = $query->result_array();
        if (!empty($result)) {
            return $result;
        }
        return array();
    }

    function getArtistIdByUrl($url) {
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
