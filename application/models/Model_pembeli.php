<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pembeli extends CI_Model{

    public function getAllPembeli(){
        $query = ("SELECT * FROM pembeli");
        $data = $this->db->query($query)->result_array();
        return $data;
    }

    public function tambah_pembeli($data, $table){
        $this->db->insert($table, $data);
    }

    public function  edit_pembeli($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_pembeli($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_pembeli($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>
 