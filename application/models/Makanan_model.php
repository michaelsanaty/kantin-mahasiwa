<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->order_by('id', 'DESC')->get('makanan')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('makanan', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('makanan', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('makanan', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('makanan', ['id' => $id]);
    }
}
