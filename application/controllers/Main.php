<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

   public function index(){
      $data['title'] = "Dashboard Admin";

      $this->load->view('component/header', $data);
      $this->load->view('component/sidebar');
      $this->load->view('admin/dashboard/dashboard');
      $this->load->view('component/footer');
   }

}