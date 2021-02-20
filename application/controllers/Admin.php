<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_admin');
    }

    public function index()
    {
        $login = $this->session->userdata('admin');
        if($login){
            $data['user'] = $login;
            $data['transaksi'] = $this->Model_admin->getTransaksi();
            $this->load->view('main/admin', $data);
        } else{
            redirect(base_url());
        }
    }

    public function terima($id){
        $this->Model_admin->pesanacc($id);
    }

    public function refund($id){
        $this->Model_admin->refundord($id);
    }
}
