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

        $this->load->view('form/v_login');

    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $usr = $this->input->post('username');
        $pwd = $this->input->post('pwd');

        if ($this->form_validation->run() == TRUE) {
            if ($usr=='admin'&& $pwd == 'admin123') {
                $this->load->view('form/v_signup');
            } else {
                $message['message'] = "Username atau password salah.";
                $this->load->view('form/v_login', $message);
            }
        } else {
            $this->load->view('form/v_login');
        }
    }

    public function signup()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        if ($this->form_validation->run() == TRUE) {
            $this->load->view('welcome_message');
        } else {
            $this->load->view('form/v_signup');
        }
    }
}