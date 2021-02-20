<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_payments');
    }
    public function index()
    {
        $login = $this->session->userdata('id_cust');
        if($login){
            $data['user'] = $login;
            $data['title'] = 'Riwayat';
            $data['transaksi'] = $this->Model_payments->getTrans();
            $this->load->view('main/riwayat', $data);
        } else{
            redirect('login/logincust');
        }
    }
}
