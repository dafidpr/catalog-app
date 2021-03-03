<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    protected $table = 'users';
    protected $column_orders = [null, 'name', 'username', 'email', 'role', null];
    protected $column_search = ['name', 'username', 'email', 'role'];
    protected $order = ['id' => 'asc'];

    public function get_query()
    {
        $this->db->from($this->table);
        $this->db->where('is_deleted', 0);

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

    public function login($table)
    {
        $config = [
            'username' => $this->input->post('username', true)
        ];

        $check = $this->db->get_where($table, $config);

        if($check->num_rows() > 0){
            $check = $check->row();
    
            if(password_verify($this->input->post('password'), $check->password)){
                $this->session->set_userdata([
                    'login_status' => true,
                    'user_id'      => $check->id
                ]);

                $check_log = $this->db->get('log_login')->num_rows();

                if($check_log == 10){
                    $id = $this->db->query('SELECT MIN(id) as id FROM log_login')->row();
                    $id = $id->id;
                    $this->db->delete('log_login', ['id' => $id]);
                }

                date_default_timezone_set('asia/jakarta');
                $log_login = [
                    'id'      => '',
                    'user_id' => $check->id,
                    'date'    => date('Y-m-d'),
                    'time'    => date('H:i')
                ];

                $this->db->insert('log_login', $log_login);
    
                $data = [
                    'status' => 200,
                    'pesan'  => 'Success'
                ];
            } else {
                $data = [
                    'status'   => 400,
                    'password' => 'Wrong Password'
                ];
            }
        } else {
            $data = [
                'status'   => 400,
                'username' => 'Username has not registered' . $this->input->post('username')
            ];
        }
        
        return json_encode($data);
    }

    public function insert()
    {
        $config = [
            'id'        => '',
            'username'  => $this->input->post('username', true),
            'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'name'      => $this->input->post('name', true),
            'email'     => $this->input->post('email', true),
            'is_deleted' => 0,
            'role'      => $this->input->post('role', true)
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
            'username'  => $this->input->post('username', true),
            'name'      => $this->input->post('name', true),
            'email'     => $this->input->post('email', true),
            'is_deleted' => 0,
            'role'      => $this->input->post('role', true)
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

    public function changePassword($id)
    {
        $check = $this->db->get_where($this->table, ['id' => $id])->row();

        if(password_verify($this->input->post('oldPassword'), $check->password)){
            $config = [
                'password' => password_hash($this->input->post('newPassword'), PASSWORD_DEFAULT)
            ];
    
            try {
                $this->db->where('id', $id);
                $this->db->update($this->table, $config);

                $this->session->set_flashdata('message', 'Password has been changed');
    
                $data = [
                    'status' => 200,
                    'message' => 'Password has been changed'
                ];
            } catch(Exception $e){
                $data = [
                    'status'  => 500,
                    'message' => $e->getMessage()
                ];
            }
        } else {
            $data = [
                'status' => 400,
                'oldPassword' => "Old Password doesn't match"
            ];
        }

        return json_encode($data);
    }

    public function destroy($id)
    {
        if($id == $this->session->user_id){
            $data = [
                'status'  => 400,
                'message' => 'Access denied'
            ];
        } else {
            try {
                $this->db->where('id', $id);
                $this->db->update($this->table, ['is_deleted' => 1]);
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
        }

        return json_encode($data);
    }

}