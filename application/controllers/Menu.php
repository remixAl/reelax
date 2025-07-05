<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim|is_unique[user_menu.menu]', [
            'required' => 'Menu name is required.',
            'is_unique' => 'This menu already exists.'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Menu Management';
            $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
            $data['menu'] = $this->db->get('user_menu')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('menu/index');
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'menu' => htmlspecialchars($this->input->post('menu', true)),
            ];
            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">New menu added!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('menu');
        }
    }

    public function editMenu($id)
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Menu';
            $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
            $data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('menu/edit_menu');
            $this->load->view('templates/footer', $data);
        } else {
            $menu = htmlspecialchars($this->input->post('menu', true));
            $this->db->set('menu', $menu);
            $this->db->where('id', $id);
            $this->db->update('user_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Menu updated!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Menu deleted!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('menu');
    }

    public function subMenu()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'trim');
        $this->form_validation->set_rules('is_active', 'Is Active', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sub Menu Management';
            $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();

            $this->db->select('user_sub_menu.*, user_menu.menu');
            $this->db->from('user_sub_menu');
            $this->db->join('user_menu', 'user_sub_menu.menu_id = user_menu.id');
            $data['subMenu'] = $this->db->get()->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('menu/submenu');
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title', true)),
                'menu_id' => htmlspecialchars($this->input->post('menu_id', true)),
                'url' => htmlspecialchars($this->input->post('url', true)),
                'icon' => htmlspecialchars($this->input->post('icon', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true)) ? 1 : 0,
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">New sub menu added!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('menu/subMenu');
        }
    }

    public function editSubMenu($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'trim');
        $this->form_validation->set_rules('is_active', 'Is Active', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Sub Menu';
            $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
            $data['subMenu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
            $data['menu'] = $this->db->get('user_menu')->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('menu/edit_submenu');
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title', true)),
                'menu_id' => htmlspecialchars($this->input->post('menu_id', true)),
                'url' => htmlspecialchars($this->input->post('url', true)),
                'icon' => htmlspecialchars($this->input->post('icon', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true)) ? 1 : 0,
            ];
            $this->db->where('id', $id);
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Sub menu updated!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('menu/subMenu');
        }
    }

    public function deleteSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Sub menu deleted!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('menu/subMenu');
    }
}
