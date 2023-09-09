<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header_auth');
        $this->load->view('back/dash/index');
        $this->load->view('templates/footer');
        $this->load->view('back/dash/index-js');
    }

    function uang_kas()
    {
        $this->load->view('templates/header_auth');
        $this->load->view('back/uang_kas/index');
        $this->load->view('templates/footer');
        $this->load->view('back/uang_kas/index-js');
    }
}

/* End of file Auth.php */
