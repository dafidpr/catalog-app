<?php

defined('BASEPATH') or exit("No direct script access allowed");

class Home extends MY_Controller
{
    public function index()
    {
        $this->data = [
            'title' => 'Home',
            'content' => 'home/index',
            'product' => $this->db->query("SELECT a.*, b.name AS merk_name FROM products a, merk b WHERE a.merk_id = b.id")->result()
        ];

        $this->load->view('home/main', $this->data);
    }

    public function detail($id)
    {
        $this->data = [
            'title' => 'Detail',
            'content' => 'home/detail',
            'product' => $this->db->query("SELECT a.*, b.name AS merk_name FROM products a, merk b WHERE a.merk_id = b.id AND a.id = '$id'")->row()
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
