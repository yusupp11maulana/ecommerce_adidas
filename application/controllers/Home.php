<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $keterangan = "home";
        $login = $this->session->userdata('id_cust');
        if($login){
            $data['user'] = $login;
            $data['title'] = 'Home';
            $this->load->view('main/home', $data);
        } else{
            $data['user'] = $keterangan;
            $data['title'] = 'Home';
            $this->load->view('main/home', $data);
        }
    }
}
