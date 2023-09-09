<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kaskas extends CI_Model
{

    function getSaldoMingguanRange($tanggal_awal, $tanggal_akhir, $tipe)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal >=', $tanggal_awal);
        $this->db->where('tanggal <=', $tanggal_akhir);
        $this->db->order_by('tanggal', 'ASC');
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            if ($tipe == 'keluar') {
                $total_pengeluaran = 0;
                foreach ($cek->result() as $key) {
                    $total_pengeluaran += $key->keluar;
                }
                return $total_pengeluaran;
            } else {
                $total_pemasukan = 0;
                foreach ($cek->result() as $key) {
                    $total_pemasukan += $key->masuk;
                }
                return $total_pemasukan;
            }
        } else {
            return 0;
        }
    }

    function getSaldoMingguan($tanggal)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal', $tanggal);
        $this->db->order_by('tanggal', 'desc');
        $this->db->limit(1);
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            $cek = $cek->row_array();
            return $cek['sisa'];
        } else {
            return 0;
        }
    }

    function get_data_saldo_by_id_sebelumnya($tanggal)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal <', $tanggal);
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(1);
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            return $cek->row_array();
        } else {
            return 0;
        }
    }

    function get_data_saldo_by_id_sesudahnya($tanggal)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->where('tanggal >', $tanggal);
        $this->db->order_by('tanggal', 'ASC');
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            return $cek->result();
        } else {
            return 0;
        }
    }

    function get_data_saldo_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->where('id_saldo_kas', $id);
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            return $cek->row_array();
        } else {
            return 0;
        }
    }

    function get_data_saldo()
    {
        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->order_by('tanggal', 'DESC');
        $cek =  $this->db->get();
        // if ($cek->num_rows() > 0) {
        return $cek->result();
        // } else {
        // return 0;
        // }
    }

    function get_total_saldo()
    {
        $this->db->select_sum('sisa');
        $this->db->from('t_saldo_kas');
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            $cek = $cek->row_array();
            return $cek['sisa'];
        } else {
            return 0;
        }
    }

    function get_total_pengeluaran()
    {
        $this->db->select_sum('keluar');
        $this->db->from('t_saldo_kas');
        $this->db->where('keluar !=', 0);
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            $cek = $cek->row_array();
            return $cek['keluar'];
        } else {
            return 0;
        }
    }

    function get_total_pemasukan()
    {
        $this->db->select_sum('masuk');
        $this->db->from('t_saldo_kas');
        $this->db->where('masuk !=', 0);
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            $cek = $cek->row_array();
            return $cek['masuk'];
        } else {
            return 0;
        }
    }
    function get_last_saldo()
    {
        $this->db->select('*');
        $this->db->from('t_saldo_kas');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(1);
        $cek =  $this->db->get();
        if ($cek->num_rows() > 0) {
            $cek = $cek->row_array();
            return $cek['sisa'];
        } else {
            return 0;
        }
    }
}

/* End of file Kas.php */
