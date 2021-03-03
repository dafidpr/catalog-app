<?php
defined('BASEPATH') OR exit("No direct script access allowed");

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
        $this->load->library('form_validation');
        $this->load->helper('my');
    }

    public function login()
    {
        if(loginStatus()){
            redirect('dashboard');
        }

        $this->data = [
            'title'   => "Login",
            'mod'     => "mod_auth",
        ];

        $this->load->view('auth/login', $this->data);
    }

    public function postLogin()
    {
        if(loginStatus()){
            redirect('dashboard');
        }

        $config = [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('', '');

        if($this->form_validation->run() == false){
            $error = [
                'username' => form_error('username'),
                'password' => form_error('password'),
                'status'   => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->User_m->login('users');
            
            echo $proses;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('login');
    }

}
