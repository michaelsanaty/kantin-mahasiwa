<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Makanan_model', 'Order_model']);
        $this->load->helper(['url', 'form']);
        $this->load->library(['session', 'upload']);
    }

    public function index()
    {
        $jenis = $this->input->get('jenis');
        $data['title'] = 'Daftar Makanan';
        $data['makanan'] = $this->Makanan_model->get_all($jenis);
        $data['kategori'] = $this->Makanan_model->get_kategori();
        $data['jenis_makanan'] = $this->Makanan_model->get_jenis_makanan();
        $data['selected_jenis'] = $jenis;

        $this->load->view('layout/header', $data);
        $this->load->view('makanan/index', $data);
        $this->load->view('layout/footer');
    }

    public function filter_by_kategori($kategori)
    {
        $jenis = $this->input->get('jenis');
        $data['title'] = 'Daftar Makanan - ' . ucfirst($kategori);
        $data['makanan'] = $this->Makanan_model->get_by_kategori($kategori, $jenis);
        $data['kategori'] = $this->Makanan_model->get_kategori();
        $data['jenis_makanan'] = $this->Makanan_model->get_jenis_makanan();
        $data['selected_jenis'] = $jenis;

        $this->load->view('layout/header', $data);
        $this->load->view('makanan/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['title'] = 'Tambah Makanan';
        $data['kategori'] = $this->Makanan_model->get_kategori();
        $data['jenis_makanan'] = ['Makanan Berat', 'Makanan Ringan', 'Minuman'];

        $this->load->view('layout/header', $data);
        $this->load->view('makanan/tambah', $data);
        $this->load->view('layout/footer');
    }

    public function store()
    {
        $nama       = $this->input->post('nama_makanan');
        $deskripsi  = $this->input->post('deskripsi');
        $harga      = $this->input->post('harga');
        $kategori   = $this->input->post('kategori');
        $jenis_makanan = $this->input->post('jenis_makanan');
        $gambar     = '';

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
            'nama_makanan'   => $nama,
            'deskripsi'      => $deskripsi,
            'harga'          => $harga,
            'kategori'       => $kategori,
            'jenis_makanan'  => $jenis_makanan,
            'gambar'         => $gambar
        ];

        $this->Makanan_model->insert($data);
        $this->session->set_flashdata('success', 'Data makanan berhasil ditambahkan!');
        redirect('makanan');
    }

    public function edit($id)
    {
        $makanan = $this->Makanan_model->get_by_id($id);
        if (!$makanan) show_404();

        $data['title'] = 'Edit Makanan';
        $data['makanan'] = $makanan;
        $data['kategori'] = $this->Makanan_model->get_kategori();
        $data['jenis_makanan'] = ['Makanan Berat', 'Makanan Ringan', 'Minuman'];

        $this->load->view('layout/header', $data);
        $this->load->view('makanan/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update($id)
    {
        $nama       = $this->input->post('nama_makanan');
        $deskripsi  = $this->input->post('deskripsi');
        $harga      = $this->input->post('harga');
        $kategori   = $this->input->post('kategori');
        $jenis_makanan = $this->input->post('jenis_makanan');
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

            if ($gambar && file_exists('./uploads/' . $gambar)) {
                unlink('./uploads/' . $gambar);
            }

            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'nama_makanan'   => $nama,
            'deskripsi'      => $deskripsi,
            'harga'          => $harga,
            'kategori'       => $kategori,
            'jenis_makanan'  => $jenis_makanan,
            'gambar'         => $gambar
        ];

        $this->Makanan_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data makanan berhasil diperbarui!');
        redirect('makanan');
    }

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

    public function order($id)
    {
        $makanan = $this->Makanan_model->get_by_id($id);
        if (!$makanan) show_404();

        $data['title'] = 'Form Order';
        $data['makanan'] = $makanan;

        $this->load->view('layout/header', $data);
        $this->load->view('order/form', $data);
        $this->load->view('layout/footer');
    }

    public function proses_order()
    {
        $makanan_id     = $this->input->post('makanan_id');
        $nama_pemesan   = $this->input->post('nama_pemesan');
        $jumlah         = $this->input->post('jumlah');
        $catatan        = $this->input->post('catatan');
        $harga          = $this->input->post('harga');
        $total          = $jumlah * $harga;

        $data = [
            'makanan_id'    => $makanan_id,
            'nama_pemesan'  => $nama_pemesan,
            'jumlah'        => $jumlah,
            'catatan'       => $catatan,
            'total'         => $total
        ];

        $order_id = $this->Order_model->insert($data);
        redirect('makanan/pembayaran/' . $order_id);
    }

    public function pembayaran($id)
    {
        $order = $this->Order_model->get_by_id($id);
        $makanan = $this->Makanan_model->get_by_id($order->makanan_id);
        $order->nama_makanan = $makanan->nama_makanan;

        $data['title'] = 'Pembayaran';
        $data['order'] = $order;

        $this->load->view('layout/header', $data);
        $this->load->view('order/pembayaran', $data);
        $this->load->view('layout/footer');
    }

    public function selesai_pembayaran()
    {
        $order_id = $this->input->post('order_id');
        $metode   = $this->input->post('metode');

        $this->Order_model->update($order_id, ['metode_pembayaran' => $metode]);
        redirect('makanan/selesai/' . $order_id);
    }

    public function selesai($id)
    {
        $order = $this->Order_model->get_by_id($id);
        $makanan = $this->Makanan_model->get_by_id($order->makanan_id);
        $order->nama_makanan = $makanan->nama_makanan;

        $data['title'] = 'Transaksi Berhasil';
        $data['order'] = $order;

        $this->load->view('layout/header', $data);
        $this->load->view('order/selesai', $data);
        $this->load->view('layout/footer');
    }
}