<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan_model extends CI_Model
{
    // Ambil semua data makanan, bisa ditambahkan filter jenis jika diperlukan
    public function get_all($jenis = null)
    {
        if ($jenis) {
            $this->db->where('jenis_makanan', $jenis);
        }

        return $this->db->order_by('id', 'DESC')->get('makanan')->result();
    }

    // Ambil makanan berdasarkan kategori, bisa juga filter jenis
    public function get_by_kategori($kategori, $jenis = null)
    {
        $this->db->where('kategori', $kategori);
        if ($jenis) {
            $this->db->where('jenis_makanan', $jenis);
        }

        return $this->db->order_by('id', 'DESC')->get('makanan')->result();
    }

    // Insert data makanan
    public function insert($data)
    {
        return $this->db->insert('makanan', $data);
    }

    // Ambil data makanan berdasarkan ID
    public function get_by_id($id)
    {
        return $this->db->get_where('makanan', ['id' => $id])->row();
    }

    // Update data makanan berdasarkan ID
    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('makanan', $data);
    }

    // Hapus data makanan berdasarkan ID
    public function delete($id)
    {
        return $this->db->delete('makanan', ['id' => $id]);
    }

    // Ambil daftar kategori unik (untuk dropdown filter)
    public function get_kategori()
    {
        return $this->db->distinct()->select('kategori')->get('makanan')->result();
    }

    // ✅ Tambahan: Ambil daftar jenis makanan unik (untuk dropdown filter)
    public function get_jenis_makanan()
    {
        return $this->db->distinct()->select('jenis_makanan')->get('makanan')->result();
    }
}
