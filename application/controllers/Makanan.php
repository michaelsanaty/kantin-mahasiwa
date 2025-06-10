<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Makanan_model');
    }

    public function index() {
        $data['makanan'] = $this->Makanan_model->get_all();
        $this->load->view('makanan/index', $data);
    }

    // metode lain: create, store, edit, update, delete
}
