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
        $this->load->library('session');
        $data['matkul'] = $this->matkul->getall();
        $this->load->view('form/v_matkul', $data);
        //$this->load->view('form/v_mhs');
    }

    public function savematkul()
    {
        if ($this->input->method() === 'post') {
            $rules = $this->matkul->rulesmatkul();

            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() != FALSE) {

                $datamatkul = [

                    'kode_mk' => $this->input->post('kode_mk'),
                    'nama_mk' => $this->input->post('nama_mk'),
                    'sks' => $this->input->post('sks'),
                    'semester' => $this->input->post('semester'),
                ];
                $matkul_saved = $this->matkul->insert($datamatkul);
                if ($matkul_saved) {
                    $this->session->set_flashdata('msg', 'Data berhasil disimpan');
                    $this->session->set_flashdata('msg_class', 'alert-success');
                    redirect('form/matkul/index');
                }
            } else {
                //echo "semua harus diisi";
                $this->session->set_flashdata('msg', 'Semua harus diisi!');

                $this->session->set_flashdata('msg_class', 'alert-warning');

            }
            return redirect('form/matkul/index');
        }//end if post
    }//end if function

    public function update()
    {
        $kode_mk = $this->input->post('kode_mk');
        $nama_mk = $this->input->post('nama_mk');
        $sks = $this->input->post('sks');
        $semester = $this->input->post('semester');
        $data = array(
            'nama_mk' => $nama_mk,
            'sks' => $sks,
            'semester' => $semester
        );
        $where = array('kode_mk' => $kode_mk);
        $this->matkul->update_data($where, $data, $this->table);

        $this->session->set_flashdata('msg', 'Data berhasil diupdate');
        $this->session->set_flashdata('msg_class', 'alert-success');
        redirect('form/matkul/index');
    }

    public function edit($id)
    {
        $where = array('kode_mk' => $id);
        $data['user'] = $this->matkul->edit_data($where, $this->table)->result();
        $this->load->view('form/v_editmatkul', $data);
    }

    public function hapus($id)
    {
        $where = array('kode_mk' => $id);
        $this->matkul->hapus_data($where, $this->table);
        redirect('form/matkul/index');
    }

}