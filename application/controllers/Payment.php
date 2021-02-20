<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_payments');
    }
    
    public function index($id)
    {
        $login = $this->session->userdata('id_cust');
        if($login){
            $data['user'] = $login;
            $data['id'] = $id;
            $data['title'] = 'Payment';
            $this->load->view('main/payment', $data);
            
        } else{
            redirect('login/logincust');
        }
    }

    public function upload(){
        $this->form_validation->set_rules('norek', 'Nomer Rek' ,'required');
        if($this->form_validation->run() == false){
            redirect('riwayat');
        } else {
            $trf = $_FILES['trf']['name'];
            if($trf == "") {
                redirect('home');
            } else {
                $config['upload_path'] = './assets/images/bukti';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                
                if(!$this->upload->do_upload('trf')){
                    redirect('riwayat');
                } else {
                    $this->Model_payments->uploadfoto($trf);
                }
            }
        }
    }
}
