<?php
defined('BASEPATH') OR exit("No direct script access allowed");

class Dashboard  extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_m');
    }

    public function index()
    {
        $this->data = [
            'title'         => 'Dashboard',
            'log_login'     => $this->Dashboard_m->getLogLogin(),
            'mod'           => 'mod_dashboard',
        ];

        $this->render('dashboard/index');
    }

}
