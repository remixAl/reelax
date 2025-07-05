<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        if ($this->session->userdata('user_id')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('email-username', 'Email or Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth-header', ['title' => 'Login Page']);
            $this->load->view('auth/login');
            $this->load->view('templates/auth-footer');
        } else {
            // Process login
            $this->_login();
        }
    }

    public function register()
    {
        if ($this->session->userdata('user_id')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[3]|max_length[20]|is_unique[user.username]', [
            'required' => 'Username is required',
            'min_length' => 'Username must be at least 3 characters',
            'max_length' => 'Username must not exceed 20 characters',
            'is_unique' => 'This username is already taken'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already been registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth-header', ['title' => 'Register Page']);
            $this->load->view('auth/register');
            $this->load->view('templates/auth-footer');
        } else {
            // Process registration
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Registration successful! Please login.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('auth');
        }
    }

    private function _login()
    {
        $this->form_validation->set_rules('email-username', 'Email or Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth-header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth-footer');
        } else {
            // Process login
            $email_username = $this->input->post('email-username', true);
            $password = $this->input->post('password', true);
            // Check for user by email or username
            $this->db->where('email', $email_username);
            $this->db->or_where('username', $email_username);
            $user = $this->db->get('user')->row_array();
            if ($user) {
                // User found, verify password
                if (password_verify($password, $user['password'])) {
                    // Password is correct, set session data
                    $this->session->set_userdata('user_id', $user['id']);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Login successful!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    redirect('admin');
                } else {
                    // Password is incorrect
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Wrong password!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    redirect('auth');
                }
            } else {
                // User not found
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">User not found!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        // Destroy user session and redirect to login
        $this->session->unset_userdata('user_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">You have been logged out.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('auth');
    }
}
