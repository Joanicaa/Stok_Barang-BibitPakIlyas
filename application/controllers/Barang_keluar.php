<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_keluar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdashboard');
    }

    public function index()
    {

        $databarangkeluar['databarangkeluar'] = $this->mdashboard->getdatafromdb();
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            $this->load->view('template/load_dashboard_up');
            $this->load->view('vbarangkeluar', $databarangkeluar);
            $this->load->view('template/load_dashboard_down');
        } else {
            redirect('Login');
        }
    }
}
