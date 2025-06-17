<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Makanan_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['session', 'upload']);
    }

    // ✅ Halaman daftar makanan
    public function index()
    {
        $data['title'] = 'Daftar Makanan';
        $data['makanan'] = $this->Makanan_model->get_all();

        $this->load->view('layout/header', $data);
        $this->load->view('makanan/index', $data);
        $this->load->view('layout/footer');
    }

    // ✅ Form tambah makanan
    public function create()
    {
        $data['title'] = 'Tambah Makanan';

        $this->load->view('layout/header', $data);
        $this->load->view('makanan/tambah');
        $this->load->view('layout/footer');
    }

    // ✅ Proses simpan makanan baru
    public function store()
    {
        $nama       = $this->input->post('nama_makanan');
        $deskripsi  = $this->input->post('deskripsi');
        $harga      = $this->input->post('harga');
        $gambar     = '';

        // ✅ Upload Gambar
        if ($_FILES['gambar']['name']) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;
            $config['file_name']     = time() . '_' . $_FILES['gambar']['name'];

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('makanan/create');
                return;
            }

            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'nama_makanan' => $nama,
            'deskripsi'    => $deskripsi,
            'harga'        => $harga,
            'gambar'       => $gambar
        ];

        $this->Makanan_model->insert($data);
        $this->session->set_flashdata('success', 'Data makanan berhasil ditambahkan!');
        redirect('makanan');
    }

    // ✅ Form edit
    public function edit($id)
    {
        $makanan = $this->Makanan_model->get_by_id($id);

        if (!$makanan) {
            show_404(); // tampilkan 404 jika data tidak ditemukan
        }

        $data['title'] = 'Edit Makanan';
        $data['makanan'] = $makanan;

        $this->load->view('layout/header', $data);
        $this->load->view('makanan/edit', $data);
        $this->load->view('layout/footer');
    }

    // ✅ Proses update data
    public function update($id)
    {
        $nama       = $this->input->post('nama_makanan');
        $deskripsi  = $this->input->post('deskripsi');
        $harga      = $this->input->post('harga');
        $gambar     = $this->input->post('gambar_lama');

        if ($_FILES['gambar']['name']) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;
            $config['file_name']     = time() . '_' . $_FILES['gambar']['name'];

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('makanan/edit/' . $id);
                return;
            }

            // Hapus gambar lama jika ada
            if ($gambar && file_exists('./uploads/' . $gambar)) {
                unlink('./uploads/' . $gambar);
            }

            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'nama_makanan' => $nama,
            'deskripsi'    => $deskripsi,
            'harga'        => $harga,
            'gambar'       => $gambar
        ];

        $this->Makanan_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data makanan berhasil diperbarui!');
        redirect('makanan');
    }

    // ✅ Hapus data
    public function delete($id)
    {
        $makanan = $this->Makanan_model->get_by_id($id);

        if ($makanan && $makanan->gambar && file_exists('./uploads/' . $makanan->gambar)) {
            unlink('./uploads/' . $makanan->gambar);
        }

        $this->Makanan_model->delete($id);
        $this->session->set_flashdata('success', 'Data makanan berhasil dihapus!');
        redirect('makanan');
    }

    // ✅ Placeholder untuk fitur Order
    public function order($id)
    {
        $this->session->set_flashdata('success', 'Fitur Order masih dalam pengembangan.');
        redirect('makanan');
    }
}
