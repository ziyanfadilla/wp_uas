<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pembeli extends CI_Controller{
    public function __construct(){

        parent ::__construct();
        $this->load->model('Model_pembeli');
    }

    public function index(){

        // $data['pembeli'] = $this->Model_pembeli->getAllPembeli()->result(); 
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navbar');
        $this->load->view('admin/v_pembeli');
        $this->load->view('template_admin/footer');
    }

    public function getAllPembeli(){
        $this->load->model('Model_pembeli', 'mp');
        $data['pembeli']=$this->Model_pembeli->getAllPembeli();

        echo json_encode([
            'message' => 'succes',
            'status'  => true,
            'results' => $data

            ]);
    }

    public function tambah_aksi(){
        $chek_id            = $this->input->post('id_pembeli');
        $nama               = $this->input->post('nama');
        $alamat             = $this->input->post('alamat');
        $nama_masker        = $this->input->post('nama_masker');
        $jumlah_barang      = $this->input->post('jumlah_barang');
        $tanggal_pembelian  = $this->input->post('tanggal_pembelian');
        $total_harga        = $this->input->post('total_harga');
        $email              = $this->input->post('email');

        if($chek_id == ''){
            if($this->form_validation->run()){
                $this->tambah_aksi();
            }else{
                if($email != NULL){

                }
            }
            $data = array(
        
                'nama'                  =>  $nama,
                'alamat'                => $alamat,
                'nama_masker'           => $nama_masker,
                'jumlah_barang'         => $jumlah_barang,
                'tanggal_pembelian'     => $tanggal_pembelian,
                'total_harga'           => $total_harga,
                'email'                 => $email

            );
            $this->Model_pembeli->tambah_pembeli($data, 'pembeli');
            $this->session->set_flashdata('pesan',
            '<script>
                swal({
                    icon: "success",
                    title : "Data Masker Tersimpan",
                    type : "success",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>'
            );
        }else{
            
            $id = array('id' => $chek_id);
            $data = array(
                'nama'              => $nama,
                'alamat'            => $alamat,
                'nama_masker'       => $nama_masker,
                'jumlah_barang'     => $jumlah_barang,
                'tanggal_pemebelian'  => $tanggal_pembelian,
                'total_harga'       => $total_harga,
                'email'             => $email

            );

            $this->Model_pembeli->update_data($id, $data, 'pembeli');
            $this->session->set_flashdata('pesan',
                '<script>
                    swal({
                        icon: "success",
                        title : "Data Masker Terubah",
                        type : "success",
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>'
            );
        }
        redirect('admin/Data_pembeli');
    }
    public function getDataEdit($id){
        $where = array('id_pembeli' => $id);
        $data['pembeli'] = $this->Model_pembeli->edit_pembeli($where, 'pembeli')->result();
        // var_dump($data);
        // die();
        echo json_encode([
            'message' => 'success',
            'status' => true,
            'results' => $data
        ]);
    }
    public function hapus($id){
        $where = array('id_pembeli' => $id);
        $this->Model_pembeli->hapus_pembeli($where, 'pembeli');
        $this->session->set_flashdata('pesan',
                '<script>
                swal({
                    icon: "success",
                    title : "Data Masker Terhapus",
                    type : "success",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>'
            );
            redirect('admin/Data_pembeli/index');
        }
        
    }


?>