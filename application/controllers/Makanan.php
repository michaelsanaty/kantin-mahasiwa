<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Makanan_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $data['makanan'] = $this->Makanan_model->get_all();
        $this->load->view('makanan/index', $data);
    }

    public function create()
    {
        $this->load->view('makanan/create');
    }

    public function store()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
        ];

        $this->Makanan_model->insert($data);
        $this->session->set_flashdata('success', 'Data makanan berhasil ditambahkan!');
        redirect('makanan');
    }

    public function edit($id)
    {
        $data['makanan'] = $this->Makanan_model->get_by_id($id);
        $this->load->view('makanan/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
        ];

        $this->Makanan_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data makanan berhasil diperbarui!');
        redirect('makanan');
    }

    public function delete($id)
    {
        $this->Makanan_model->delete($id);
        $this->session->set_flashdata('success', 'Data makanan berhasil dihapus!');
        redirect('makanan');
    }
}
