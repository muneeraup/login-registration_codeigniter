<?php
defined('BASEPATH') or exit('No direct script access allowed');


class LoginController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function login()
   {

      ($_SESSION['login'] == true) ? die(redirect('dashboard')) : '';

      //Validation for login form
      $this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

      if ($this->form_validation->run()) {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('Login_model');
        $validate = $this->Login_model->login($email, $password);
        if ($validate['status']) {
          $this->session->set_userdata('id ', $validate['data']->id);
          $this->session->set_userdata('email', $validate['data']->email);
          $this->session->set_userdata('login', true);
          return redirect('dashboard');
        } else {
          $this->session->set_userdata('error', 'sorry invalid password / username ');
          return redirect($_SERVER['HTTP_REFERER']);
        }
      } else {

        return $this->load->view('admin/login');
      }
  
    }
    public function logout(){
      session_destroy();
      return redirect('login');
    }
  }

