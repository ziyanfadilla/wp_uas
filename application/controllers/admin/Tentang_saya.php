<?php 

class Tentang_saya extends CI_Controller{
    public function index(){

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navbar');
        $this->load->view('admin/tentang_saya');
        $this->load->view('template_admin/footer');
    }
}

?>