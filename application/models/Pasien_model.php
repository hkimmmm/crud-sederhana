<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model{
    
    public function getData() 
    {
        $this->db->select('*');
        $this->db->from('pasien');
        return $this->db->get()->result();
    }
}