<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

   public function insert_data_mahasiswa($data) {
      $query = $this->db->insert('tbl_user', $data);
      if($query) {
         return true;
      } else {
         return false;
      }
   }

   public function tambah_admin($data) {
      $query = $this->db->insert('tbl_admin', $data);
      if($query) {
         return true;
      } else {
         return false;
      }
   }

}