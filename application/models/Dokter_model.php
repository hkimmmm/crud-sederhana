<?php

class Dokter_model extends CI_Model{
    
    public function getData()
    {
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->join('poli', 'poli.id_poli = dokter.id_poli');
        return $this->db->get()->result();
    }
}