<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Khs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load base_url
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {

        $this->load->view('forms/khs');

    }

    public function save()
{
    $data['npm'] = $this->input->post('npm');
    $data['nama'] = $this->input->post('nama');
    $data['jurusan'] = $this->input->post('jurusan');
    $data['jenisKelamin'] = $this->input->post('jenisKelamin');
    $data['nilaiUTS'] = $this->input->post('nilaiUTS');
    $data['nilaiUAS'] = $this->input->post('nilaiUAS');
    $data['nilaiTugas'] = $this->input->post('nilaiTugas');
    $data['nilaiKehadiran'] = $this->input->post('nilaiKehadiran');
    
    // Perhitungan rata-rata nilai
    $totalNilai = ($data['nilaiUTS'] + $data['nilaiUAS'] + $data['nilaiTugas'] + $data['nilaiKehadiran']) / 4;
    
    // Klasifikasi grade nilai
    if ($totalNilai >= 86 && $totalNilai <= 100) {
        $grade = 'A';
    } elseif ($totalNilai >= 81 && $totalNilai <= 85) {
        $grade = 'A-';
    } elseif ($totalNilai >= 76 && $totalNilai <= 80) {
        $grade = 'B+';
    } elseif ($totalNilai >= 71 && $totalNilai <= 75) {
        $grade = 'B';
    } elseif ($totalNilai >= 66 && $totalNilai <= 70) {
        $grade = 'B-';
    } elseif ($totalNilai >= 61 && $totalNilai <= 65) {
        $grade = 'C+';
    } elseif ($totalNilai >= 56 && $totalNilai <= 60) {
        $grade = 'C';
    } elseif ($totalNilai >= 41 && $totalNilai <= 55) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }
    
    $data['rataNilai'] = $totalNilai;
    $data['grade'] = $grade;
    
    $this->form_validation->set_rules('npm', 'NPM', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
    $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('nilaiUTS', 'Nilai UTS', 'required');
    $this->form_validation->set_rules('nilaiUAS', 'Nilai UAS', 'required');
    $this->form_validation->set_rules('nilaiTugas', 'Nilai Tugas', 'required');
    $this->form_validation->set_rules('nilaiKehadiran', 'Nilai Keharidan', 'required');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    if ($this->form_validation->run() == TRUE) {
        $this->load->view('forms/result_khs', $data);
    } else {
        $this->load->view('forms/khs');
    }
}



}