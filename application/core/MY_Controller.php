<?php

class MY_Controller extends CI_Controller
{

    protected $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("my");
        if (!loginStatus()) {
            redirect('login');
        }

        $this->form_validation->set_error_delimiters('', '');
    }

    public function render($render)
    {
        //load header
        $this->load->view('template/header', $this->data);

        //load navbar
        $this->load->view('template/navbar', $this->data);

        //load sidebar
        $this->load->view('template/sidebar', $this->data);

        //load content
        $this->load->view($render, $this->data);

        //load footer
        $this->load->view('template/footer', $this->data);
    }
}
