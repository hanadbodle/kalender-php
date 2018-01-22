<?php

class birthday_model extends CI_Model{
public function __construct(){

$this->load->database();

}
public function get_birthdays()
{
       
            
            $this->db->order_by('month', 'ASC');
            $query = $this->db->get('birthdays');
            return $query->result();
        }

    }