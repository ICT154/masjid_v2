<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_imam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Back/Imam', 'IMAM');
        $this->load->model('M_gzl', 'GZL');
    }

    function tambah_imam()
    {
        $data = array(
            'id_jadwal' => $this->GZL->gen_code("6", "JAD"),
            'tanggal' => $this->input->post('TanggalImam'),
            'imam' => $this->input->post('Imam'),
            'khatib' => $this->input->post('Khotib'),
            'status' => '1',
            'date_g' => date("Y-m-d H:i:s")
        );
        $this->db->insert('t_jadwal_imam_khatib', $data);
        $this->GZL->show_msg('success', 'Data Imam Berhasil Ditambah ! ');
        redirect('jadwal-imam-khotib');
    }

    function delete_imam()
    {
        $id_jadwal = $this->input->post('x');
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('t_jadwal_imam_khatib');
    }

    public function index()
    {
        $data = array(
            'DataImam' => $this->IMAM->get_data_imam(),
        );
        $this->load->view('templates/header_auth', $data);
        $this->load->view('back/jadwal_imam/index');
        $this->load->view('templates/footer');
        $this->load->view('back/jadwal_imam/index-js');
    }
}

/* End of file JadwalImam.php */
