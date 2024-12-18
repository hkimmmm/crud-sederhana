<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berobat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berobat_model');
        $this->load->model('Pasien_model');
        $this->load->model('Poli_model');
        $this->load->model('Dokter_model');
    }

    public function index()
    {
        $data ['berobat'] = $this->Berobat_model->getData();
        $data ['poli'] = $this->Poli_model->getData();
        $data ['pasien'] = $this->Pasien_model->getData();

        $this->load->view('templates/header');
        $this->load->view('berobat/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['pasien'] = $this->Pasien_model->getData();
        $data['dokter'] = $this->Dokter_model->getData();
      
            $this->load->view('templates/header');
            $this->load->view('berobat/tambah', $data);
            $this->load->view('templates/footer');
    }

    public function prosesTambah()
    {
        $data = [   
            'no_transaksi'      => $this->input->post('no_transaksi'),
            'id_pasien'         => $this->input->post('id_pasien'),
            'tangggal_berobat'  => $this->input->post('tangggal_berobat'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'keluhan_pasien'    => $this->input->post('keluhan_pasien'),
            'biaya_admin'       => $this->input->post('biaya_admin'),
        ];
        $this->Berobat_model->create($data);

        return redirect('berobat');
    }

    public function hapus($id)
    {
        $this->Berobat_model->delete($id);
        return redirect('berobat');
    }     

    public function edit($id)
    {
        $data['pasien'] = $this->Pasien_model->getData();
        $data['dokter'] = $this->Dokter_model->getData();
        $data['berobat'] = $this->Berobat_model->getDataById($id);
      
            $this->load->view('templates/header');
            $this->load->view('berobat/edit', $data);
            $this->load->view('templates/footer');
    }

    public function prosesEdit($id)
    {
        $data = [   
            'id_pasien'         => $this->input->post('id_pasien'),
            'tangggal_berobat'  => $this->input->post('tangggal_berobat'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'keluhan_pasien'    => $this->input->post('keluhan_pasien'),
            'biaya_admin'       => $this->input->post('biaya_admin'),
        ];
        $this->Berobat_model->update($id, $data);

        return redirect('berobat');
    }
}