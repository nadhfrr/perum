<?php defined('BASEPATH') or exit('No direct script access allowed');

class Proyek_model extends CI_Model
{
    private $_table = "proyek";

    public $kd_proyek;
    public $nama_proyek;
    public $type;
    public $pemilik_proyek;
    public $keterangan_lain;

    public function rules()
    {
        return [
            [
                'field' => 'kd_proyek',
                'label' => 'kd_proyek',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_proyek',
                'label' => 'nama_proyek',
                'rules' => 'required'
            ],

            [
                'field' => 'type',
                'label' => 'type',
                'rules' => 'required'
            ],

            [
                'field' => 'pemilik_proyek',
                'label' => 'pemilik_proyek',
                'rules' => 'required'
            ],

            [
                'field' => 'keterangan_lain',
                'label' => 'keterangan_lain',
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
        return $this->db->get_where($this->_table, ["kd_proyek" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_proyek = $post["kd_proyek"];
        $this->nama_proyek = $post["nama_proyek"];
        $this->type = $post["type"];
        $this->pemilik_proyek = $post["pemilik_proyek"];
        $this->keterangan_lain = $post["keterangan_lain"];
        $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_proyek = $post["kd_proyek"];
        $this->nama_proyek = $post["nama_proyek"];
        $this->type = $post["type"];
        $this->pemilik_proyek = $post["pemilik_proyek"];
        $this->keterangan_lain = $post["keterangan_lain"];

        $this->db->update($this->_table, $this, array('kd_proyek' => $post['kd_proyek']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kd_proyek" => $id));
    }
    public function getpekerjaan1($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan2($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan3($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan4($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan5($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan6($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan7($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan8($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan9($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan10($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan11($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan12($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan13($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan14($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaan15($id_rab)
    {
        $query = $this->db->query("
       select p.*, jp.nama_rab
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal1($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal2($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal3($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal4($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal5($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal6($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal7($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal8($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal9($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal10($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal11($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal12($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal13($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotal14($id_rab)
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        where p.id_rab = '$id_rab'
        ");
        return $query;
    }
    public function getpekerjaantotalall()
    {
        $query = $this->db->query("
       select sum(p.volume * p.harga_satuan) as total
        from pekerjaan p 
        left join jenis_pekerjaan jp on p.id_rab=jp.id_rab
        
        ");
        return $query;
    }


    public function groupbyidrab()
    {
        $query = $this->db->query("
       SELECT id_rab FROM `pekerjaan` WHERE id_rab GROUP BY id_rab; 
        ");
        return $query;
    }
}
