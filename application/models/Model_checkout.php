<?php

class Model_checkout extends CI_model
{
    public function getNamecust($idcust){
        $this->db->where('id_cust', $idcust);
        $this->db->select('nama_cust');
        $hasil = $this->db->get('customer')->result_array();
        foreach ($hasil as $h):
            $nama = $h['nama_cust'];
        endforeach;
        return $nama;
    }

    public function getNamesepatu($id){
        $this->db->select('nama_produk');
        $this->db->where('kode_produk', $id);
        $hasil = $this->db->get('produk')->result_array();
        foreach ($hasil as $h):
            $nama = $h['nama_produk'];
        endforeach;
        return $nama;
    }

    public function getgambarsepatu($id){
        $this->db->select('img_produk');
        $this->db->where('kode_produk', $id);
        $hasil = $this->db->get('produk')->result_array();
        foreach ($hasil as $h):
            $nama = $h['img_produk'];
        endforeach;
        return $nama;
    }

    public function getharga($id){
        $this->db->select('harga');
        $this->db->where('kode_produk', $id);
        $hasil = $this->db->get('produk')->result_array();
        foreach ($hasil as $h):
            $harga = $h['harga'];
        endforeach;
        return $harga;
    }

    public function inserttrans(){
        $query = $this->db->query("SELECT MAX(id_transaksi) as id FROM transaksi")->row_array()['id'];
        $urutan = (int) substr($query, 4, 5);
        $urutan++;
        $simbol = "TOAS";
        $kodenya = $simbol . sprintf("%05s", $urutan);
        $harga = $this->input->post('harga', true);
        $jumlah = $this->input->post('jumlah', true);
        $total = $harga * $jumlah;
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
        $data = array(
            "id_transaksi" => $kodenya,
            "kode_produk" => $this->input->post('kd', true),
            "id_cust" => $this->input->post('id_cust', true),
            "nama_pemesan" => $this->input->post('namapemesan', true),
            "alamat_cust" => $this->input->post('alamat', true),
            "jml_beli" => $jumlah,
            "size" => $this->input->post('size', true),
            "total_bayar" => $total,
            "tgl_transaksi" => $tanggal,
            "status_trans" => "Bayar Sekarang",
        );
        $this->db->insert('transaksi', $data);
        redirect('riwayat');
    }
}
