<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UserRegistrationController extends CI_Controller {
  public function __construct() {
    parent:: __construct();
    ($_SESSION['login'] == true) ? die(redirect('dashboard')) : '';
  }

  public function register() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['password'] = md5($_POST['password']);
  
        //Check if email exist
        $this->load->model('Login_model');
        $result = $this->Login_model->isUserExisting($data['email']);
       
        if ($result) {
          $this->session->set_userdata('error', 'sorry this email has been registered');
          return redirect($_SERVER['HTTP_REFERER']);
        } else {
          //Insert data into database with session
          $insert = $this->db->insert('users', $data);
          if ($insert) {
            $this->session->set_userdata('id ', $insert['data']->id);
            $this->session->set_userdata('name', $insert['data']->name);
            $this->session->set_userdata('login', true);
            return redirect('dashboard');
          } else {
            $this->session->set_userdata('error', 'sorry some thing went wrong please contact server admin ');
            return redirect($_SERVER['HTTP_REFERER']);
          }
        }
  
      }
      $this->load->view('admin/user-registration');
    }

    
  }