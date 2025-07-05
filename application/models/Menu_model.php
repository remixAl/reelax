<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function get_menu()
    {
        // Example static menu data, replace with DB query if needed
        return [
            [
                'title' => 'Dashboard',
                'icon' => 'bx bx-home-circle',
                'url' => base_url('dashboard'),
                'active' => uri_string() == 'dashboard',
            ],
            [
                'title' => 'Menu',
                'icon' => 'bx bx-info-circle',
                'url' => base_url('admin/about'),
                'active' => uri_string() == 'admin/about',
            ],
            [
                'title' => 'Logout',
                'icon' => 'bx bx-power-off',
                'url' => '#', // Will be handled by modal
                'active' => false,
                'logout' => true
            ],
        ];
    }

    public function get_menu_with_submenu()
    {
        // Get all menus (ignore is_active on user_menu)
        $menus = $this->db->get('user_menu')->result_array();
        $result = [];
        foreach ($menus as $menu) {
            // Get only active submenus for each menu
            $submenus = $this->db->get_where('user_sub_menu', [
                'menu_id' => $menu['id'],
                'is_active' => 1
            ])->result_array();
            if (!empty($submenus)) {
                $menu['submenus'] = $submenus;
                $result[] = $menu;
            }
        }
        return $result;
    }
}
