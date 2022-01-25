<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("proyek_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["proyek"] = $this->proyek_model->getAll();
        $this->load->view("proyek/list", $data);
    }

    public function details()
    {
        $data["proyek"] = $this->proyek_model->getAll();
        $this->load->view("proyek/detail", $data);
    }

    public function add()
    {
        $proyek = $this->proyek_model;
        $validation = $this->form_validation;
        $validation->set_rules($proyek->rules());

        if ($validation->run()) {
            $proyek->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("proyek/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('proyek');

        $proyek = $this->proyek_model;
        $validation = $this->form_validation;
        $validation->set_rules($proyek->rules());

        if ($validation->run()) {
            $proyek->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["proyek"] = $proyek->getById($id);
        if (!$data["proyek"]) show_404();

        $this->load->view("proyek/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->proyek_model->delete($id)) {
            redirect(site_url('proyek'));
        }
    }
}
