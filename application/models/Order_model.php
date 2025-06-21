<?php
class Order_model extends CI_Model {

    public function insert($data) {
        $this->db->insert('orders', $data);
        return $this->db->insert_id();
    }

    public function get_by_id($id) {
        return $this->db->get_where('orders', ['id' => $id])->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('orders', $data);
    }
}
