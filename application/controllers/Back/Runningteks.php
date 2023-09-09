<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Runningteks extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gzl', 'GZL');
    }


    function running_text_sv()
    {
        $running_teks = $this->input->post('running_teks');
        if ($running_teks == null or $running_teks == "") {
            $this->GZL->show_msg('success', 'Running Text Tidak Boleh Kosong !');
            redirect('running-teks-berita');
        } else {

            $this->db->truncate('t_running_text');


            $data = array(
                'id_running_text' => $this->GZL->gen_code("6", "RT"),
                'isi' => $running_teks,
                'date_g' => date('Y-m-d H:i:s')
            );
            $this->db->insert('t_running_text', $data);
            $this->GZL->show_msg('success', 'Running Text Berhasil Ditambahkan !');
            redirect('running-teks-berita');
        }
    }

    public function index()
    {

        $data = array(
            'DataRunningText' => $this->db->order_by("date_g", "DESC")->limit(1)->get('t_running_text')->row_array(),
        );

        $this->load->view('templates/header_auth', $data);
        $this->load->view('back/run/index');
        $this->load->view('templates/footer');
        $this->load->view('back/run/index-js');
    }
}

/* End of file Runningteks.php */
