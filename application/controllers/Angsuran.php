<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angsuran extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Angsuran_m');
    }

    public function index()
    {
        $this->data = [
            'title' => 'Angsuran',
            'mod'   => 'mod_angsuran'
        ];

        $this->render('angsuran/index');
    }

    public function loadData()
    {
        $query = $this->Angsuran_m->get_dataTable();
        $data = [];
        $no = $this->input->post('start');

        foreach($query as $i){
            $no++;
            $row = [];
            $row['no']       = $no;
            $row['id']       = $i->id;
            $row['name']     = $i->name;
            $row['periode']     = $i->periode;

            $data[] = $row;
        }

        $output = [
            'draw'           => $_POST['draw'],
            'recordsTotal'    => $this->Angsuran_m->count_all(),
            'recordsFiltered' => $this->Angsuran_m->count_filtered(),
            'data'           => $data
        ];

        echo json_encode($output);
    }

    public function add()
    {
        $this->data = [
            'title'  => 'Add Angsuran',
            'mod'    => 'mod_angsuran',
            'action' => 'angsuran/create',
        ];

        $this->render('angsuran/form');
    }

    public function create()
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Nama Angsuran',
                'rules' => 'required'
            ],
            [
                'field' => 'periode',
                'label' => 'Periode',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name'            => form_error('name'),
                'periode'            => form_error('periode'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Angsuran_m->insert();

            echo $proses;
        }
    }

    public function edit($id)
    {
        $this->data = [
            'title'  => 'Edit Data',
            'mod'    => 'mod_angsuran',
            'angsuran'   => $this->db->get_where('installments', ['id' => $id])->row(),
            'action' => 'angsuran/update/'. $id
        ];
        
        $this->render('angsuran/form');
    }

    public function update($id)
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Nama Angsuran',
                'rules' => 'required'
            ],
            [
                'field' => 'periode',
                'label' => 'Periode',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name'            => form_error('name'),
                'periode'            => form_error('periode'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Angsuran_m->update($id);

            echo $proses;
        }
    }

    public function destroy($id)
    {
        $proses = $this->Angsuran_m->destroy($id);

        echo $proses;
    }

}