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

    
}