<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dash extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gzl', 'GZL');
        $this->load->model('M_jumat', 'JUMAT');
    }

    function cek_jadwal_sholat_jeda()
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
    }


    function cek_jadwal_sholat_iqomah()
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
            $this->redirectToPrayerPage("jeda_sholat");
        } else {
            // echo " | Tidak ada jadwal | Jam Sekarang " . $jam_sekarang . " | Jam Persiapan Sholat " . $waktu_persiapan_adzan . " | Jam Sholat " . $jam_sholat . " | Jam Iqomah " . $waktu_iqomah . " | Jam Jeda Sholat " . $waktu_jeda_sholat . " | Jam Batas Sholat " . $batas_jam_sholat . " | Jam Sholat Selanjutnya " . $jam_sholat_selanjutnya;
        }
    }


    function cek_jadwal_sholat_adzan()
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
            echo " | Tidak ada jadwal | Jam Sekarang " . $jam_sekarang . " | Jam Persiapan Sholat " . $waktu_persiapan_adzan . " | Jam Sholat " . $jam_sholat . " | Jam Iqomah " . $waktu_iqomah . " | Jam Jeda Sholat " . $waktu_jeda_sholat . " | Jam Batas Sholat " . $batas_jam_sholat . " | Jam Sholat Selanjutnya " . $jam_sholat_selanjutnya;
        }
    }

    function cek_jadwal_sholat()
    {
        // URL API
        $data =  $this->JUMAT->sistem_web_masjid();

        $jam_sekarang = $data['jam_sekarang'];
        $jam_sholat = $data['jam_sholat'];
        $waktu_persiapan_adzan = $data['waktu_persiapan_adzan'];
        $waktu_iqomah = $data['waktu_iqomah'];
        $waktu_jeda_sholat = $data['waktu_jeda_sholat'];
        $batas_jam_sholat = $data['batas_jam_sholat'];
        $jam_sholat_selanjutnya = $data['jam_sholat_selanjutnya'];

        if ($jam_sekarang >= $waktu_persiapan_adzan && $jam_sekarang <= $jam_sholat) {
            echo " | Sedang Persiapan Adzan";
            $this->redirectToPrayerPage("adzan");
        } else if ($jam_sekarang >= $waktu_iqomah && $jam_sekarang <= $waktu_jeda_sholat) {
            echo " | Sedang Iqomah";
            $this->redirectToPrayerPage("iqomah");
        } else if ($jam_sekarang >= $waktu_jeda_sholat && $jam_sekarang <= $batas_jam_sholat) {
            echo " | Sedang Jeda Sholat";
            $this->redirectToPrayerPage("jeda_sholat");
        } else {
            echo " | Tidak ada jadwal | Jam Sekarang " . $jam_sekarang . " | Jam Persiapan Sholat " . $waktu_persiapan_adzan . " | Jam Sholat " . $jam_sholat . " | Jam Iqomah " . $waktu_iqomah . " | Jam Jeda Sholat " . $waktu_jeda_sholat . " | Jam Batas Sholat " . $batas_jam_sholat . " | Jam Sholat Selanjutnya " . $jam_sholat_selanjutnya;
        }
    }



    private function redirectToPrayerPage($prayerName)
    {
        // Ganti 'nama_controller' dan 'nama_fungsi' dengan controller dan fungsi yang sesuai
        $url = base_url($prayerName);
        echo "<script>window.location.href = '$url';</script>";
    }

    function change_video_display()
    {
        $id_jadwal_bulanan = $this->input->post('id');
        $tanggal = $this->input->post('tanggalVideoDisplay');

        $data_video = $this->db->where("date_g <", $tanggal)->where("id_jadwal_bulanan", $id_jadwal_bulanan)->order_by("date_g", "DESC")->limit(1)->get('t_video_display')->row_array();

        echo "
       <input type='hidden' id='tanggal_video_display' value='" . $data_video['date_g'] . "'>
       <input type='hidden' id='id_jadwal_bulanan' value='" . $data_video['id_jadwal_bulanan'] . "'>
       <iframe id='videoIframe' style='width: 100%; height:100%;' src='" . base_url('/') . "storage/uploads_docs/" . $data_video['nama_file'] . "' frameborder='0' allowfullscreen></iframe>
       <div></div>
       ";
    }

    function hapus_video_display($id)
    {
        $this->db->where('id_video_display', $id);
        $this->db->delete('t_video_display');
        $this->GZL->show_msg('success', 'Data Berhasil Dihapus ! ');
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            // Jika referer tidak tersedia, redirect ke halaman lain
            header("Location: " . base_url("auth"));
            exit;
        }
    }

    function hapus_background($id)
    {
        $this->db->where('id_background', $id);
        $this->db->delete('t_background');
        $this->GZL->show_msg('success', 'Data Berhasil Dihapus ! ');
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            // Jika referer tidak tersedia, redirect ke halaman lain
            header("Location: " . base_url("auth"));
            exit;
        }
    }


    function  save_background_image()
    {
        $config['upload_path'] = './storage/uploads_docs/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $data = array(
                "id_background" => $this->GZL->gen_code("8", "BG"),
                "nama_file" => $this->upload->data('file_name'),
                "date_g" => date("Y-m-d H:i:s"),
            );
            $this->db->insert('t_background', $data);
            $this->GZL->show_msg('success', 'Data Berhasil Ditambah ! ');
            if (isset($_SERVER['HTTP_REFERER'])) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
            } else {
                // Jika referer tidak tersedia, redirect ke halaman lain
                header("Location: " . base_url("auth"));
                exit;
            }
        } else {
            $this->GZL->show_msg('danger', 'Background Gagal Diubah !' . $this->upload->display_errors());
            if (isset($_SERVER['HTTP_REFERER'])) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
            } else {
                // Jika referer tidak tersedia, redirect ke halaman lain
                header("Location: " . base_url("auth"));
                exit;
            }
        }
    }

    function background()
    {

        $data = array(
            'dataBackground' => $this->JUMAT->get_data_background(),
        );

        $this->load->view('templates/header_auth');
        $this->load->view('back/dash/background', $data);
        $this->load->view('templates/footer');
        $this->load->view('back/dash/index-js');
    }

    function save_video_display()
    {
        $id_jadwal_bulanan = $this->input->post('id_jadwal_bulanan');
        $tanggal = $this->input->post('tanggalVideoDisplay');

        $jam = date("H:i:s");

        $config['upload_path'] = './storage/uploads_docs/';
        $config['allowed_types'] = 'mp4|avi|mkv|3gp';
        $config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('videoDisplay')) {
            $data = array(
                "id_video_display" => $this->GZL->gen_code("8", "VD"),
                "id_jadwal_bulanan" => $id_jadwal_bulanan,
                "nama_file" => $this->upload->data('file_name'),
                "date_g" => $tanggal . " " . $jam,
            );
            $this->db->insert('t_video_display', $data);

            $data_jadwal = array(
                'id_video_display' => $id_jadwal_bulanan,
            );
            $this->db->where('id_jadwal_bulanan', $id_jadwal_bulanan);
            $this->db->update('t_jadwal_bulanan', $data_jadwal);

            $this->GZL->show_msg('success', 'Data Berhasil Ditambah ! ');
            if (isset($_SERVER['HTTP_REFERER'])) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
            } else {
                // Jika referer tidak tersedia, redirect ke halaman lain
                header("Location: " . base_url("auth"));
                exit;
            }
        } else {
            $this->GZL->show_msg('danger', 'Video Display Gagal Diubah !' . $this->upload->display_errors());
            if (isset($_SERVER['HTTP_REFERER'])) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
            } else {
                // Jika referer tidak tersedia, redirect ke halaman lain
                header("Location: " . base_url("auth"));
                exit;
            }
        }
    }

    function video_display($id)
    {
        $datax = $this->JUMAT->get_data_by_id($id);
        $data = array(
            'id' => $id,
            'data' => $this->JUMAT->get_data_by_id($id),
            'datavideo' => $this->JUMAT->get_data_video_by_id($id),
        );

        $this->load->view('templates/header_auth');
        $this->load->view('back/dash/video', $data);
        $this->load->view('templates/footer');
        $this->load->view('back/dash/index-js');
    }

    function save_running_text()
    {
        $id_jadwal_bulanan = $this->input->post('id_jadwal_bulanan');
        $teks = $this->input->post('teks');
        $tanggal = $this->input->post('tanggalimam');


        $jam = date("H:i:s");

        $data = array(
            'id_running_text' => $id_running_text =  $this->GZL->gen_code("8", "RT"),
            // 'id_jadwal_bulanan' => $id_jadwal_bulanan,
            'date_g' => $tanggal . " " . $jam,
            'isi' => $teks,
        );

        $this->db->insert('t_running_text', $data);

        $data_jadwal = array(
            'id_running_text' => $id_running_text,
        );
        $this->db->where('id_jadwal_bulanan', $id_jadwal_bulanan);
        $this->db->update('t_jadwal_bulanan', $data_jadwal);

        $this->GZL->show_msg('success', 'Data Berhasil Ditambah ! ');
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            // Jika referer tidak tersedia, redirect ke halaman lain
            header("Location: " . base_url("auth"));
            exit;
        }
    }

    function running_text($id)
    {
        $datax = $this->JUMAT->get_data_by_id($id);
        $data = array(
            'id' => $id,
            'data' => $this->JUMAT->get_data_by_id($id),
            'dataRunningTeks' => $this->JUMAT->get_data_running_text_by_id($datax['id_running_text']),
            // 'datart' => $this->JUMAT->get_data_rt_by_id($datax['id_running_text']),
        );

        $this->load->view('templates/header_auth');
        $this->load->view('back/dash/running_text', $data);
        $this->load->view('templates/footer');
        $this->load->view('back/dash/index-js');
    }


    function save_hadist_quote()
    {
        $id_jadwal_bulanan = $this->input->post('id_jadwal_bulanan');
        $hadist = $this->input->post('hadist');
        $quote = $this->input->post('quote');
        $tanggal = $this->input->post('tanggal');

        $teks_atas = $this->input->post('teks_atas');
        $teks_tengah = $this->input->post('teks_tengah');
        $teks_bawah = $this->input->post('teks_bawah');

        $konten = $teks_atas . "||" . $teks_tengah . "||" . $teks_bawah;

        $jam = date("H:i:s");

        $data = array(
            'id_hadist_quote' => $id_quote =  $this->GZL->gen_code("8", "HQT"),
            'id_jadwal_bulanan' => $id_jadwal_bulanan,
            'tanggal' => $tanggal . " " . $jam,
            'tipe' => 'hadist',
            'konten' => $konten,
        );

        $this->db->insert('t_hadist_quote', $data);

        $data_jadwal = array(
            'id_hadist_quote' => $id_jadwal_bulanan,
        );


        $this->db->where('id_jadwal_bulanan', $id_jadwal_bulanan);
        $this->db->update('t_jadwal_bulanan', $data_jadwal);

        $this->GZL->show_msg('success', 'Data Berhasil Ditambah ! ');
        redirect(base_url('hadist_quote/' . $id_jadwal_bulanan));
    }

    function get_hadist()
    {
        // URL API
        $url = "https://api.hadith.gading.dev/books/bukhari/1";

        // Inisialisasi CURL
        $ch = curl_init($url);

        // Set opsi CURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Eksekusi CURL
        $response = curl_exec($ch);

        // Cek apakah ada kesalahan
        if ($response === false) {
            $error = curl_error($ch);
            echo "Error: " . $error;
        } else {
            // Proses hasil
            $result = json_decode($response, true);
            // echo $result;
            // Cetak hasil
            var_dump($result);
        }

        // Tutup CURL
        curl_close($ch);
    }




    public function index()
    {
    }

    function hapus_hadist($id)
    {
        $this->db->where('id_hadist_quote', $id);
        $this->db->delete('t_hadist_quote');
        $this->GZL->show_msg('success', 'Data Berhasil Dihapus ! ');
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            // Jika referer tidak tersedia, redirect ke halaman lain
            header("Location: " . base_url("auth"));
            exit;
        }
    }

    function hadist_quote($id)
    {
        $datax = $this->JUMAT->get_data_by_id($id);
        $data = array(
            'id' => $id,
            'data' => $this->JUMAT->get_data_by_id($id),
            'datahadist' => $this->JUMAT->get_data_hadist_by_id($datax['id_hadist_quote']),
        );

        $this->load->view('templates/header_auth');
        $this->load->view('back/dash/hadist', $data);
        $this->load->view('templates/footer');
        $this->load->view('back/dash/index-js');
    }


    function kas($id)
    {
        $datax = $this->JUMAT->get_data_by_id($id);
        $data = array(
            'id' => $id,
            'data' => $this->JUMAT->get_data_by_id($id),
            "TotalPemasukanMingguIni" => $this->JUMAT->getTotalPemasukanMingguIni($datax['tanggal']),
            "TotalPemasukanMingguKemarin" => $this->JUMAT->getTotalPemasukanMingguKemarin($datax['tanggal']),
            "TotalPengeluaranMingguKemaren" => $this->JUMAT->getTotalPengeluaranMingguKemaren($datax['tanggal']),
            "TotalPengeluaranMingguIni" =>  $this->JUMAT->getTotalPengeluaranMingguIni($datax['tanggal']),
            "DataSaldoMingguIni" => $this->JUMAT->get_data_saldo_by_tanggal($datax['tanggal']),
        );

        $this->load->view('templates/header_auth');
        $this->load->view('back/dash/kas', $data);
        $this->load->view('templates/footer');
        $this->load->view('back/dash/index-js');
    }


    function imam($id)
    {
        $datax = $this->JUMAT->get_data_by_id($id);
        $data = array(
            'id' => $id,
            'data' => $this->JUMAT->get_data_by_id($id),
            'dataimam' => $this->JUMAT->get_data_imam_by_id($datax['id_imam_khotib']),
        );

        $this->load->view('templates/header_auth');
        $this->load->view('back/dash/imam', $data);
        $this->load->view('templates/footer');
        $this->load->view('back/dash/index-js');
    }


    function tambah_tanggal()
    {
        $tanggal = $this->input->post('tanggal');
        if ($tanggal == "") {
            $this->GZL->show_msg('danger', 'Tanggal Tidak Boleh Kosong ! ');
            return false;
        } else {


            ///////// CEK TANGGAL 
            $this->db->where('tanggal', $tanggal);
            $data = $this->db->get('t_jadwal_bulanan', 1);

            if ($data->num_rows() > 0) {
                $this->GZL->show_msg('danger', 'Tanggal Sudah Ada ! ');
                return false;
            } else {

                /// cek tanggal apakah hari jumat atau bukan
                $day = date('D', strtotime($tanggal));
                if ($day != "Fri") {
                    $this->GZL->show_msg('danger', 'Tanggal Harus Hari Jumat ! ');
                    return false;
                } else {
                    $data = array(
                        "id_jadwal_bulanan" => $this->GZL->gen_code("7", "JSB"),
                        "tanggal" => $tanggal,
                        "date_g" => date("Y-m-d H:i:s")
                    );
                    $this->db->insert('t_jadwal_bulanan', $data);
                    $this->GZL->show_msg('success', 'Data Berhasil Ditambah ! ');
                    if ($this->db->affected_rows() > 0) {
                        echo "success";
                    } else {
                        echo "error : " . $this->db->error();
                    }
                }
            }
        }
    }

    function hapus_tanggal()
    {
        $id = $this->input->post('dataid');
        $this->db->where('id_jadwal_bulanan', $id);
        $this->db->delete('t_jadwal_bulanan');
        $this->GZL->show_msg('success', 'Data Berhasil Dihapus ! ');
        if ($this->db->affected_rows() > 0) {
            $this->GZL->show_msg('success', 'Data Berhasil Dihapus ! ');
            echo "success";
        } else {
            $this->GZL->show_msg('danger', 'Data Gagal Dihapus ! ');
            echo "error : " . $this->db->error();
        }
    }

    function get_data_by_month()
    {
        $month = $this->input->post('month');
        $year = $this->input->post('year');

        $jumat = $this->GZL->getFridaysInMonthV2($month, $year);

        foreach ($jumat as $key) {
            $this->db->where('tanggal', $key);
            $data = $this->db->get('t_jadwal_bulanan', 1);

            if ($data->num_rows() > 0) {
            } else {
                $data = array(
                    "id_jadwal_bulanan" => $this->GZL->gen_code("7", "JSB"),
                    "tanggal" => $key,
                    // "id_imam_khotib" => null,
                    // "id_kas_masjid" => null,
                    // "id_hadist_quote" => null,
                    // "id_running_text" => null,
                    "date_g" => date("Y-m-d H:i:s")
                );
                $this->db->insert('t_jadwal_bulanan', $data);
            }
        }


        $jumat = $this->GZL->getFridaysInMonthV3($month, $year);

        $data = array(
            'month' => $month,
            'year' => $year,
            'DataJumat' =>  $jumat,
        );

        $this->load->view('back/dash/cards', $data);
    }
}

/* End of file Dash.php */
