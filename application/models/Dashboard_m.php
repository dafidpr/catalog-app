<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_m extends CI_Model {

    public function getLogLogin()
    {
        $this->db->from('log_login a');
        $this->db->join('users b', 'a.user_id=b.id', 'inner');
        $this->db->select(['a.*', 'b.name']);
        $this->db->order_by('id', 'desc');
        return $this->db->get();
    }
    

}