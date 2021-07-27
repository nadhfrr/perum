<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bahan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["bahan"] = $this->bahan_model->getAll();
        $this->load->view("bahan/list", $data);
    }

    public function add()
    {
        $bahan = $this->bahan_model;
        $validation = $this->form_validation;
        $validation->set_rules($bahan->rules());

        if ($validation->run()) {
            $bahan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("bahan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('bahan');

        $bahan = $this->bahan_model;
        $validation = $this->form_validation;
        $validation->set_rules($bahan->rules());

        if ($validation->run()) {
            $bahan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["bahan"] = $bahan->getById($id);
        if (!$data["bahan"]) show_404();

        $this->load->view("bahan/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->bahan_model->delete($id)) {
            redirect(site_url('bahan'));
        }
    }
}
