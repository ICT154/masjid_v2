<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jumat extends CI_Model
{

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
