<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }

    public function index()
    {
        $this->data = [
            'title' => 'User',
            'mod'   => 'mod_user'
        ];

        $this->render('user/index');
    }

    public function loadData()
    {
        $query = $this->User_m->get_dataTable();
        $data = [];
        $no = $this->input->post('start');

        foreach($query as $i){
            $no++;
            $row = [];
            $row['no']       = $no;
            $row['id']       = $i->id;
            $row['name']     = $i->name;
            $row['username'] = $i->username;
            $row['email']    = $i->email;
            $row['role']     = $i->role;

            $data[] = $row;
        }

        $output = [
            'draw'           => $_POST['draw'],
            'recordsTotal'    => $this->User_m->count_all(),
            'recordsFiltered' => $this->User_m->count_filtered(),
            'data'           => $data
        ];

        echo json_encode($output);
    }

    public function add()
    {
        $this->data = [
            'title'  => 'Add User',
            'mod'    => 'mod_user',
            'action' => 'user/create',
        ];

        $this->render('user/form');
    }

    public function create()
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'required'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|matches[confirmPass]'
            ],
            [
                'field' => 'confirmPass',
                'label' => 'Confirm Password',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name'            => form_error('name'),
                'email'           => form_error('email'),
                'role'            => form_error('role'),
                'username'        => form_error('username'),
                'password'        => form_error('password'),
                'confirmPass' => form_error('confirmPass'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->User_m->insert();

            echo $proses;
        }
    }

    public function edit($id)
    {
        $this->data = [
            'title'  => 'Edit Data',
            'mod'    => 'mod_user',
            'user'   => $this->db->get_where('users', ['id' => $id])->row(),
            'action' => 'user/update/'. $id
        ];
        
        $this->render('user/form');
    }

    public function update($id)
    {
        $config = [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'required'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'name'            => form_error('name'),
                'email'           => form_error('email'),
                'role'            => form_error('role'),
                'username'        => form_error('username'),
                'password'        => form_error('password'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->User_m->update($id);

            echo $proses;
        }
    }

    public function changePassword($id)
    {
        $this->data = [
            'title'  => 'Change Password',
            'mod'    => 'mod_user',
            'action' => 'user/changePasswordUpdate/' . $id
        ];

        $this->render('user/change_password');
    }

    public function changePasswordUpdate($id)
    {
        $config = [
            [
                'field' => 'oldPassword',
                'label' => 'Old Password',
                'rules' => 'required'
            ],
            [
                'field' => 'newPassword',
                'label' => 'New Password',
                'rules' => 'required|matches[confirmPassword]'
            ],
            [
                'field' => 'confirmPassword',
                'label' => 'Confirm Password',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == false){
            $error = [
                'oldPassword'     => form_error('oldPassword'),
                'newPassword'     => form_error('newPassword'),
                'confirmPassword' => form_error('confirmPassword'),
                'status'          => 400
            ];

            echo json_encode($error);
        } else {
            $proses = $this->User_m->changePassword($id);
    
            echo $proses;
        }
    }

    public function destroy($id)
    {
        $proses = $this->User_m->destroy($id);

        echo $proses;
    }

}