<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detailpekerjaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("detailpekerjaan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Detail Daftar Pekerjaan';
        $data["detailpekerjaan"] = $this->detailpekerjaan_model->getAll();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['detailpekerjaan'] = $this->db->get('pekerjaan')->result_array();

        $this->form_validation->set_rules('detailpekerjaan', 'Detailpekerjaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('detailpekerjaan/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user', ['detailpekerjaan' => $this->input->post('detailpekerjaan')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('detailpekerjaan');
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

    public function edit($id_pekerjaan = null)
    {
        if (!isset($id_pekerjaan)) redirect('detailpekerjaan');

        $data['title'] = 'Edit Daftar Rincian Detailpekerjaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id_$id_pekerjaan' => $id_pekerjaan);
        $data['detailpekerjaan'] = $this->detailpekerjaan_model->edit_data($where, 'pekerjaan')->result_array();

        $detailpekerjaan = $this->detailpekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($detailpekerjaan->rules());

        if ($validation->run() == false) {
        } else {
            $detailpekerjaan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('detailpekerjaan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('detailpekerjaan/edit_form', $data);
        $this->load->view('templates/footer');

        $data["detailpekerjaan"] = $detailpekerjaan->getById($id_pekerjaan);
        if (!$data["detailpekerjaan"]) show_404();
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
