<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli_model extends CI_Model{
    
    public function getData() 
    {
        $this->db->select('*');
        $this->db->from('poli');
        return $this->db->get()->result();
    }
}