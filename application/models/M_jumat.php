<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jumat extends CI_Model
{


    function sistem_web_masjid()
    {

        $api_url = 'https://www.islamicfinder.us/index.php/api/prayer_times?user_ip=103.147.9.227&method=3&time_format=0';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);
        $data = json_decode($response, true);

        $subuh = $data['results']['Fajr']; // 05:00
        $dzuhur = $data['results']['Dhuhr']; // 12:00
        // $ashar = $data['results']['Asr']; // 15:00
        $ashar = "15:00";
        $maghrib = $data['results']['Maghrib']; // 18:00
        $isya = $data['results']['Isha']; // 19:00

        $jam_sekarang = date("H:i");
        if ($jam_sekarang >= $subuh && $jam_sekarang <= $dzuhur) {
            // echo " | Sedang Menuju Dzuhur";
            $waktu_persiapan_adzan = date("H:i", strtotime('-15 minutes', strtotime($dzuhur)));
            $waktu_iqomah = date("H:i", strtotime('+10 minutes', strtotime($dzuhur)));
            $waktu_jeda_sholat = date("H:i", strtotime('+20 minutes', strtotime($dzuhur)));
            $jam_sholat = $dzuhur;
            $jam_sholat_selanjutnya = $ashar;
            $nama_sholat = "Dzuhur";
        } else if ($jam_sekarang >= $dzuhur && $jam_sekarang <= $ashar) {
            // echo " | Sedang Menuju Ashar";
            $waktu_persiapan_adzan = date("H:i", strtotime('-15 minutes', strtotime($ashar)));
            $waktu_iqomah = date("H:i", strtotime('+10 minutes', strtotime($ashar)));
            $waktu_jeda_sholat = date("H:i", strtotime('+20 minutes', strtotime($ashar)));
            $jam_sholat = $ashar;
            $jam_sholat_selanjutnya = $maghrib;
            $nama_sholat = "Ashar";
        } else if ($jam_sekarang >= $ashar && $jam_sekarang <= $maghrib) {
            // echo " | Sedang Menuju Maghrib";
            $waktu_persiapan_adzan = date("H:i", strtotime('-15 minutes', strtotime($maghrib)));
            $waktu_iqomah = date("H:i", strtotime('+10 minutes', strtotime($maghrib)));
            $waktu_jeda_sholat = date("H:i", strtotime('+20 minutes', strtotime($maghrib)));
            $jam_sholat = $maghrib;
            $jam_sholat_selanjutnya = $isya;
            $nama_sholat = "Maghrib";
        } else if ($jam_sekarang >= $maghrib && $jam_sekarang <= $isya) {
            // echo " | Sedang Menuju Isya";
            $waktu_persiapan_adzan = date("H:i", strtotime('-15 minutes', strtotime($isya)));
            $waktu_iqomah = date("H:i", strtotime('+10 minutes', strtotime($isya)));
            $waktu_jeda_sholat = date("H:i", strtotime('+20 minutes', strtotime($isya)));
            $jam_sholat = $isya;
            $jam_sholat_selanjutnya = $subuh;
            $nama_sholat = "Isya";
        } else if ($jam_sekarang >= $isya && $jam_sekarang <= "23:59") {
            // echo " | Sedang Isya";
            $waktu_persiapan_adzan = date("H:i", strtotime('-15 minutes', strtotime($subuh)));
            $waktu_iqomah = date("H:i", strtotime('+10 minutes', strtotime($subuh)));
            $waktu_jeda_sholat = date("H:i", strtotime('+20 minutes', strtotime($subuh)));
            $jam_sholat = $subuh;
            $jam_sholat_selanjutnya = "00:00";
            $nama_sholat = "Subuh";
        } else if ($jam_sekarang >= "00:00" && $jam_sekarang <= $subuh) {
            // echo " | Sedang Subuh ";
            $waktu_persiapan_adzan = date("H:i", strtotime('-15 minutes', strtotime($subuh)));
            $waktu_iqomah = date("H:i", strtotime('+10 minutes', strtotime($subuh)));
            $waktu_jeda_sholat = date("H:i", strtotime('+20 minutes', strtotime($subuh)));
            $jam_sholat = $subuh;
            $jam_sholat_selanjutnya = $dzuhur;
            $nama_sholat = "Subuh";
        } else {
            // echo " | Tidak ada jadwal";
        }

        $batas_jam_sholat = date("H:i", strtotime('+25 minutes', strtotime($jam_sholat)));

        $data = array(
            'waktu_persiapan_adzan' => $waktu_persiapan_adzan,
            'waktu_iqomah' => $waktu_iqomah,
            'waktu_jeda_sholat' => $waktu_jeda_sholat,
            'jam_sholat' => $jam_sholat,
            'jam_sholat_selanjutnya' => $jam_sholat_selanjutnya,
            'batas_jam_sholat' => $batas_jam_sholat,
            'jam_sekarang' => $jam_sekarang,
            'nama_sholat' => $nama_sholat
        );

        return $data;

        // if ($jam_sekarang >= $waktu_persiapan_adzan && $jam_sekarang <= $jam_sholat) {
        //     echo " | Sedang Persiapan Adzan";
        //     $this->redirectToPrayerPage("adzan");
        // } else if ($jam_sekarang >= $waktu_iqomah && $jam_sekarang <= $waktu_jeda_sholat) {
        //     echo " | Sedang Iqomah";
        //     $this->redirectToPrayerPage("iqomah");
        // } else if ($jam_sekarang >= $waktu_jeda_sholat && $jam_sekarang <= $batas_jam_sholat) {
        //     echo " | Sedang Jeda Sholat";
        //     $this->redirectToPrayerPage("jeda_sholat");
        // } else {
        //     echo " | Tidak ada jadwal | Jam Sekarang " . $jam_sekarang . " | Jam Persiapan Sholat " . $waktu_persiapan_adzan . " | Jam Sholat " . $jam_sholat . " | Jam Iqomah " . $waktu_iqomah . " | Jam Jeda Sholat " . $waktu_jeda_sholat . " | Jam Batas Sholat " . $batas_jam_sholat . " | Jam Sholat Selanjutnya " . $jam_sholat_selanjutnya;
        // }
    }


    private function redirectToPrayerPage($prayerName)
    {
        // Ganti 'nama_controller' dan 'nama_fungsi' dengan controller dan fungsi yang sesuai
        $url = base_url($prayerName);
        echo "<script>window.location.href = '$url';</script>";
    }

    function getFridayOfWeek($date)
    {
        $givenDate = new DateTime($date);
        $givenDate->modify('this week');
        $givenDate->modify('next friday');
        return $givenDate->format('Y-m-d');
    }


    function get_data_background()
    {
        $this->db->select('*');
        $this->db->order_by('date_g', 'desc');
        $this->db->from('t_background');
        $query = $this->db->get();
        $res =  $query->result();
        return $res;
    }


    function get_data_video_by_id_limit($id)
    {
        $this->db->select('*');
        $this->db->from('t_video_display');
        $this->db->where('id_jadwal_bulanan', $id);
        $this->db->order_by('date_g', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res;
    }

    function get_data_video_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('t_video_display');
        $this->db->where('id_jadwal_bulanan', $id);
        $this->db->order_by('date_g', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        $res =  $query->result();
        return $res;
    }

    function get_data_running_text_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('t_running_text');
        $this->db->where('id_running_text', $id);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res;
    }


    function get_data_hadist_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('t_hadist_quote');
        $this->db->where('id_jadwal_bulanan', $id);
        $query = $this->db->get();
        $res =  $query->result();
        return $res;
    }

    function get_data_saldo_by_tanggal($tanggal)
    {

        $tanggal_Awal = $tanggal . " 00:00:00";
        $tanggal_Akhir = $tanggal . " 23:59:59";

        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal >=', $tanggal_Awal);
        $this->db->where('tanggal <=', $tanggal_Akhir);
        $this->db->order_by('tanggal', 'desc');
        $query = $this->db->get();
        return $query->result();
    }


    function getTotalPengeluaranMingguIni($tanggal)
    {
        $tanggal_Awal = $tanggal . " 00:00:00";
        $tanggal_Akhir = $tanggal . " 23:59:59";
        $this->db->select('SUM(keluar) as total');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal >=', $tanggal_Awal);
        $this->db->where('tanggal <=', $tanggal_Akhir);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res['total'];
    }

    function getTotalPemasukanMingguIni($tanggal)
    {
        $tanggal_Awal = $tanggal . " 00:00:00";
        $tanggal_Akhir = $tanggal . " 23:59:59";
        $this->db->select('SUM(masuk) as total');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal >=', $tanggal_Awal);
        $this->db->where('tanggal <=', $tanggal_Akhir);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res['total'];
    }

    function getTotalPengeluaranMingguKemaren($tanggal)
    {

        $tanggal_Awal = $tanggal . " 00:00:00";
        $tanggal_Akhir = $tanggal . " 23:59:59";

        $this->db->select('SUM(keluar) as total');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal <', $tanggal);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res['total'];
    }

    function getTotalPemasukanMingguKemarin($tanggal)
    {
        $this->db->select('SUM(masuk) as total');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal <', $tanggal);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res['total'];
    }

    function get_data_imam_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('t_jadwal_imam_khatib');
        $this->db->where('id_jadwal', $id);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res;
    }

    function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('t_jadwal_bulanan');
        $this->db->where('id_jadwal_bulanan', $id);
        $query = $this->db->get();
        $res =  $query->row_array();
        return $res;
    }


    function cekJadwalSesuaiJumat($kategori, $tanggal)
    {
        $this->db->select('*');
        $this->db->from('t_jadwal_bulanan');
        $this->db->where('tanggal', $tanggal);
        $query = $this->db->get();
        $res =  $query->row_array();

        if ($kategori == "imam") {
            if ($res['id_imam_khotib'] != null) {
                return "<li class='list-group-item text-light bg-success'>Imam &amp; Khotib <i class='fa-regular fa-circle-check'></i></li>";
            } else {
                return "<li class='list-group-item text-light bg-danger'>Imam &amp; Khotib <i class='fa-regular fa-circle-xmark'></i></li>";
            }
        } else if ($kategori == "kas") {

            $this->db->where('tanggal >=', $tanggal . " 00:00:00");
            $this->db->where('tanggal <=', $tanggal . " 23:59:59");
            $cek_kas = $this->db->get('t_saldo_kas', 1)->num_rows();

            if ($cek_kas > 0) {
                return "<li class='list-group-item text-light bg-success'>Kas <i class='fa-regular fa-circle-check'></i></li>";
            } else {
                return "<li class='list-group-item text-light bg-danger'>Kas<i class='fa-regular fa-circle-xmark'></i></li>";
            }
        } else if ($kategori == "hadist_quote") {
            if ($res['id_hadist_quote'] != null) {
                return "<li class='list-group-item text-light bg-success'>Hadist / Quote <i class='fa-regular fa-circle-check'></i></li>";
            } else {
                return "<li class='list-group-item text-light bg-danger'>Hadist / Quote <i class='fa-regular fa-circle-xmark'></i></li>";
            }
        } else if ($kategori == "running_text") {
            if ($res['id_running_text'] != null) {
                return "<li class='list-group-item text-light bg-success'>Running Text <i class='fa-regular fa-circle-check'></i></li>";
            } else {
                return "<li class='list-group-item text-light bg-danger'>Running Text <i class='fa-regular fa-circle-xmark'></i></li>";
            }
        } else if ($kategori == "video_display") {
            if ($res['id_video_display'] != null) {
                return "<li class='list-group-item text-light bg-success'>Video Display <i class='fa-regular fa-circle-check'></i></li>";
            } else {
                return "<li class='list-group-item text-light bg-danger'>Video Display <i class='fa-regular fa-circle-xmark'></i></li>";
            }
        }
    }
}

/* End of file M_jumat.php */
