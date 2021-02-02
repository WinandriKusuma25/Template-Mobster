<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tentang extends CI_Controller
{


    public function __construct()
    {
        //memanggil method kosntrukter di CI Controller
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Baiti Jannati | Tentang Kami';
        $this->load->view('template/header', $data);
        $this->load->view('tentang', $data);
        $this->load->view('template/footer', $data);
    }
}