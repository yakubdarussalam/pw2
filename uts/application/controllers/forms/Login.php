<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
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

        $this->load->view('forms/v_login');

    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $usr = $this->input->post('username');
        $pwd = $this->input->post('pwd');

        if ($this->form_validation->run() == TRUE) {
            if ($usr=='admin'&& $pwd == 'adm1n321') {
                $this->load->view('forms/khs');
            } else {
                $message['message'] = "Username atau password salah.";
                $this->load->view('forms/v_login', $message);
            }
        } else {
            $this->load->view('forms/v_login');
        }
    }
}