<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengguna_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pengguna"] = $this->pengguna_model->getAll();
        $this->load->view("pengguna/list", $data);
    }

    public function add()
    {
        $pengguna = $this->pengguna_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rules());

        if ($validation->run()) {
            $pengguna->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pengguna/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pengguna');

        $pengguna = $this->pengguna_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rules());

        if ($validation->run()) {
            $pengguna->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pengguna"] = $pengguna->getById($id);
        if (!$data["pengguna"]) show_404();

        $this->load->view("pengguna/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->pengguna_model->delete($id)) {
            redirect(site_url('pengguna'));
        }
    }
}
