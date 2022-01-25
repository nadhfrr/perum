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
        $data["detailrab"] = $this->detailrab_model->getAll();
        $this->load->view("detailrab/list", $data);
    }

    public function add()
    {
        $proyek = $this->detailrab_model;
        $validation = $this->form_validation;
        $validation->set_rules($detailrab->rules());

        if ($validation->run()) {
            $detailrab->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("detailrab/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('detailrab');

        $detailrab = $this->detailrab_model;
        $validation = $this->form_validation;
        $validation->set_rules($detailrab->rules());

        if ($validation->run()) {
            $detailrab->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["detailrab"] = $detailrab->getById($id);
        if (!$data["detailrab"]) show_404();

        $this->load->view("detailrab/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->detailrab_model->delete($id)) {
            redirect(site_url('detailrab'));
        }
    }
}
