<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

   // public function index() {
   //    $this->load->view('index');
   // }

   public function login_user() {
      $this->load->view('component/header');
      $this->load->view('login');
      $this->load->view('component/footer');
   }

}