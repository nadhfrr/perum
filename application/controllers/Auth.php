<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|valid_username');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

        // jika usernya ada
        if ($admin) {
            // jika usernya aktif
            if ($admin['is_active'] == 1) {
                // cek password
                if (password_verify($password, $admin['password'])) {
                    $data = [
                        'username' => $admin['username'],
                        'user_level' => $admin['user_level']
                    ];
                    $this->session->set_userdata($data);
                    if ($admin['user_level'] == 1) {
                        redirect('utama');
                    } else {
                        redirect('utama');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Username has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_level');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
