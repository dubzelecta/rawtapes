<?php

class releases_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllReleases() {
        $this->db->select();
        $this->db->select(
                array('release_title as post_title',
                    'art_url as post_pic',
                    'description as text',
                    'release_date as post_date'
                )
        );
//        $this->db->join("releases", "desc");
        $this->db->order_by("release_date", "desc");
        $query = $this->db->get('releases');
        $result = $query->result_array();
        if (!empty($result)) {
            foreach ($result as $key => $value) {
                $artistName = $this->artists_model->getArtistName($value['artist_id']);
                $result[$key]['artist_name'] = $artistName['name'];
            }
            return $result;
        }
        return false;
    }

    function getRelease($release_id) {
        $this->db->select('*');
        $this->db->from('releases');
        $this->db->join('artists', 'artists.artist_id = releases.artist_id');
        $this->db->where('releases.release_id', $release_id);
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0];
        }
        return false;
    }

    function getReleaseIdByUrl($url) {
        $this->db->select('release_id');
        $this->db->from('releases');

        $this->db->where('url', $url);
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {
            return $result[0]['release_id'];
        }
        return false;
    }

    function getOtherArtists($release_id, $artist_id) {
        $this->db->select('releases.artist_id as original_artist , artisttorelease.artist_id as otherartistid');
        $this->db->from('artisttorelease');
        $this->db->join('releases', 'releases.release_id = artisttorelease.release_id');
        $this->db->where('artisttorelease.release_id', $release_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $result = $this->formatReleaseArtists($result);
        if (!empty($result)) {
            return $result;
        }
        return false;
    }

    function formatReleaseArtists($mixedArtistArray) {
        $this->load->model('artists_model');
        foreach ($mixedArtistArray as $key => $value) {
            if (isset($value['otherartistid'])) {
                $otherArtists[] = $this->artists_model->getArtistName($value['otherartistid']);
            }
        }
        if (!empty($otherArtists)) {
            return $otherArtists;
        }
        return FALSE;
    }

}
