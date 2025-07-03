<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // If user is not logged in, redirect to auth
        if (!$this->session->userdata('user_id')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
        $data['roles'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $role = $this->input->post('role');
            $this->db->set('role', $role);
            $this->db->insert('user_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role has been updated!</div>');
            redirect('admin/role');
        }
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $access = $this->db->get_where('user_access_menu', ['role_id' => $role_id])->result_array();
        $data['access_menu_ids'] = array_column($access, 'menu_id');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/role_access', $data);
        $this->load->view('templates/footer');
    }

    public function editRole($role_id)
    {
        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('user_id')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        if ($this->input->post()) {
            $role = htmlspecialchars($this->input->post('role', true));
            $this->db->set('role', $role);
            $this->db->where('id', $role_id);
            $this->db->update('user_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Role updated!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('admin/role');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/edit_role', $data);
        $this->load->view('templates/footer', $data);
    }

    public function deleteRole($role_id)
    {
        $this->db->where('id', $role_id);
        $this->db->delete('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Role deleted!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('admin/role');
    }

    public function changeAccess()
    {
        // Only allow AJAX
        if (!$this->input->is_ajax_request()) {
            show_404();
        }
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $query = $this->db->get_where('user_access_menu', $data);
        if ($query->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->where($data);
            $this->db->delete('user_access_menu');
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access changed!</div>');
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['status' => 'success']));
    }
}
