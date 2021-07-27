<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    private $_table = "admin";

    public $id_pengguna;
    public $username;
    public $password;
    public $vw_password;
    public $nama;
    public $jabatan;
    public $level;

    public function rules()
    {
        return [
            [
                'field' => 'id_pengguna',
                'label' => 'id_pengguna',
                'rules' => 'required'
            ],

            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],

            [
                'field' => 'vw_password',
                'label' => 'vw_password',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

            [
                'field' => 'jabatan',
                'label' => 'jabatan',
                'rules' => 'required'
            ],

            [
                'field' => 'level',
                'label' => 'level',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pengguna = $post["id_pengguna"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->vw_password = $post["vw_password"];
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        $this->level = $post["level"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pengguna = $post["id_pengguna"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->vw_password = $post["vw_password"];
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        $this->level = $post["level"];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
