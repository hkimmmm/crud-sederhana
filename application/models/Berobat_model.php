<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berobat_model extends CI_Model {
    public function getData() {
        $this->db->select('
        berobat.*,
        pasien.nama_pasien,
        pasien.tanggal_lahir,
        pasien.jenis_kelamin,
        pasien.alamat,
        dokter.nama_dokter,
        TIMESTAMPDIFF(YEAR, pasien.tanggal_lahir, CURDATE()) AS usia,
        dokter.id_poli
    ');
    $this->db->from('berobat');
    $this->db->join('pasien', 'pasien.id_pasien = berobat.id_pasien');
    $this->db->join('dokter', 'dokter.id_dokter = berobat.id_dokter');

        return $this->db->get()->result();
    }

    public function create($data)
    {
            $data = $this->db->insert('berobat', $data);
            return $data;
    }

    public function delete($id)
    {
        $data = $this->db->where('no_transaksi', $id)
            ->delete('berobat');
    
        return $data;
    }
    
    public function getDataById($id)
    {
        $data = $this->db->select('*')
            ->from('berobat')
            ->where('no_transaksi', $id)
            ->get()
            ->row();

        return $data;
    }

    public function update($id, $data)
    {
        $this->db->where('no_transaksi', $id);
        $this->db->update('berobat', $data);
    }
}
?>