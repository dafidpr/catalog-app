<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angsuran_m extends CI_Model {

    protected $table = 'installments';
    protected $column_orders = [null, 'name', 'periode', null];
    protected $column_search = ['name', 'periode'];
    protected $order = ['id' => 'asc'];

    public function get_query()
    {
        $this->db->from($this->table);

        $i = 0;

        foreach($this->column_search as $item){
            if(isset($_POST['search'])){
                if($i == 0){
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) -1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }

        if(isset($_POST['order'])){
            $this->db->order_by($this->column_orders[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if(isset($this->order)){
            $this->db->order_by(key($this->order), $this->order[key($this->order)]);
        }
    }

    public function get_dataTable()
    {
        $this->get_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->get_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function insert()
    {
        $config = [
            'name'  => $this->input->post('name', true),
            'periode'  => $this->input->post('periode', true)
        ];

        try{
            $this->db->insert($this->table, $config);

            $data = [
                'status' => 200,
                'message'  => 'Data has been added'
            ];
        } catch(Exception $e){
            $data = [
                'status'  => 500,
                'message' => $e->getMessage()
            ];
        }

        return json_encode($data);
    }

    public function update($id)
    {
        $config = [
            'name'      => $this->input->post('name', true),
            'periode'      => $this->input->post('periode', true),
        ];

        try{
            $this->db->where('id', $id);
            $this->db->update($this->table, $config);

            $data = [
                'status' => 200,
                'message'  => 'Data has been updated'
            ];
        } catch(Exception $e){
            $data = [
                'status'  => 500,
                'message' => $e->getMessage()
            ];
        }

        return json_encode($data);
    }

    public function destroy($id)
    {
        
        try {
            $this->db->where('id', $id);
            $this->db->delete($this->table);
            $this->session->set_flashdata('message', 'Data has been deleted');

            $data = [
                'status'  => 200,
                'message' => 'Data has been deleted'
            ];
        } catch(Exception $e){
            $data = [
                'status'  => 400,
                'message' => $e->getMessage()
            ];
        }
        return json_encode($data);
    }

}