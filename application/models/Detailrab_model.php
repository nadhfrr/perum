<?php defined('BASEPATH') or exit('No direct script access allowed');

class Detailrab_model extends CI_Model
{
    private $_table = "rab";

    public $id_rab;
    public $nama_rab;

    public function rules()
    {
        return [
            [
                'field' => 'id_rab',
                'label' => 'id_rab',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_rab',
                'label' => 'nama_rab',
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
        return $this->db->get_where($this->_table, ["id_rab" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_rab = $post["id_rab"];
        $this->nama_rab = $post["nama_rab"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_rab = $post["id_rab"];
        $this->nama_rab = $post["nama_rab"];

        $this->db->update($this->_table, $this, array('id_rab' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_rab" => $id));
    }
}
