<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Single extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Single';
        $this->load->view('main/single', $data);
    }
}
