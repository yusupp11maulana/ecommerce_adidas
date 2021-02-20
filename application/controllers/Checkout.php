<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_checkout');
    }

    public function index($id)
    {
        $login = $this->session->userdata('id_cust');
        if($login){
            $data['user'] = $login;
            $data['nama'] = $this->Model_checkout->getNamecust($data['user']);
            $data['id'] = $id;
            $data['namasepatu'] = $this->Model_checkout->getNamesepatu($id);
            $data['gambar'] = $this->Model_checkout->getgambarsepatu($id);
            $data['harga'] = $this->Model_checkout->getharga($id);
            $data['title'] = 'Checkout';
            $this->load->view('main/checkout', $data);
        } else{
            redirect('login/logincust');
        }
    }

    public function insert(){
        $id = $this->input->post('kd', true);
        $this->form_validation->set_rules('namapemesan', 'name' ,'required');
        $this->form_validation->set_rules('alamat','alamat' ,'required');
        $this->form_validation->set_rules('size','size' ,'required');
        $this->form_validation->set_rules('jumlah','jumlah' ,'required');
        if($this->form_validation->run() == false){
            redirect('shop');
        } else{
            $this->Model_checkout->inserttrans();
        }
    }
}
