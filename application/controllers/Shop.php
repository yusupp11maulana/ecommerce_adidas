<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_shop');
    }

    public function index()
    {
        $login = $this->session->userdata('id_cust');
        if($login){
            $data['user'] = $login;
            $data['produk']= $this->Model_shop->getProduk();
            $data['title'] = 'Shop';
            $this->load->view('main/shop', $data);
        } else{
            redirect('login/logincust');
        }
    }
}
