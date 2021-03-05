<?php

if (!function_exists('loginStatus')) {
    function loginStatus()
    {
        $ci = &get_instance();
        if (isset($ci->session->login_status)) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('infoLogin')) {
    function infoLogin()
    {
        $ci = &get_instance();
        $result = $ci->db->get_where('users', ['id' => $ci->session->userdata('user_id')]);
        if ($result) {
            return $result->row();
        } else {
            return [];
        }
    }
}

if (!function_exists('getSettings')) {
    function getSettings($options)
    {
        $ci = &get_instance();
        $result = $ci->db->get_where('settings', ['meta_key' => $options]);
        if ($result) {
            return $result->row()->meta_value;
        } else {
            return [];
        }
    }
}

