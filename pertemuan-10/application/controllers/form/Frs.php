<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Frs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);

        $this->load->model('M_frs', 'frs');

        $this->load->model('M_mhs', 'mhs');
        $this->load->model('M_matkul', 'matkul');

        $this->table = 'frs';

    }
    public function index()
    {
        $data['frs'] = $this->frs->getall();
        $data['mhs'] = $this->mhs->getall();
        $data['matkul'] = $this->matkul->getall();
        $this->load->view('form/v_displayfrs', $data);
    }

    public function display()
    {
        $data['frs'] = $this->frs->getall();
        $this->load->view('form/datainModal', $data);
    }
    public function addfrs()
    {
        if ($this->input->method() === 'post') {

            $datafrs = [

                //'id' => uniqid('', true), // genearate id unik
                'npm' => $this->input->post('npm'),
                'kode_mk' => $this->input->post('kode_mk'),
                'status' => $this->input->post('status')
            ];
            $frs_saved = $this->frs->insert($datafrs);
            if ($frs_saved) {
                redirect('form/frs');
            }
        }
    }
    function edit($id)
    {
        //console.log($id);
        $where = array('id' => $id);
        $data = $this->frs->ubah_data($where);
        if ($data) {
            echo json_encode(array("status" => true, 'data' => $data));
        } else {
            echo json_encode(array("status" => false));
        }
    }
    public function update()
    {
        $id_frs = $this->input->post('id_frs');
        $kode_mk = $this->input->post('kode_mk_edit');
        $npm = $this->input->post('npm_edit');
        $status = $this->input->post('status_edit');
        $data = array(
            'npm' => $npm,
            'kode_mk' => $kode_mk,
            'status' => $status
        );
        $where = array('id' => $id_frs);
        $test = $this->frs->update_data($where, $data, $this->table);
        redirect('form/frs/index');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $delete = $this->matkul->hapus_data($where, $this->table);
        if ($delete) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }
    function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->frs->get_name($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label' => $row->npm,
                        'nama_mahasiswa' => strtoupper($row->nama)
                    );
                echo json_encode($result_array);
            }
        }
    }
    function get_automatkul()
    {
        if (isset($_GET['term'])) {
            $result = $this->frs->get_matkul($_GET['term']);
            //var_dump($result);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label' => $row->kode_mk,
                        'nama_matkul' => strtoupper($row->matkul)
                    );
                echo json_encode($result_array);
            }
        }
    }//end function
}//end controller