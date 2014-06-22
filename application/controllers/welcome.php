<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public $events;
    public $latest_mixtape;
    public $random_artist;
    public $artist_links;

    function __construct() {
        parent::__construct();
        /* Standard Libraries */
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('ion_auth');
        /* ------------------ */
        $this->load->library('grocery_CRUD');

        $this->load->model('artists_model');
        $this->artist_links = $this->artists_model->getArtistLinks();
    }

    function _example_output($output = null) {
        $this->load->view('example.php', $output);
    }

    function artists() {
        if ($this->ion_auth->logged_in()) {
            $crud = new grocery_CRUD();
            $crud->set_table('artists');
            $crud->set_field_upload('header_text_url', 'assets/artists_header_text');
            $crud->set_field_upload('profile_pic_url', 'assets/artists_pic');
            $crud->set_field_upload('random_artist_pic', 'assets/random_artists_pic');
            $output = $crud->render();
            $this->_example_output($output);
        } else {
            redirect('/');
        }
    }

    function posts() {

        if ($this->ion_auth->logged_in()) {
            $crud = new grocery_CRUD();
            $crud->set_table('blog_post');
            $crud->columns('post_title', 'post_pic');
            $crud->set_field_upload('post_pic', 'assets/post_pics');
            $output = $crud->render();
            $this->_example_output($output);
        } else {
            redirect('/');
        }
    }

    function releases() {
        if ($this->ion_auth->logged_in()) {
            $crud = new grocery_CRUD();
            $crud->set_table('releases');
            $crud->columns('release_title');
            $crud->set_relation('artist_id', 'artists', 'name');
            $crud->set_field_upload('art_url', 'assets/release_art');
            $output = $crud->render();
            $this->_example_output($output);
        } else {
            redirect('/');
        }
    }

    function release() {
        $this->load->model('releases_model');
        $release_id = end($this->uri->segment_array());
        if (!is_numeric($release_id)) {
            redirect("/");
        }
        $release = $this->releases_model->getRelease($release_id);
        $this->template->load('catalog', 'release', array('data' => $release, 'catalog_class' => 'catalog'));
    }

    public function index() {
        $this->load->model('blog_model');
        $this->load->model('events_model');
        $this->load->model('mixtape_model');
        $this->load->model('artists_model');
        $this->latest_mixtape = $this->mixtape_model->getLatestMixtape();
        $this->events = $this->events_model->getEvents();
        $this->random_artist = $this->artists_model->getRandomArtist();
        $blog_posts = $this->blog_model->getAllPosts();
        $this->template->load('main', 'blog', array('data' => $blog_posts));
    }

    function catalog() {
        $this->load->model('releases_model');
        $releases = $this->releases_model->getAllReleases();
        $this->template->load('catalog', 'catalog', array('data' => $releases, 'catalog_class' => 'catalog-inside'));
    }

    function artist() {
        $this->load->model('artists_model');
        $artist_id = end($this->uri->segment_array());
        if (!is_numeric($artist_id)) {
            redirect('/');
        }
        $artist = $this->artists_model->getArtist($artist_id);
        $artistReleases = $this->artists_model->getReleasesByArtistId($artist_id);
        $this->template->load('catalog', 'artist', array('data' => $artist, 'artist_releases' => $artistReleases, 'catalog_class' => 'artists'));
    }

    function contact() {
        $this->load->model('contacts_model');
        $this->load->model('events_model');
        $this->load->model('mixtape_model');
        $contacts = $this->contacts_model->getContacts();
        $this->events = $this->events_model->getEvents();
        $this->latest_mixtape = $this->mixtape_model->getLatestMixtape();
        $this->template->load('main', 'contact', array('contacts' => $contacts, 'catalog_class' => 'contact'));
    }

    function contacts() {

        if ($this->ion_auth->logged_in()) {
            $crud = new grocery_CRUD();
            $crud->set_table('contacts');
            $output = $crud->render();
            $this->_example_output($output);
        } else {
            redirect('/');
        }
    }

    function events() {

        if ($this->ion_auth->logged_in()) {
            $crud = new grocery_CRUD();
            $crud->set_table('events');
            $output = $crud->render();
            $this->_example_output($output);
        } else {
            redirect('/');
        }
    }

    function mixtape() {


        if ($this->ion_auth->logged_in()) {
            $crud = new grocery_CRUD();
            $crud->set_table('mixtapes');
            $crud->fields('mixtape_title', 'mixtape_description', 'mixtape_embed_link');
            $crud->columns('mixtape_title', 'mixtape_description', 'time_added');
            $output = $crud->render();
            $this->_example_output($output);
        } else {
            redirect('/');
        }
    }

    function admin() {
        if ($this->ion_auth->logged_in()) {
            $this->load->view('example.php', array());
        } else {
            redirect('/');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */