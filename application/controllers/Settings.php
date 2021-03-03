<?php

defined('BASEPATH') or exit("No direct script access allowed");

class Settings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->data = [
            'title' => 'Settings',
            'mod'   => 'mod_setting',
        ];

        $this->render('setting/index');
    }

    public function loadData()
    {
        $query = $this->Setting_m->get_dataTable();
        $data = [];
        $no = $this->input->post('start');

        foreach ($query as $i) {
            $no++;
            $row = [];
            $row['no']       = $no;
            $row['id']       = $i->id;
            $row['groups']       = $i->groups;
            $row['meta_key']       = $i->meta_key;
            $row['meta_value']     = $i->meta_value;

            $data[] = $row;
        }

        $output = [
            'draw'           => $_POST['draw'],
            'recordsTotal'    => $this->Setting_m->count_all(),
            'recordsFiltered' => $this->Setting_m->count_filtered(),
            'data'           => $data
        ];

        echo json_encode($output);
    }

    public function add()
    {
        $this->data = [
            'title'  => 'Add Settings',
            'mod'    => 'mod_setting',
            'action' => 'setting/create',
        ];

        $this->render('setting/form');
    }

    public function create()
    {
        $config = [
            [
                'field' => 'metaKey',
                'label' => 'Meta Key',
                'rules' => 'required'
            ],
            // [
            //     'field' => 'metaValue',
            //     'label' => 'Meta Value',
            //     'rules' => 'required'
            // ],
        ];

        $this->form_validation->set_rules($config);


        if ($this->form_validation->run() == false) {
            $error = [
                'metaKey'  => form_error('metaKey'),
                'metaValue'    => form_error('metaValue'),
                'status'       => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Setting_m->insert();

            echo $proses;
        }
    }

    public function edit($id)
    {
        $this->data = [
            'title'  => 'Edit Settings',
            'mod'    => 'mod_setting',
            'item'   => $this->db->get_where('settings', ['id' => $id])->row(),
            'action' => 'settings/update/' . $id
        ];

        $this->render('setting/edit');
    }

    public function update($id)
    {
        $config = [
            [
                'field' => 'metaKey',
                'label' => 'Meta Key',
                'rules' => 'required'
            ],
            // [
            //     'field' => 'metaValue',
            //     'label' => 'Meta Value',
            //     'rules' => 'required'
            // ],
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == false) {
            $error = [
                'metaKey'  => form_error('metaKey'),
                'metaValue'    => form_error('metaValue'),
                'status'       => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Setting_m->update($id);

            echo $proses;
        }
    }

    public function destroy($id)
    {
        $proses = $this->Setting_m->destroy($id);

        echo $proses;
    }
}
