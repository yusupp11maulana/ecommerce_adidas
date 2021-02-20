<?php

class Model_shop extends CI_model
{
    public function getProduk(){
        return $this->db->get('produk')->result_array();
    }
}
