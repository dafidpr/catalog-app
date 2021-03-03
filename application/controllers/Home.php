<?php

defined('BASEPATH') or exit("No direct script access allowed");

class Home extends MY_Controller
{
    public function index()
    {
        $this->data = [
            'title' => 'Home',
            'content' => 'home/index'
        ];

        $this->load->view('home/main', $this->data);
    }

    public function detail()
    {
        $this->data = [
            'title' => 'Detail',
            'content' => 'home/detail'
        ];

        $this->load->view('home/main', $this->data);
    }
    public function contact()
    {
        $this->data = [
            'title' => 'Contact',
            'content' => 'home/contact'
        ];

        $this->load->view('home/main', $this->data);
    }
}
