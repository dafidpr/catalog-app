<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Merk_m');
    }

    public function index()
    {
        $this->data = [
            'title' => 'Merk',
            'mod'   => 'mod_merk'
        ];

        $this->render('merk/index');
    }

    public function loadData()
    {
        $query = $this->Merk_m->get_dataTable();
        $data = [];
        $no = $this->input->post('start');

        foreach($query as $i){
            $no++;
            $row = [];
            $row['no']       = $no;
            $row['id']       = $i->id;
            $row['name']     = $i->name;

            $data[] = $row;
        }

        $output = [
            'draw'           => $_POST['draw'],
            'recordsTotal'    => $this->Merk_m->count_all(),
            'recordsFiltered' => $this->Merk_m->count_filtered(),
            'data'           => $data
        ];

        echo json_encode($output);
    }

    public function add()
    {
        $this->data = [
            'title'  => 'Add Merk',
            'mod'    => 'mod_merk',
            'action' => 'merk/create',
        ];

        $this->render('merk/form');
    }

    public function create()
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Merk Name',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name'            => form_error('name'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Merk_m->insert();

            echo $proses;
        }
    }

    public function edit($id)
    {
        $this->data = [
            'title'  => 'Edit Data',
            'mod'    => 'mod_merk',
            'merk'   => $this->db->get_where('merk', ['id' => $id])->row(),
            'action' => 'merk/update/'. $id
        ];
        
        $this->render('merk/form');
    }

    public function update($id)
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Merk Name',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name'            => form_error('name'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Merk_m->update($id);

            echo $proses;
        }
    }

    public function destroy($id)
    {
        $proses = $this->Merk_m->destroy($id);

        echo $proses;
    }

}