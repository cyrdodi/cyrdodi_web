<?php
defined('BASEPATH') or exit('no direct access script allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'CYRDODI';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function portofolio()
    {
        $data['judul'] = 'CYRDODI';
        $this->load->view('templates/header', $data);
        $this->load->view('home/portofolio');
        $this->load->view('templates/footer');
    }
}
