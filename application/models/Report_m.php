<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_m extends CI_Model {

  
    public function getDataTransaction($date_start, $date_end)
    {
        $this->db->select("a.invoice,a.sub_total,a.pay_total,a.created_at,b.student_name,c.student_class_name");
        $this->db->from("transactions a");
        $this->db->join("students b", "b.id = a.student_id");
        $this->db->join("student_classes c", "c.id = b.class_id");
        $this->db->where("SUBSTRING(a.created_at, 1, 10) >=", $date_start);
        $this->db->where("SUBSTRING(a.created_at, 1, 10) <=", $date_end);
        return $this->db->get();
    }    

}

