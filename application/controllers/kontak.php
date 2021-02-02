<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kontak extends CI_Controller
{


    public function __construct()
    {
        //memanggil method kosntrukter di CI Controller
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Baiti Jannati | Kontak';
        $this->load->view('template/header', $data);
        $this->load->view('kontak', $data);
        $this->load->view('template/footer', $data);
    }
}