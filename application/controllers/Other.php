<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Other extends CI_Controller
{
    public function dataSekolah()
    {
        $data['title'] = 'Data Sekolah';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Data Sekolah'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        // Load the view with the data
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('other/data-sekolah', $data);
        $this->load->view('templates/footer', $data);
    }
}
