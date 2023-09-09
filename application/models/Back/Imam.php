<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Imam extends CI_Model
{

    public function get_data_imam()
    {
        $this->db->select('*');
        $this->db->from('t_jadwal_imam_khatib');
        $this->db->where('status', '1');
        $this->db->order_by('tanggal', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
}

/* End of file Imam.php */
