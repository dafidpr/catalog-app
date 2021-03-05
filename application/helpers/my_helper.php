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

if ( ! function_exists('redirectRefresh'))
{
    function redirectRefresh($uri = '', $method = 'location', $wait_time = 0, $http_response_code = 302)
    {
        switch($method)
        {
            case 'refresh' : header("Refresh:".$wait_time.";url=".site_url($uri));
            break;
            default : header("Location: ".site_url($uri), TRUE, $http_response_code);
            break;
        }
        exit;
    }
}
