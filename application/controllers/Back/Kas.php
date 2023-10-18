<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kas extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Back/Kaskas', 'KAS');
        $this->load->model('M_gzl', 'GZL');
    }

    function delete_saldo()
    {
        $id_saldo_kas = $this->input->post('x');
        $this->db->where('id_saldo_kas', $id_saldo_kas);
        $this->db->delete('t_saldo_kas');
    }

    function ubah_saldo()
    {
        $id_saldo_kas = $this->input->post('x');
        $data = array(
            'data_kas' => $this->KAS->get_data_saldo_by_id($id_saldo_kas)
        );
        $this->load->view('back/uang_kas/ubah_saldo', $data);
    }

    function ubah_saldo_sv()
    {
        // $id_jadwal_bulanan = $this->input->post('id_jadwal_bulanan');
        $id_saldo_kas = $this->input->post('id_kas_ubah');
        // $masuk = $this->input->post('NominalPemasukanUbah');
        $keluar = $this->input->post('NominalPengeluaranUbah');
        $ket = $this->input->post('KetUbah');

        $masuk = str_replace("Rp. ", "", $this->input->post('NominalPemasukanUbah'));
        $masuk = str_replace(".", "", $masuk);
        $masuk = str_replace(",", ".", $masuk);

        $keluar = str_replace("Rp. ", "", $this->input->post('NominalPengeluaranUbah'));
        $keluar = str_replace(".", "", $keluar);
        $keluar = str_replace(",", ".", $keluar);


        $data = $this->KAS->get_data_saldo_by_id($id_saldo_kas);
        $data_kas_sebelumnya = $this->KAS->get_data_saldo_by_id_sebelumnya($data['tanggal']);
        $data_kas_sesudahnya = $this->KAS->get_data_saldo_by_id_sesudahnya($data['tanggal']);

        $data_kas_sekarang = array(
            'masuk' => $masuk,
            'keluar' => $keluar,
            'ket' => $ket,
            'sisa' => $data_kas_sebelumnya['sisa'] + $masuk - $keluar,
        );
        $this->db->where('id_saldo_kas', $id_saldo_kas);
        $this->db->update('t_saldo_kas', $data_kas_sekarang);

        foreach ($data_kas_sesudahnya as $key) {
            $data_kas_sekarang = array(
                'sisa' => $data_kas_sekarang['sisa'] + $key->masuk - $key->keluar,
            );
            $this->db->where('id_saldo_kas', $key->id_saldo_kas);
            $this->db->update('t_saldo_kas', $data_kas_sekarang);
        }
        $this->GZL->show_msg('success', 'Saldo Kas Sudah Berhasil Diubah !');
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            // Jika referer tidak tersedia, redirect ke halaman lain
            header("Location: " . base_url("auth"));
            exit;
        }
    }


    function pengeluaran_kas_sv()
    {

        $id_jadwal_bulanan = $this->input->post('id_jadwal_bulanan');

        if ($this->input->post('NominalPengeluaran') == null) {
            $this->GZL->show_msg('danger', 'Nominal Pengeluaran Tidak Boleh Kosong');
            redirect('uang-kas');
        }
        $nominal_pengeluaran = str_replace("Rp. ", "", $this->input->post('NominalPengeluaran'));
        $nominal_pengeluaran = str_replace(".", "", $nominal_pengeluaran);
        $nominal_pengeluaran = str_replace(",", ".", $nominal_pengeluaran);
        $tanggal_pengeluaran = $this->input->post('TanggalPengeluaran');

        $get_data_last = $this->KAS->get_last_saldo();

        $jam = date("H:i:s");

        $data = [
            'id_saldo_kas' => "" . $this->GZL->gen_code("6", "KAS"),
            'tanggal' => $tanggal_pengeluaran . " " . $jam,
            'keluar' => $nominal_pengeluaran,
            'ket' => $this->input->post('KetPemasukan'),
            'sisa' => $get_data_last - $nominal_pengeluaran,
        ];
        $this->GZL->show_msg('success', 'Pengeluaran Sudah Berhasil Ditambahkan !');
        $this->db->insert('t_saldo_kas', $data);
        redirect(base_url("kas/" . $id_jadwal_bulanan));
    }


    function uang_kas()
    {
        $data = array(
            'TotalAllPemasukan' => $this->KAS->get_total_pemasukan(),
            'TotalAllPengeluaran' => $this->KAS->get_total_pengeluaran(),
            'TotalAllSaldo' => $this->KAS->get_total_saldo(),
            'DataSaldo' => $this->KAS->get_data_saldo(),
        );
        $this->load->view('templates/header_auth', $data);
        $this->load->view('back/uang_kas/index');
        $this->load->view('templates/footer');
        $this->load->view('back/uang_kas/index-js');
    }

    public function pemasukan_kas_sv()
    {

        $id_jadwal_bulanan = $this->input->post('id_jadwal_bulanan');

        if ($this->input->post('NominalPemasukan') == null) {
            $this->GZL->show_msg('danger', 'Nominal Pemasukan Tidak Boleh Kosong');
            redirect('uang-kas');
        }
        $nominal_pemasukan = str_replace("Rp. ", "", $this->input->post('NominalPemasukan'));
        $nominal_pemasukan = str_replace(".", "", $nominal_pemasukan);
        $nominal_pemasukan = str_replace(",", ".", $nominal_pemasukan);
        $tanggal_pemasukan = $this->input->post('TanggalPemasukan');

        $get_data_last = $this->KAS->get_last_saldo();

        $jam = date("H:i:s");

        $data = [
            'id_saldo_kas' => "" . $this->GZL->gen_code("6", "KAS"),
            'tanggal' => $tanggal_pemasukan . " " . $jam,
            'masuk' => $nominal_pemasukan,
            'ket' => $this->input->post('KetPemasukan'),
            'sisa' => $nominal_pemasukan + $get_data_last,
        ];
        $this->GZL->show_msg('success', 'Pemasukan Sudah Berhasil Ditambahkan !');
        $this->db->insert('t_saldo_kas', $data);
        redirect(base_url("kas/" . $id_jadwal_bulanan));
    }
}

/* End of file Kas.php */
