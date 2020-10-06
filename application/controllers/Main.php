<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->model('Main_model');
 
      if ($this->session->userdata('email') != TRUE) {
         redirect('auth/login_admin');
      } 
   }

   public function index(){
      $data['title'] = "Dashboard Admin";
      $data['admin'] =  $this->db->get_where("tbl_admin", ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('admin/component/header', $data);
      $this->load->view('admin/component/sidebar', $data);
      $this->load->view('admin/dashboard/dashboard', $data);
      $this->load->view('admin/component/footer');
   }

   public function data_administrator() {
      $data = [ 
         "dashboard" => "Dashboard",
         "title" => "Data Administrator",
         "data_master" => "Data Master",
         "admin" => $this->db->get_where("tbl_admin", ['email' => $this->session->userdata('email')])->row_array(),
         "get_admin" => $this->Main_model->get_admin()->result_array()
      ];
      
      $this->load->view('admin/component/header', $data);
      $this->load->view('admin/component/sidebar', $data);
      $this->load->view('admin/data-master/data-administrator', $data);
      $this->load->view('admin/component/footer');
   }

   public function hapus_admin($id_admin) {
      $this->Main_model->hapus_admin($id_admin);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin berhasil dihapus!</div>');
		redirect('administrator');
   }

   public function data_mahasiswa() {
      $data = [ 
         "dashboard" => "Dashboard",
         "data_master" => "Data Master",
         "title" => "Data Mahasiswa",
         "admin" => $this->db->get_where("tbl_admin", ['email' => $this->session->userdata('email')])->row_array(),
         "get_mahasiswa" => $this->Main_model->get_mahasiswa()->result_array()
      ];
      
      $this->load->view('admin/component/header', $data);
      $this->load->view('admin/component/sidebar', $data);
      $this->load->view('admin/data-master/data-mahasiswa', $data);
      $this->load->view('admin/component/footer');
   }

    public function hapus_mahasiswa($id_user) {
      $this->Main_model->hapus_mahasiswa($id_user);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
		redirect('data_mahasiswa');
   }

    public function data_matkul() {
      $data = [ 
         "dashboard" => "Dashboard",
         "data_master" => "Data Master",
         "title" => "Data Matkul",
         "admin" => $this->db->get_where("tbl_admin", ['email' => $this->session->userdata('email')])->row_array(),
         "get_matkul" => $this->Main_model->get_matkul()->result_array()
      ];
      
      $this->load->view('admin/component/header', $data);
      $this->load->view('admin/component/sidebar', $data);
      $this->load->view('admin/data-master/data-matkul', $data);
      $this->load->view('admin/component/footer');
   }

   public function save_matkul() {

      $this->form_validation->set_rules('Inputmatkul', 'Mata Kuliah', 'required|is_unique[tbl_matkul.matkul]',[
         "is_unique" => "Matakuliah sudah terdaftar!"
      ]);
      $this->form_validation->set_rules('inputsemester', 'semester', 'required');
      
      if ($this->form_validation->run() == TRUE) {
         $data = [
            'semester'=> $this->input->post('inputsemester', true),
            'matkul'  => $this->input->post('Inputmatkul', true),
            'type_semester'=> $this->input->post('type', true),
            'status'   => 1
         ];

        $success = $this->Main_model->tambah_matkul($data);
        if ($success) {
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
         redirect('data_matkul');
        }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan, pastikan Matakuliah belum terdaftar!</div>');
         redirect('data_matkul');     
      }
   }

   public function hapus_matkul($id_matkul) {
      $this->Main_model->hapus_matkul($id_matkul);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Matakuliah berhasil dihapus</div>');
		redirect('data_matkul');
   }
}