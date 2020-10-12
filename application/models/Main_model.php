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

   public function hapus_mahasiswa($id_user) {
      $this->db->where('id_user', $id_user);
      $this->db->delete('tbl_user');
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

   public function get_user() {
      $query = $this->db->get('tbl_user');
      return $query;
   }

   public function hapus_admin($id_admin) {
      $this->db->where('id_admin', $id_admin);
      $this->db->delete('tbl_admin');
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

   public function hapus_matkul($id_matkul) {
      $this->db->where('id_matkul', $id_matkul);
      $this->db->delete('tbl_matkul');
   }

   public function edit_admin($id_admin) {
      $this->db->where('id_admin', $id_admin);
      $query = $this->db->update('tbl_admin');
      if($query) {
         return true;
      } else {
         return false;
      }
   }

   public function edit_mahasiswa($id_user) {
      $query = $this->db->query("SELECT * FROM tbl_user WHERE id_user = $id_user");
      return $query;
   }
}