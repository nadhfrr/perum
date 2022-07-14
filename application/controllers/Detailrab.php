<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detailrab extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("detailrab_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Detail Daftar Proyek';
        $data["detailrab"] = $this->detailrab_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['detailrab'] = $this->db->get('jenis_pekerjaan')->result_array();

        $this->form_validation->set_rules('detailrab', 'Detailrab', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('detailrab/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user', ['detailrab' => $this->input->post('detailrab')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('detailrab');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $detailrab = $this->detailrab_model;
        $validation = $this->form_validation;
        $validation->set_rules($detailrab->rules());

        if ($validation->run() == false) {
        } else {
            $detailrab->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('detailrab/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id_rab = null)
    {
        if (!isset($id_rab)) redirect('detailrab');

        $data['title'] = 'Edit Daftar Rincian Detailrab';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id_rab' => $id_rab);
        $data['detailrab'] = $this->detailrab_model->edit_data($where, 'jenis_pekerjaan')->result_array();

        $detailrab = $this->detailrab_model;
        $validation = $this->form_validation;
        $validation->set_rules($detailrab->rules());

        if ($validation->run() == false) {
        } else {
            $detailrab->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('detailrab');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('detailrab/edit_form', $data);
        $this->load->view('templates/footer');

        $data["detailrab"] = $detailrab->getById($id_rab);
        if (!$data["detailrab"]) show_404();
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->detailrab_model->delete($id)) {
            redirect(site_url('detailrab'));
        }
    }

    public function getsubpek($idrab)
    {
        $datax = $this->detailrab_model->getSubPekByIdRab($idrab);
        echo json_encode($datax);
    }
}
