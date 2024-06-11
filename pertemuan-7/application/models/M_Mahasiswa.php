<?php

class M_mahasiswa extends CI_Model
{
    public function displayAll($tableMhs)
    {
        return $this->db->get($tableMhs);
    }
    public function getOne($tableMhs, $where)
    {
        return $this->db->get_where($tableMhs, $where);
    }
    public function rulesMahasiswa()
    {

        return [
            [
                'field' => 'npm',
                'label' => 'email',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'jurusan',
                'label' => 'jurusan',
                'rules' => 'required'
            ],
            [
                'field' => 'telp',
                'label' => 'telp',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],
        ];

    }
}