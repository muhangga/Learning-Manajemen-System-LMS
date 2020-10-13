<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->model('Main_model');

      if ($this->session->userdata('email') != TRUE) {
         redirect('auth/login_user');
      }
   }

   public function index() {
      $data['title'] = "Dashboard User";
      $data['user']  = $this->db->get_where('tbl_user', ["email" => $this->session->userdata('email')])->row_array();
      
      $this->load->view('component/header', $data);
      $this->load->view('component/sidebar', $data);
      $this->load->view('user/dashboard', $data);
      $this->load->view('component/footer');
    }

    public function edit_user($id_user) {
      $data = [ 
         "title" => "Dashboard",
         "edit" => "Edit Mahasiswa",
         "user" => $this->db->get_where("tbl_user", ['email' => $this->session->userdata('email')])->row_array(),
         "get_user" => $this->Main_model->get_user($id_user)->result()
      ];
      
      $this->load->view('component/header', $data);
      $this->load->view('component/sidebar', $data);
      $this->load->view('user/ubah-password', $data);
      $this->load->view('component/footer');
   }

   public function update_user() {
      $this->form_validation->set_rules('nama', 'Input Nama Lengkap', 'required');
      $this->form_validation->set_rules('npm', 'NPM', 'required|trim|is_unique[tbl_user.npm]', [
         'is_unique' => 'NPM ini sudah terdaftar!'
      ]);

      if ($this->form_validation->run() == FALSE) {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diedit!</div>');
         redirect('dashboard');  
      } else {

         $nama = $this->input->post('nama');
         $npm = $this->input->post('npm');
         $email = $this->input->post('email');

         // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './vendor/image/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['tbl_user']['gambar'];
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
            $this->db->set('npm', $npm);
            $this->db->where('email', $email);
            $this->db->update('tbl_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile anda telah di update!</div>');
            redirect('dashboard');
      }
   } 

    
}