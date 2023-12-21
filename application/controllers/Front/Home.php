<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gzl', 'GZL');
        $this->load->model('M_jumat', 'JUMAT');
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }
    private function redirectToPrayerPage($prayerName)
    {
        // Ganti 'nama_controller' dan 'nama_fungsi' dengan controller dan fungsi yang sesuai
        $url = base_url($prayerName);
        echo "<script>window.location.href = '$url';</script>";
    }
    function adzan()
    {
        $data =  $this->JUMAT->sistem_web_masjid();

        $jam_sekarang = $data['jam_sekarang'];
        $jam_sholat = $data['jam_sholat'];
        $waktu_persiapan_adzan = $data['waktu_persiapan_adzan'];
        $waktu_iqomah = $data['waktu_iqomah'];
        $waktu_jeda_sholat = $data['waktu_jeda_sholat'];
        $batas_jam_sholat = $data['batas_jam_sholat'];
        $jam_sholat_selanjutnya = $data['jam_sholat_selanjutnya'];

        if ($jam_sekarang >= $waktu_persiapan_adzan && $jam_sekarang <= $jam_sholat) {
            // echo " | Sedang Persiapan Adzan";
            // $this->redirectToPrayerPage("adzan");
        } else if ($jam_sekarang >= $waktu_iqomah && $jam_sekarang <= $waktu_jeda_sholat) {
            // echo " | Sedang Iqomah";
            $this->redirectToPrayerPage("iqomah");
        } else if ($jam_sekarang >= $waktu_jeda_sholat && $jam_sekarang <= $batas_jam_sholat) {
            // echo " | Sedang Jeda Sholat";
            $this->redirectToPrayerPage("jeda_sholat");
        } else {
            // echo " | Tidak ada jadwal | Jam Sekarang " . $jam_sekarang . " | Jam Persiapan Sholat " . $waktu_persiapan_adzan . " | Jam Sholat " . $jam_sholat . " | Jam Iqomah " . $waktu_iqomah . " | Jam Jeda Sholat " . $waktu_jeda_sholat . " | Jam Batas Sholat " . $batas_jam_sholat . " | Jam Sholat Selanjutnya " . $jam_sholat_selanjutnya;
        }

        $data = array(
            'jam_sholat' => $jam_sholat,
            'nama_sholat' => $data['nama_sholat']
        );

        $this->load->view('display/adzan', $data);
    }

    function iqomah()
    {
        $data =  $this->JUMAT->sistem_web_masjid();

        $jam_sekarang = $data['jam_sekarang'];
        $jam_sholat = $data['jam_sholat'];
        $waktu_persiapan_adzan = $data['waktu_persiapan_adzan'];
        $waktu_iqomah = $data['waktu_iqomah'];
        $waktu_jeda_sholat = $data['waktu_jeda_sholat'];
        $batas_jam_sholat = $data['batas_jam_sholat'];
        $jam_sholat_selanjutnya = $data['jam_sholat_selanjutnya'];

        if ($jam_sekarang >= $waktu_persiapan_adzan && $jam_sekarang <= $jam_sholat) {
            // echo " | Sedang Persiapan Adzan";
            $this->redirectToPrayerPage("adzan");
        } else if ($jam_sekarang >= $waktu_iqomah && $jam_sekarang <= $waktu_jeda_sholat) {
            // echo " | Sedang Iqomah";
            // $this->redirectToPrayerPage("iqomah");
        } else if ($jam_sekarang >= $waktu_jeda_sholat && $jam_sekarang <= $batas_jam_sholat) {
            // echo " | Sedang Jeda Sholat";
            $this->redirectToPrayerPage("jeda_sholat");
        } else {
            // echo " | Tidak ada jadwal | Jam Sekarang " . $jam_sekarang . " | Jam Persiapan Sholat " . $waktu_persiapan_adzan . " | Jam Sholat " . $jam_sholat . " | Jam Iqomah " . $waktu_iqomah . " | Jam Jeda Sholat " . $waktu_jeda_sholat . " | Jam Batas Sholat " . $batas_jam_sholat . " | Jam Sholat Selanjutnya " . $jam_sholat_selanjutnya;
        }



        $data = array(
            'jam_sholat' => $jam_sholat,
            'jam_iqomah' => $waktu_iqomah
        );

        $this->load->view('display/iqomah', $data);
    }

    function jeda_sholat()
    {
        $data =  $this->JUMAT->sistem_web_masjid();

        $jam_sekarang = $data['jam_sekarang'];
        $jam_sholat = $data['jam_sholat'];
        $waktu_persiapan_adzan = $data['waktu_persiapan_adzan'];
        $waktu_iqomah = $data['waktu_iqomah'];
        $waktu_jeda_sholat = $data['waktu_jeda_sholat'];
        $batas_jam_sholat = $data['batas_jam_sholat'];
        $jam_sholat_selanjutnya = $data['jam_sholat_selanjutnya'];

        if ($jam_sekarang >= $waktu_persiapan_adzan && $jam_sekarang <= $jam_sholat) {
            // echo " | Sedang Persiapan Adzan";
            // $this->redirectToPrayerPage("adzan");
        } else if ($jam_sekarang >= $waktu_iqomah && $jam_sekarang <= $waktu_jeda_sholat) {
            // echo " | Sedang Iqomah";
            // $this->redirectToPrayerPage("iqomah");
        } else if ($jam_sekarang >= $waktu_jeda_sholat && $jam_sekarang <= $batas_jam_sholat) {
            // echo " | Sedang Jeda Sholat";
            // $this->redirectToPrayerPage("jeda_sholat");
        } else {
            $this->redirectToPrayerPage("");
            // echo " | Tidak ada jadwal | Jam Sekarang " . $jam_sekarang . " | Jam Persiapan Sholat " . $waktu_persiapan_adzan . " | Jam Sholat " . $jam_sholat . " | Jam Iqomah " . $waktu_iqomah . " | Jam Jeda Sholat " . $waktu_jeda_sholat . " | Jam Batas Sholat " . $batas_jam_sholat . " | Jam Sholat Selanjutnya " . $jam_sholat_selanjutnya;
        }
        $this->load->view('display/jeda_sholat');
    }

    function test()
    {
        echo "test";
    }
}

/* End of file Home.php */
