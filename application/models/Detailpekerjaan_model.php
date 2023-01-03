<?php defined('BASEPATH') or exit('No direct script access allowed');

class Detailpekerjaan_model extends CI_Model
{
    private $_table = "pekerjaan";

    public $id_pekerjaan;
    public $id_rab;
    public $nama_pekerjaan;
    public $volume;
    public $satuan;
    public $harga_satuan;
    public $jumlah_harga;

    public function rules()
    {
        return [
            [
                'field' => 'volume',
                'label' => 'volume',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pekerjaan" => $id])->row();
    }

    public function pekerjaanjoin($id)
    {
        $this->db->select('*');
        $this->db->from('pekerjaan');
        $this->db->join('jenis_pekerjaan', 'jenis_pekerjaan.id_rab = pekerjaan.id_rab', 'left');
        $this->db->where('jenis_pekerjaan.id_rab', $id);
        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pekerjaan = $post["id_pekerjaan"];
        $this->nama_pekerjaan = $post["nama_pekerjaan"];

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
        $this->volume = $post["volume"];
        $this->jumlah_harga = $post["jumlah_harga"];

        $this->db->update($this->_table, $this, array('id_pekerjaan' => $post['id_pekerjaan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pekerjaan" => $id));
    }
}
