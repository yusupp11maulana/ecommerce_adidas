<?php

class Login_model extends CI_Model
{
    public function logoutadmin(){
        $this->session->unset_userdata('admin');
        redirect(base_url());
    }

    public function logoutcust(){
        $this->session->unset_userdata('id_cust');
        redirect(base_url());
    }

    public function LoginAdmin(){
        $username = $this->input->post('uname');
        $pin = $this->input->post('pass');
        if($username == "admin" && $pin=="admin123"){
            $data=[
                'admin' => $username,
            ];
            $this->session->set_userdata($data);
            redirect('admin');
        }
        else{
            redirect('login/loginadmin');
        }
    }

    public function LoginCustomer(){
        $email = $this->input->post('email');
        $password = $this->input->post('passw');
        $user = $this->db->get_where('customer', ['email'=> $email])->row_array();
        if($user){
            //ada
            if($password == $user['password']){
                $data=[
                    'id_cust' => $user['id_cust'],
                ];
                $this->session->set_userdata($data);
                redirect('home');
            }
            else{
                redirect('login/logincust');
            }
        }
        else{
            redirect('login/logincust');
        }
    }

    public function registrasi(){
        $query = $this->db->query("SELECT MAX(id_cust) as id FROM customer")->row_array()['id'];
        $urutan = (int) substr($query, 4, 4);
        $urutan++;
        $simbol = "Cust";
        $kodenya = $simbol . sprintf("%04s", $urutan);
        $kodenya;
        $data = array(
            "id_cust" => $kodenya,
            "nama_cust" => $this->input->post('namacust', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('passw', true),
            "notelp_cust" => $this->input->post('notelp', true),
        );
        $this->db->insert('customer', $data);
        redirect('login/logincust');
    }
}
