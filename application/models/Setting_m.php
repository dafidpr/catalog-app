<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setting_m extends CI_Model
{
    protected $table = 'settings';
    protected $column_orders = [null, 'groups', 'meta_key', 'meta_value', null];
    protected $column_search = ['groups', 'meta_key', 'meta_value'];
    protected $order = ['id' => 'asc'];

    public function get_query()
    {
        $this->db->from($this->table);
        $i = 0;

        foreach ($this->column_search as $item) {
            if (isset($_POST['search'])) {
                if ($i == 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) {
                    $this->db->group_end();
                }
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_orders[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $this->db->order_by(key($this->order), $this->order[key($this->order)]);
        }
    }

    public function get_dataTable()
    {
        $this->get_query();
        if ($_POST['length'] != -1)
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
        if (isset($_FILES['metaValue'])) {
            $imageName = "img_" . rand(0, 9999999) . "_" . rand(0, 9999999) . '_' . rand(0, 9999999);
            $this->uploadImage($imageName);

            $meta_value = $imageName . "." . explode("/", $_FILES['metaValue']['type'])[1];
        } else {
            $meta_value = $this->input->post('metaValue', true);
        }

        $config = [
            'id' => '',
            'groups' => $this->input->post('metaValueType', true),
            'meta_key' => $this->input->post('metaKey', true),
            'meta_value' => $meta_value
        ];

        try {
            $this->db->insert($this->table, $config);

            $data = [
                'status' => 200,
                'message'  => 'Data has been added'
            ];
        } catch (Exception $e) {
            $data = [
                'status'  => 500,
                'message' => $e->getMessage()
            ];
        }

        return json_encode($data);
    }

    public function update($id)
    {
        $data = $this->db->get_where($this->table, ['id' => $id])->row();
        if ($data->groups == 'image') {
            if ($_FILES['metaValue']['name'] != '') {
                unlink("assets/img/" . $data->meta_value);
                $imageName = "img" . rand(0, 999999) . "_" . rand(0, 999999) . "_" . rand(0, 999999);
                $this->uploadImage($imageName);

                $meta_value = $imageName . "." . explode("/", $_FILES['metaValue']['type'])[1];
            } else {
                $meta_value = $data->meta_value;
            }
        } else {
            $meta_value = $this->input->post('metaValue', true);
        }


        $config = [
            'meta_key' => $this->input->post('metaKey', true),
            'meta_value' => $meta_value
        ];

        try {
            $this->db->where('id', $id);
            $this->db->update($this->table, $config);

            $data = [
                'status' => 200,
                'message'  => 'Data has been updated'
            ];
        } catch (Exception $e) {
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
            if ($this->db->get_where($this->table, ['id' => $id])->row()->groups == 'image') {
                unlink("assets/img/" . $this->db->get_where($this->table, ['id' => $id])->row()->meta_value);
            }
            $this->db->where('id', $id);
            $this->db->delete($this->table);

            $data = [
                'status'  => 200,
                'message' => 'Data has been deleted'
            ];
        } catch (Exception $e) {
            $data = [
                'status'  => 400,
                'message' => $e->getMessage()
            ];
        }

        return json_encode($data);
    }

    public function uploadImage($imageName)
    {
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $imageName;
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);
        $this->upload->do_upload('metaValue');
    }
}
