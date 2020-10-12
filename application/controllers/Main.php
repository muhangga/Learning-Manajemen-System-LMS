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
      $this->load->view('admin/data-master/data-admin/data-administrator', $data);
      $this->load->view('admin/component/footer');
   }

   public function edit_admin($id_admin) {
      $data = [ 
         "dashboard" => "Dashboard",
         "title" => "Data Administrator",
         "data_master" => "Data Master",
         "edit" => "Edit Administrator",
         "admin" => $this->db->get_where("tbl_admin", ['email' => $this->session->userdata('email')])->row_array(),
         "get_admin" => $this->Main_model->get_admin($id_admin)->result()
      ];
      
      $this->load->view('admin/component/header', $data);
      $this->load->view('admin/component/sidebar', $data);
      $this->load->view('admin/data-master/data-admin/edit_admin', $data);
      $this->load->view('admin/component/footer');
   }

   public function update_admin() {
      $this->form_validation->set_rules('nama', 'Input Nama Lengkap', 'required');

      if ($this->form_validation->run() == FALSE) {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diedit!</div>');
         redirect('administrator');  
      } else {

         $nama = $this->input->post('nama');
         $email = $this->input->post('email');

         // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './vendor/image/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['tbl_admin']['gambar'];
                    if ($old_image != 'user.png') {
                        unlink(FCPATH . './vendor/image/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('tbl_admin');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile anda telah di update!</div>');
            redirect('administrator');
      }
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
      $this->load->view('admin/data-master/data-mahasiswa/data-mahasiswa', $data);
      $this->load->view('admin/component/footer');
   }

    public function hapus_mahasiswa($id_user) {
      $this->Main_model->hapus_mahasiswa($id_user);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
		redirect('data_mahasiswa');
   }

   public function edit_mahasiswa($id_user) {

      $data = [ 
         "dashboard" => "Dashboard",
         "data_master" => "Data Master",
         "title" => "Data Mahasiswa",
         "edit" => "Edit Mahasiswa",
         "admin" => $this->db->get_where("tbl_admin", ['email' => $this->session->userdata('email')])->row_array(),
         "mahasiswa" => $this->db->get_where("tbl_user", ['id_user' => $id_user])->row_array(),
      ];
      $this->load->view('admin/component/header', $data);
      $this->load->view('admin/component/sidebar', $data);
      $this->load->view('admin/data-master/data-mahasiswa/edit_mahasiswa', $data);
      $this->load->view('admin/component/footer');
   }

   public function update_mahasiswa() {
       $this->form_validation->set_rules('nama', 'Input Nama Lengkap', 'required');
       
         if ($this->form_validation->run() == FALSE ) { 
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Mahasiswa gagal diedit!</div>');
            redirect('data_mahasiswa');  
         } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $status = $this->input->post('status');

            $data = [
               "nama"   => $nama,
               "email"  => $email,
               "status" => $status
            ];

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('tbl_user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mahasiswa berhasil di update!</div>');
            redirect('data_mahasiswa');
       }
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
      $this->load->view('admin/data-master/data-matkul/data-matkul', $data);
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

    public function edit_matkul($id_matkul) {

      $data = [ 
         "dashboard" => "Dashboard",
         "data_master" => "Data Master",
         "title" => "Data Mahasiswa",
         "edit" => "Edit Matakuliah",
         "admin" => $this->db->get_where("tbl_admin", ['email' => $this->session->userdata('email')])->row_array(),
         "data" => $this->db->get_where("tbl_matkul", ['id_matkul' => $id_matkul])->row_array(),
      ];
      $this->load->view('admin/component/header', $data);
      $this->load->view('admin/component/sidebar', $data);
      $this->load->view('admin/data-master/data-matkul/edit_matkul', $data);
      $this->load->view('admin/component/footer');
   }

   public function update_matkul() {
       $this->form_validation->set_rules('matkul', 'Input Mata kuliah', 'required');
       $this->form_validation->set_rules('semester', 'Input Semester', 'required');
       $this->form_validation->set_rules('status', 'Input Status', 'required');
       
         if ($this->form_validation->run() == FALSE ) { 
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Mahasiswa gagal diedit!</div>');
            redirect('data_matkul');  
         } else {

            $id_matkul = $this->input->post('id_matkul');
            $matkul = $this->input->post('matkul');
            $semester = $this->input->post('semester');
            $type = $this->input->post('type_semester');
            $status = $this->input->post('status');

            $data = [
               "id_matkul" => $id_matkul,
               "matkul"   => $matkul,
               "semester"  => $semester,
               "type_semester" => $type,
               "status" => $status
            ];

            $this->db->set('matkul', $matkul);
            $this->db->where('id_matkul', $id_matkul);
            $this->db->update('tbl_matkul', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mata kuliah berhasil di update!</div>');
            redirect('data_matkul');
       }
   }
   
}