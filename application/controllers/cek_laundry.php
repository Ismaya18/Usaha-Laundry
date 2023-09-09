<?php

class cek_laundry Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_cek_laundry');
    }

    public function index()
    {
        $nama_konsumen = $this->input->post('nama_konsumen');
        $isi['data'] = $this->m_cek_laundry->cek_status($nama_konsumen);
        $isi['slider'] = $this->db->get('slider')->result();
        $this->load->view('frontend/header', $isi);
        $this->load->view('frontend/cek_laundry', $isi);
        $this->load->view('frontend/footer');
    }
}