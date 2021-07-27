<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Upah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("upah_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["upah"] = $this->upah_model->getAll();
        $this->load->view("upah/list", $data);
    }

    public function add()
    {
        $upah = $this->upah_model;
        $validation = $this->form_validation;
        $validation->set_rules($upah->rules());

        if ($validation->run()) {
            $upah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("upah/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('upah');

        $upah = $this->upah_model;
        $validation = $this->form_validation;
        $validation->set_rules($upah->rules());

        if ($validation->run()) {
            $upah->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["upah"] = $upah->getById($id);
        if (!$data["upah"]) show_404();

        $this->load->view("upah/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->upah_model->delete($id)) {
            redirect(site_url('upah'));
        }
    }
}
