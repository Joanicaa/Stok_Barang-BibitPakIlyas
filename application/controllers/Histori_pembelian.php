<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Histori_pembelian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mhistori');
    }

    public function index()
    {
        $titlepage['titlepage'] = 'Barang Masuk';
        $datapembelian['datapembelian'] = $this->mhistori->getdatapembelian();

        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            $this->load->view('template/load_dashboard_up', $titlepage);
            $this->load->view('vhistori_pembelian', $datapembelian);
            $this->load->view('template/load_dashboard_down');
        } else {
            redirect('Login');
        }
    }
}
