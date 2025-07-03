<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_query_builder $db
 * @property CI_Session $session
 */
class CBT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        // If user is not logged in, redirect to auth
        if (!$this->session->userdata('user_id')) {
            redirect('auth');
        }
    }

    public function uploadSoal()
    {
        $this->load->database();
        $this->load->library('session');
        $data['title'] = 'Upload Soal';
        // Fetch icon from database, assuming a 'menu' table with 'name' and 'icon' columns
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Upload Soal'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('cbt/upload-soal', $data);
        $this->load->view('templates/footer', $data);
    }

    public function bankSoal()
    {
        $this->load->database();
        $this->load->library('session');
        $data['title'] = 'Bank Soal';
        // Fetch icon from database, assuming a 'menu' table with 'name' and 'icon' columns
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Bank Soal'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        // Load the bank soal view
        $this->load->view('cbt/bank-soal', $data);
        $this->load->view('templates/footer', $data);
    }

    public function daftarJenisUjian()
    {
        $this->load->database();
        $this->load->library('session');
        $data['title'] = 'Daftar Jenis Ujian';
        // Fetch icon from database, assuming a 'menu' table with 'name' and 'icon' columns
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Daftar Jenis Ujian'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        // Load the daftar jenis ujian view
        $this->load->view('cbt/daftar-jenis-ujian', $data);
        $this->load->view('templates/footer', $data);
    }

    public function daftarRuangan()
    {
        $this->load->database();
        $this->load->library('session');
        $data['title'] = 'Daftar Ruangan';
        // Fetch icon from database, assuming a 'menu' table with 'name' and 'icon' columns
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Daftar Ruangan'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        // Load the daftar ruangan view
        $this->load->view('cbt/daftar-ruangan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function penjadwalan()
    {
        $this->load->database();
        $this->load->library('session');
        $data['title'] = 'Penjadwalan';
        // Fetch icon from database, assuming a 'menu' table with 'name' and 'icon' columns
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Penjadwalan'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        // Load the penjadwalan view
        $this->load->view('cbt/penjadwalan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pelaksanaan()
    {
        $this->load->database();
        $this->load->library('session');
        $data['title'] = 'Pelaksanaan';
        // Fetch icon from database, assuming a 'menu' table with 'name' and 'icon' columns
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Pelaksanaan'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        // Load the pelaksanaan view
        $this->load->view('cbt/pelaksanaan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function penilaian()
    {
        $this->load->database();
        $this->load->library('session');
        $data['title'] = 'Penilaian';
        // Fetch icon from database, assuming a 'menu' table with 'name' and 'icon' columns
        $menu = $this->db->get_where('user_sub_menu', ['title' => 'Penilaian'])->row_array();
        $data['icon'] = $menu ? $menu['icon'] : 'default-icon';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        // Load the penilaian view
        $this->load->view('cbt/penilaian', $data);
        $this->load->view('templates/footer', $data);
    }
}
