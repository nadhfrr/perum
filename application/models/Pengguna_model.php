<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $noreg_user;
    public $password;
    public $vw_password;
    public $nama;
    public $jabatan;
    public $level;

    public function rules()
    {
        return [
            [
                'field' => 'id',
                'label' => 'id',
                'rules' => 'required'
            ],

            [
                'field' => 'noreg_user',
                'label' => 'noreg_user',
                'rules' => 'required'
            ],

            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'
            ],

            [
                'field' => 'image',
                'label' => 'image',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],

            [
                'field' => 'role_id',
                'label' => 'role_id',
                'rules' => 'required'
            ],

            [
                'field' => 'is_active',
                'label' => 'is_active',
                'rules' => 'required'
            ],

            [
                'field' => 'date_created',
                'label' => 'date_created',
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

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->noreg_user = $post["noreg_user"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->vw_password = $post["vw_password"];
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        $this->level = $post["level"];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function hapus_data($where, $_table)
    {
        $this->db->where($where);
        $this->db->delete($_table);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
