<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model {

  public function login($email, $password) {

    $data = array(
     'email' => $email,
     'password' => md5($password)
    );
    $this->db->where($data);
    $login = $this->db->get('users');
    if (count($login->result_array()) > 0) {
      return ['status' => true, 'data' => $login->row()];
    } else {
      return ['status' => false, 'data' => []];
    }
  }

  public function isUserExisting($email) {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email', $email);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
