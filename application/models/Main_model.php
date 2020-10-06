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

   public function get_admin() {
      $query = $this->db->get('tbl_admin');
      return $query;
   }

   public function get_mahasiswa() {
      $query = $this->db->get('tbl_user');
      return $query;
   }

   public function get_matkul() {
      $query = $this->db->get('tbl_matkul');
      return $query;
   }

   public function tambah_matkul($data) {
      $query = $this->db->insert('tbl_matkul', $data);
      if($query) {
         return true;
      } else {
         return false;
      }
   }

   // public function count_admin() {
   //    $query = $this->db->get('tbl_admin');
   //    return $query->num_rows();
   // }

}