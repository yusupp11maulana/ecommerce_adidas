<?php

class Model_payments extends CI_model
{
    public function getTrans(){
        $this->db->join('produk', 'produk.kode_produk=transaksi.kode_produk');
        return $this->db->get('transaksi')->result_array();
    }
    public function uploadfoto($trf){
        $id = $this->input->post('id', true);
        $data=array(
            "norek_cust" => $this->input->post('norek', true),
            "bukti_pembayaran" =>$trf,
            "status_trans" => "Terbayar",
        );
        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi', $data);
        redirect('riwayat');
    }
}