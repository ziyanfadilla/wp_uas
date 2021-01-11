<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_masker extends CI_Controller{
    public function __construct(){

        parent::__construct();            
        $this->load->model('Model_masker');
        
    }

    public function index(){ 
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navbar');
        $this->load->view('admin/tambah_masker');
        $this->load->view('template_admin/footer');
    }

    public function getAllData(){
        $this->load->model('Model_masker', 'mk');
        $data['masker'] = $this->Model_masker ->getAllMasker();

        echo json_encode([
            'message' => 'success',
            'status' => true,
            'results' => $data
        ]);
    }

    public function tambah_aksi(){
        $check_id = $this->input->post('id_masker');
        $nama_masker        = $this->input->post('nama_masker');
        $jenis_kulit        = $this->input->post('jenis_kulit');
        $kategori           = $this->input->post('kategori');
        $bahan_pembuatan    = $this->input->post('bahan_pembuatan');
        $stok_barang        = $this->input->post('stok_barang');
        $harga              = $this->input->post('harga');
        $gambar             = $this->input->post('gambar');

        if($check_id == ''){
            if($this->form_validation->run()){

                // echo $this->input->post('nama_masker');
                $this->tambah_aksi();
    
            }else {
                
                if ($harga != NULL) {
                    $gambar             = $_FILES['gambar']['name'];
                    $config['upload_path']='.upload' ;
                    $config ['allowed_types'] = 'jpg|jpeg|png|tiff';
    
                    $this->load->library('upload', $config);
                    
                    if(!$this->upload){
                        echo "Gambar gagal diupload!";
                    }else{
                        $gambar=$this->upload->data('file_name');
                    }
                }
    
                $data = array(
                    'nama_masker' => $nama_masker,
                    'jenis_kulit' => $jenis_kulit,
                    'kategori'    => $kategori,
                    'bahan_pembuatan' => $bahan_pembuatan,
                    'stok_barang' => $stok_barang,
                    'harga' => $harga,
                    'gambar'=> $gambar
    
                );
                $this->Model_masker->tambah_masker($data,'masker');
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
            }
        }else{
            $id = array('id' => $check_id);
            $data = array(
                'nama_masker' => $nama_masker,
                'jenis_kulit' => $jenis_kulit,
                'kategori'    => $kategori,
                'bahan_pembuatan' => $bahan_pembuatan,
                'stok_barang' => $stok_barang,
                'harga' => $harga,
                'gambar'=> $harga

            );

            $this->Model_masker->update_data($id, $data,'masker');
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
        redirect('admin/Data_masker');
    }

    public function getDataEdit($id){
        $where = array('id' => $id);
        $data['masker'] = $this->Model_masker->edit_masker($where, 'masker')
        ->result();

        echo json_encode([
            'message' => 'success',
            'status' => true,
            'results' => $data
        ]);
    }

    public function hapus($id){
        $where = array('id'=> $id);
        $this->Model_masker->hapus_masker($where, 'masker');
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
        redirect('admin/data_masker/index');
    }
    
}