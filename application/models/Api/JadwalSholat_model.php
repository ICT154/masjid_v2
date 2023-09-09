<?php


defined('BASEPATH') or exit('No direct script access allowed');

class JadwalSholat_model extends CI_Model
{

    function getImamKhatib($tanggal)
    {
        $this->db->where('tanggal', $tanggal);
        $this->db->where('status', 1);
        $this->db->order_by('date_g', 'DESC');
        return $this->db->get('t_jadwal_imam_khatib')->row_array();
    }

    public function getJadwalSholat()
    {
        $url = 'https://api.banghasan.com/sholat/format/json/jadwal/kota/697/tanggal/2023-09-07';

        // Inisialisasi cURL
        $ch = curl_init();

        // Set URL yang akan diambil datanya
        curl_setopt($ch, CURLOPT_URL, $url);

        // Set untuk mengembalikan hasil sebagai string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Eksekusi cURL
        $response = curl_exec($ch);

        // Tutup koneksi cURL
        curl_close($ch);

        // Parse response JSON ke dalam bentuk array
        $data = json_decode($response, true);

        // Return hasil
        return $data;
    }
}

/* End of file JadwalSholat_model.php */
