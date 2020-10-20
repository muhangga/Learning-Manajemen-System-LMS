<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

   public function __construct() 
   {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Main_model');
   }

   // Halaman user

   public function index() {
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
         $data['title'] = "Login Mahasiswa";
   
         $this->load->view('component/component_biasa/header', $data);
         $this->load->view('login');
         $this->load->view('component/component_biasa/footer');
      } else {
         $this->auth_login_user();
      }
   }


   public function auth_login_user() {
      $email    = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

      if ($user) {
         if ($user['status'] == 1) {
            if (password_verify($password, $user['password'])) {
               $data = [
                  'id_user'  => $user['id_user'],
                  'email'  => $user['email'],
                  'akses'  => $user['akses']
               ];
               $this->session->set_userdata($data);
               redirect('user');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
               redirect('auth');
            }
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
         redirect('auth');
      }
   }

   public function register() 
   {

      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('npm', 'NPM', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
         'is_unique' => 'Email ini sudah terdaftar!'
      ]);
      $this->form_validation->set_rules('npm', 'NPM', 'required|trim|is_unique[tbl_user.npm]', [
         'is_unique' => 'NPM ini sudah terdaftar!'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
         'matches' => 'Password tidak sama!',
         'min_length' => 'Password terlalu pendek!'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      if ($this->form_validation->run() == FALSE) {
         $data['title'] = "Register";
         $this->load->view('component/component_biasa/header', $data);
         $this->load->view('register');
         $this->load->view('component/component_biasa/footer');
      } else {
         $email = $this->input->post('email', true);
         $data = [
            "email"           => htmlspecialchars($email),
            "nama"            => htmlspecialchars($this->input->post('nama', true)),
            "npm"             => htmlspecialchars($this->input->post('npm', true)),
            "gambar"          => 'user.png',
            "password"        => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            "tanggal_dibuat"  => time(),
            "akses"           => 2,
            "status"          => "1"
         ];

         $success = $this->Main_model->insert_data_mahasiswa($data);
         if ($success) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda telah dibuat, silahkan login!</div>');
            redirect('auth');
         } else {
            $this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">Akun gagal ditambahkan!</div>');
            redirect('register');
         }
      }
   }


   // Halaman Admin
   public function login_admin() 
   {
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
         $data['title'] = "Login Admin";
   
         $this->load->view('component/component_biasa/header', $data);
         $this->load->view('admin/login');
         $this->load->view('component/component_biasa/footer');
      } else {
         $this->auth_login();
      }
   }

   public function auth_login() {
      $email    = $this->input->post('email');
      $password = $this->input->post('password');

      $admin = $this->db->get_where('tbl_admin', ['email' => $email])->row_array();

      if ($admin) {
         if ($admin['status'] == 1) {
            if (password_verify($password, $admin['password'])) {
               $data = [
                  'email'  => $admin['email'],
                  'akses'  => $admin['akses']
               ];
               $this->session->set_userdata($data);
               redirect('dashboard_administrator');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
               redirect('auth/login_admin');
            }
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
         redirect('auth/login_admin');
      }
   }
   

   public function register_admin()
   {

      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_admin.email]', [
         'is_unique' => 'Email ini sudah terdaftar!'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
         'matches' => 'Password tidak sama!',
         'min_length' => 'Password terlalu pendek!'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      if ($this->form_validation->run() == FALSE) {
         $data['title'] = "Register Administrator";

         $this->load->view('component/component_biasa/header', $data);
         $this->load->view('admin/register');
         $this->load->view('component/component_biasa/footer');
      } else {
         $email = $this->input->post('email', true);
         $data = [
            "email"           => htmlspecialchars($email),
            "nama"            => htmlspecialchars($this->input->post('nama', true)),
            "gambar"          => 'user.png',
            "password"        => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            "tanggal_dibuat"  => time(),
            "akses"           => 1,
            "status"          => 1
         ];

         $this->db->insert('tbl_admin', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda telah dibuat, silahkan login!</div>');
         redirect('auth/login_admin');
      }

   }
   public function logout() {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('akses');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah Logout!</div>');
      redirect('auth');
   }

   public function logout_admin() {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('akses');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah Logout!</div>');
      redirect('auth/login_admin');
   }
}
   