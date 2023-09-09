<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_cek_laundry extends CI_Model {

    public function cek_status($nama_konsumen)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('konsumen', 'transaksi.kode_konsumen = konsumen.kode_konsumen');
        $this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket');
        $this->db->where('konsumen.nama_konsumen', $nama_konsumen);
        return $this->db->get()->result();
    }

}