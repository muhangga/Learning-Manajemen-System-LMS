<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

   public function index() {
      $this->load->view('index');
      $this->load->view('component/component_biasa/footer');
   }
}