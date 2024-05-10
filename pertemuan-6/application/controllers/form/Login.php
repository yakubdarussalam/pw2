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
        if ($this->form_validation->run() == TRUE) {
            $this->load->view('form/v_signup');
        } else {
            $this->load->view('form/v_login');
        }
    }
}