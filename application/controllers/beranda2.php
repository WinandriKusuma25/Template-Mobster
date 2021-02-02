<?php
defined('BASEPATH') or exit('No direct script access allowed');

class beranda2 extends CI_Controller
{


    public function __construct()
    {
        //memanggil method kosntrukter di CI Controller
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Baiti Jannati | Beranda2';
        $this->load->view('template/header', $data);
        $this->load->view('index2', $data);
        $this->load->view('template/footer', $data);
    }
}