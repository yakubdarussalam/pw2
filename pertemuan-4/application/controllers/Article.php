<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load base_url
        $this->load->helper('url');
    }
    public function index()
    {
        // @TODO: get article from model
        $data['articles'] = [

            [
                'title' => 'Foo',
                'content' => 'Ini artikel tentang foo',
            ],
            [
                'title' => 'Bar',
                'content' => 'Ini artikel tentang Bar',
            ],

        ];

        if (count($data['articles']) > 0) {
            $this->load->view('articles/list_article.php', $data);
        } else {
            $this->load->view('articles/empty_article.php');
        }
    }
}