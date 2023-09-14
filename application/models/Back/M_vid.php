<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_vid extends CI_Model
{
    function check_video()
    {
        $tabel = 't_video_display';

        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where('id_video_display', '1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

/* End of file M_vid.php */
