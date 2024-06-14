<?php
class M_matkul extends CI_Model
{
    private $_table = "matkul";
    public function getall()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        return $this->db->get()->result();
    }

    public function insert($matkul)
    {
        if (!$matkul) {
            return;
        }
        return $this->db->insert($this->_table, $matkul);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function rulesmatkul(){
return
[
[
'field' => 'kode_mk',
'label' => 'kode_mk',
'rules' => 'required'
],
[
'field' => 'nama_mk',
'label' => 'nama_mk',
'rules' => 'required'
],
[
'field' => 'sks',
'label' => 'sks',
'rules' => 'required'
],
[
'field' => 'semester',
'label' => 'semester',
'rules' => 'required'
],
];

}//end

}