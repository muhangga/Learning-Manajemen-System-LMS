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

   public function data_administrator() {
      $data = [ 
         "dashboard" => "Dashboard",
         "title" => "Data Administrator",
         "data_master" => "Data Master"
      ];
      
      $this->load->view('component/header', $data);
      $this->load->view('component/sidebar');
      $this->load->view('admin/data-master/data-administrator');
      $this->load->view('component/footer');
   }

}