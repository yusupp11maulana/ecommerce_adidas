<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function logincust(){
        $this->load->view('main/login_customer');
    }

    public function registrasi(){
        $this->load->view('main/registrasi');
    }

    public function loginadmin(){
        $this->load->view('main/login_admin');
    }

    public function validasicust(){
        $this->form_validation->set_rules('email', 'email' ,'required');
        $this->form_validation->set_rules('passw','passw' ,'required');
        if($this->form_validation->run() == false){
            redirect('login/logincust');
        } else{
            $this->Login_model->LoginCustomer();
        }
    }

    public function validasiadmin(){
        $this->form_validation->set_rules('uname', 'uname' ,'required');
        $this->form_validation->set_rules('pass','pass' ,'required');
        if($this->form_validation->run() == false){
            redirect('login/loginadmin');
        } else{
            $this->Login_model->LoginAdmin();
        }
    }

    public function logoutadmin(){
        $this->Login_model->logoutadmin();
    }

    public function logoutcust(){
        $this->Login_model->logoutcust();
    }
    
    public function registrasicust(){
        $this->form_validation->set_rules('email', 'email' ,'required');
        $this->form_validation->set_rules('namacust','nama' ,'required');
        $this->form_validation->set_rules('passw','password' ,'required');
        $this->form_validation->set_rules('notelp','notelp' ,'required');
        if($this->form_validation->run() == false){
            redirect('login/registrasi');
        } else{
            $this->Login_model->registrasi();
        }
    }
}