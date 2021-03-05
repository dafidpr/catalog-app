<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_m');
    }

    public function index()
    {
        $this->data = [
            'title' => 'Product',
            'mod'   => 'mod_product'
        ];

        $this->render('product/index');
    }

    public function loadData()
    {
        $query = $this->Product_m->get_dataTable();
        $data = [];
        $no = $this->input->post('start');

        foreach($query as $i){
            $no++;
            $row = [];
            $row['no']       = $no;
            $row['id']       = $i->id;
            $row['name']     = $i->name;
            $row['police_number'] = $i->police_number;
            $row['type']    = $i->type;
            $row['year']     = $i->year;
            $row['color']     = $i->color;
            $row['cc']     = $i->cc;
            $row['price']     = $i->price;
            $row['sold']     = $i->sold;

            $data[] = $row;
        }

        $output = [
            'draw'           => $_POST['draw'],
            'recordsTotal'    => $this->Product_m->count_all(),
            'recordsFiltered' => $this->Product_m->count_filtered(),
            'data'           => $data
        ];

        echo json_encode($output);
    }

    public function add()
    {
        $this->data = [
            'title'  => 'Add Product',
            'mod'    => 'mod_product',
            'merk'   => $this->db->get('merk')->result(), 
            'action' => 'product/create',
        ];

        $this->render('product/form');
    }

    public function create()
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Nama Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'type',
                'label' => 'Tipe Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'police_number',
                'label' => 'Nomor Polisi',
                'rules' => 'required'
            ],
            [
                'field' => 'color',
                'label' => 'Warna Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'merk',
                'label' => 'Merk Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'year',
                'label' => 'Tahun',
                'rules' => 'required'
            ],
            [
                'field' => 'cc',
                'label' => 'CC Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'fuel',
                'label' => 'Bahan Bakar',
                'rules' => 'required'
            ],
            [
                'field' => 'transmission',
                'label' => 'Transmisi',
                'rules' => 'required'
            ],
            [
                'field' => 'mileage',
                'label' => 'Jarak Tempuh',
                'rules' => 'required'
            ],
            [
                'field' => 'condition',
                'label' => 'Kondisi',
                'rules' => 'required'
            ],
            [
                'field' => 'price',
                'label' => 'Harga',
                'rules' => 'required'
            ],
            [
                'field' => 'minimal_dp',
                'label' => 'Minimal DP',
                'rules' => 'required'
            ],
            [
                'field' => 'sold',
                'label' => 'Sold',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name' => form_error('name'),
                'type' => form_error('type'),
                'police_number' => form_error('police_number'),
                'color' => form_error('color'),
                'merk' => form_error('merk'),
                'year' => form_error('year'),
                'cc' => form_error('cc'),
                'fuel' => form_error('fuel'),
                'transmission' => form_error('transmission'),
                'mileage' => form_error('mileage'),
                'condition' => form_error('condition'),
                'price' => form_error('price'),
                'minimal_dp' => form_error('minimal_dp'),
                'sold' => form_error('sold'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Product_m->insert();

            echo $proses;
        }
    }

    public function edit($id)
    {
        $this->data = [
            'title'  => 'Edit Data',
            'mod'    => 'mod_product',
            'product'   => $this->db->get_where('products', ['id' => $id])->row(),
            'merk'   => $this->db->get('merk')->result(),
            'action' => 'product/update/'. $id
        ];
        
        $this->render('product/form');
    }

    public function update($id)
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Nama Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'type',
                'label' => 'Tipe Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'police_number',
                'label' => 'Nomor Polisi',
                'rules' => 'required'
            ],
            [
                'field' => 'color',
                'label' => 'Warna Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'merk',
                'label' => 'Merk Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'year',
                'label' => 'Tahun',
                'rules' => 'required'
            ],
            [
                'field' => 'cc',
                'label' => 'CC Kendaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'fuel',
                'label' => 'Bahan Bakar',
                'rules' => 'required'
            ],
            [
                'field' => 'transmission',
                'label' => 'Transmisi',
                'rules' => 'required'
            ],
            [
                'field' => 'mileage',
                'label' => 'Jarak Tempuh',
                'rules' => 'required'
            ],
            [
                'field' => 'condition',
                'label' => 'Kondisi',
                'rules' => 'required'
            ],
            [
                'field' => 'price',
                'label' => 'Harga',
                'rules' => 'required'
            ],
            [
                'field' => 'minimal_dp',
                'label' => 'Minimal DP',
                'rules' => 'required'
            ],
            [
                'field' => 'sold',
                'label' => 'Sold',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name' => form_error('name'),
                'type' => form_error('type'),
                'police_number' => form_error('police_number'),
                'color' => form_error('color'),
                'merk' => form_error('merk'),
                'year' => form_error('year'),
                'cc' => form_error('cc'),
                'fuel' => form_error('fuel'),
                'transmission' => form_error('transmission'),
                'mileage' => form_error('mileage'),
                'condition' => form_error('condition'),
                'price' => form_error('price'),
                'minimal_dp' => form_error('minimal_dp'),
                'sold' => form_error('sold'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->Product_m->update($id);

            echo $proses;
        }
    }

    public function destroy($id)
    {
        $proses = $this->Product_m->destroy($id);

        echo $proses;
    }

}