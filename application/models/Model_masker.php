<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 class Model_masker extends CI_Model{

    public function getAllMasker(){
        $query = ("SELECT * FROM masker");
        $data = $this->db->query($query)->result_array();
       return $data;
    }
    
    public function tambah_masker($data, $table){
        $this->db->insert($table, $data);

    }
    public function edit_masker($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_masker($where,$table){
        $this->db->where($where);
        $this->db->delete($table);

    }
} 
?>