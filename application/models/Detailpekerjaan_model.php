<?php defined('BASEPATH') or exit('No direct script access allowed');

class Detailpekerjaan_model extends CI_Model
{
    private $_table = "pekerjaan";

    public $id_pekerjaan;
    public $nama_pekerjaan;

    // public function rules()
    // {
    //     return [
    //         [
    //             'field' => 'id_rab',
    //             'label' => 'id_rab',
    //             'rules' => 'required'
    //         ],

    //         [
    //             'field' => 'nama_rab',
    //             'label' => 'nama_rab',
    //             'rules' => 'required'
    //         ],
    //     ];
    // }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pekerjaan" => $id])->row();
        $detailpekerjaan = "( ( ( id >= '1') AND (id <= '5') ) )";
        $this->db->where($detailpekerjaan);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_rab = $post["id_rab"];
        $this->nama_rab = $post["nama_rab"];

        $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pekerjaan = $post["id_pekerjaan"];
        $this->nama_pekerjaan = $post["nama_pekerjaan"];

        $this->db->update($this->_table, $this, array('id_pekerjaan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_rab" => $id));
    }
}
