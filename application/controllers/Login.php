<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }

  function index()
  {
    $this->load->view('auth/login');
  }

  function auth()
  {
    $username = $this->input->post('username', TRUE);
    $password = md5($this->input->post('password', TRUE));
    $validate = $this->login_model->validate($username, $password);
    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $username  = $data['username'];
      $nama = $data['nama'];
      $level = $data['user_level'];
      $sesdata = array(
        'username'  => $username,
        'nama'     => $nama,
        'level'     => $level,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sesdata);
      // access login for admin
      if ($level === '1') {
        redirect('akses');

        // access login for staff
      } elseif ($level === '2') {
        redirect('akses/komisaris');

        // access login for keuangan
      } elseif ($level === '3') {
        redirect('akses/direktur');

        // access login for pembina
      } elseif ($level === '4') {
        redirect('akses/keuangan');

        // access login for author
      } else {
        redirect('akses/manajpro');
      }
    } else {
      echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
      redirect('login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
