<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {


   public function login_user() {
      $data['title'] = "Login";

      $this->load->view('component/component_biasa/header', $data);
      $this->load->view('login');
      $this->load->view('component/component_biasa/footer');
   }

   public function register() 
   {
      // if ($this->session->userdata('email')) {
      //    redirect('login_user'); // belum dibikin
      // }

      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
         'is_unique' => 'Email ini sudah terdaftar!'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
         'matches' => 'Password tidak samma!',
         'min_length' => 'Password terlalu pendek!'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      if ($this->form_validation->run() == FALSE) {
         $data['title'] = "Register";
         $this->load->view('component/component_biasa/header', $data);
         $this->load->view('register');
         $this->load->view('component/component_biasa/footer');
      }

   }

}