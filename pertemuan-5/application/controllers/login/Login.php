<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load base_url
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('login/login');

    }

    public function submit()
    {

        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $this->load->view('login/result_login', $data);

    }

}