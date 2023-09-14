<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Videodisplay extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gzl', 'GZL');
        $this->load->model('Back/M_vid', 'VID');
    }

    public function index()
    {
        $data = array(
            'DataRunningText' => $this->db->order_by("date_g", "DESC")->limit(1)->get('t_running_text')->row_array(),
        );

        $this->load->view('templates/header_auth', $data);
        $this->load->view('back/vid/index');
        $this->load->view('templates/footer');
        $this->load->view('back/vid/index-js');
    }

    function video_upload_setting()
    {
        $config['upload_path'] = './storage/uploads_docs/';
        $config['allowed_types'] = 'mp4|avi|mkv|3gp';
        $config['max_size'] = 0;
        $config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('video_setting')) {

            $data_video = array(
                'id_video_display' => "1",
                'nama_file' => $this->upload->data('file_name'),
                'date_g' => date("Y-m-d H:i:s"),
            );

            if ($this->VID->check_video() == true) {
                $this->db->where('id_video_display', '1');
                $this->db->update('t_video_display', $data_video);
            } else {
                $this->db->insert('t_video_display', $data_video);
            }


            $this->GZL->show_msg('success', 'Video Display Berhasil Diubah !');
            // redirect('video-setting');
            echo "Upload Video Berhasil";
        } else {
            $this->GZL->show_msg('danger', 'Video Display Gagal Diubah !');
            // redirect('video-setting');
            echo "Upload Video Gagal " . $this->upload->display_errors();
        }
    }
}

/* End of file Videodisplay.php */
