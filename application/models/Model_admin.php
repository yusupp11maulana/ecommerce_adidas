<?php

class Model_admin extends CI_model
{
    public function getTransaksi(){
        $this->db->join('produk', 'produk.kode_produk=transaksi.kode_produk');
        return $this->db->get('transaksi')->result_array();
    }
    // METHOD STATUS : Bayar Sekarang, Terbayar, Refund, Accepted
    // METHOD KETERANGAN : Alasan Refund , REsi

    public function pesanacc($id){
        date_default_timezone_set('Asia/Jakarta');
        $jam = date('H');
        $tahun = date('Y');
        $tanggal = date('d');
        $menit = date('i');
        $bulan = date('m');
        $resi = "RES00".$jam.$tahun.$tanggal.$menit.$bulan;
        $this->db->where('id_transaksi',$id);
        $data= array(
            "status_trans" => "Accepted",
            "ketnya" => $resi,
        );
        $this->db->update('transaksi', $data);
        redirect('admin');
    }

    public function refundord($id){
        $this->db->where('id_transaksi',$id);
        $data= array(
            "status_trans" => "Refund",
            "ketnya" => $this->input->post('refund', true),
        );
        $this->db->update('transaksi', $data);
        redirect('admin');
    }

    public function getpasang(){
        return $this->db->select_sum('jml_beli', 'jumlah');
    }
}
