<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Matkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->model('M_matkul', 'matkul');
        $this->table = 'matkul';
    }

    public function index()
    {
        $data['matkul'] = $this->matkul->getall();
        $this->load->view('form/v_displaymatkul', $data);
    }

    public function display()
    {
        $data['matkul'] = $this->matkul->getall();
        $this->load->view('form/v_displaymatkul', $data);
    }

    public function addMatkul()
    {
        if ($this->input->method() === 'post') {
            $datamatkul = [
                'kode_mk' => $this->input->post('kode_mk'),
                'nama_mk' => $this->input->post('nama_mk'),
                'sks' => $this->input->post('sks'),
                'semester' => $this->input->post('semester')
            ];
            $matkul_saved = $this->matkul->insert($datamatkul);
            if ($matkul_saved) {
                redirect('form/matkul/display');
            }
        }
    }

    public function delete($id)
    {
        $where = array('kode_mk' => $id);
        $delete = $this->matkul->hapus_data($where, $this->table);
        if ($delete) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }

    public function edit($id)
    {
        $where = array('kode_mk' => $id);
        $data = $this->matkul->edit_data($where, $this->table);
        if ($data) {
            echo json_encode(array("status" => true, 'data' => $data));
        } else {
            echo json_encode(array("status" => false));
        }
    }

    public function update()
    {
        $kode_mk = $this->input->post('hdnMatkulId');
        $nama_mk = $this->input->post('nama_mk');
        $sks = $this->input->post('sks');
        $semester = $this->input->post('semester');
        $data = array(
            'nama_mk' => $nama_mk,
            'sks' => $sks,
            'semester' => $semester  
        );
        $where = array('kode_mk' => $kode_mk);
        $test = $this->matkul->update_data($where, $data, $this->table);
        redirect('form/matkul/display');
    }
}
