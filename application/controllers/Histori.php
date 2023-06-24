<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Histori extends CI_Controller
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
    function Detail()
    {

        $get_id = $this->uri->segment(3);
        $get_table['data_histori'] = $this->mhistori->getHistori($get_id);
        // var_dump($get_table);
        $this->load->view('vhistori_detail', $get_table);
    }
}
