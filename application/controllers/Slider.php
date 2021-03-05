<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Slider_m');
    }

    public function index()
    {
        $this->data = [
            'title' => 'Slider',
            'mod'   => 'mod_slider'
        ];

        $this->render('slider/index');
    }

    public function loadData()
    {
        $query = $this->Slider_m->get_dataTable();
        $data = [];
        $no = $this->input->post('start');

        foreach($query as $i){
            $no++;
            $row = [];
            $row['no']       = $no;
            $row['id']       = $i->id;
            $row['image']     = $i->image;
            $row['title']     = $i->title;
            $row['subtitle'] = $i->subtitle;

            $data[] = $row;
        }

        $output = [
            'draw'           => $_POST['draw'],
            'recordsTotal'    => $this->Slider_m->count_all(),
            'recordsFiltered' => $this->Slider_m->count_filtered(),
            'data'           => $data
        ];

        echo json_encode($output);
    }

    public function add()
    {
        $this->data = [
            'title'  => 'Add Slider',
            'mod'    => 'mod_slider',
            'action' => 'slider/create',
        ];

        $this->render('slider/form');
    }

    public function create()
    {
        $config = [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'subtitle',
                'label' => 'Subtitle',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'title'  => form_error('title'),
                'subtitle' => form_error('subtitle'),
                'status' => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Slider_m->insert();

            echo $proses;
        }
    }

    public function edit($id)
    {
        $this->data = [
            'title'  => 'Edit Data',
            'mod'    => 'mod_slider',
            'slider'   => $this->db->get_where('sliders', ['id' => $id])->row(),
            'action' => 'slider/update/'. $id
        ];
        
        $this->render('slider/form');
    }

    public function update($id)
    {
        $config = [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'subtitle',
                'label' => 'Subtitle',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'title'  => form_error('title'),
                'subtitle' => form_error('email'),
                'status' => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Slider_m->update($id);

            echo $proses;
        }
    }

    public function destroy($id)
    {
        $proses = $this->Slider_m->destroy($id);

        echo $proses;
    }

}