<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);

        $this->load->model('M_member', 'member');
        $this->load->model('M_mahasiswa', 'mahasiswa');
        $this->table = 'member';
        $this->tableMhs = 'mahasiswa';

    }

    public function index()
    {
        $this->load->view('form/v_login');
    }

    public function signin()
    {
        if ($this->input->method() === 'post') {
            $rules = $this->member->rulesLogin();
            $this->form_validation->set_rules($rules);
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if ($this->form_validation->run() != FALSE) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                if ($email and $password) {
                    $data = [
                        'email' => $email,
                        'password' => $password
                    ];

                    $cek = $this->member->getOne($this->table, $data)->num_rows();

                    if ($cek > 0) {
                        $data['user'] = $this->member->displayAll($this->table)->result();
                        $data['mahasiswa'] = $this->mahasiswa->displayAll($this->tableMhs)->result();
                        $this->load->view('form/v_mahasiswa', $data);
                    } else {
                        $message['message'] = "Username atau password salah.";
                        $this->load->view('form/v_login', $message);
                    }
                }
            } else {
                $message['message'] ="Seluruh data harus diisi";
                $this->load->view('form/v_login', $message);
            }//end if validation
        }//end if post
    }//end if function
}//end if class