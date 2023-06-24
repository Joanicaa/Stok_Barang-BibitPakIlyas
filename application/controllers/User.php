<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('muser');
    }

    public function index()
    {

        $tampiluser['tampiluser'] = $this->muser->getdatauser();

        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            if ($this->session->userdata('level') == '1') {
                $titlepage['titlepage'] = 'Tambah User';
                $this->load->view('template/load_dashboard_up', $titlepage);
                $this->load->view('vuser', $tampiluser);
                $this->load->view('template/load_dashboard_down');
            } else {
                echo 'Kamu Tidak Diperbolehkan Mengakses Halaman Ini';
            }
        } else {
            redirect('Login');
        }
    }
    function tambah_user()
    {
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            if ($this->session->userdata('level') == '1') {
                $datamasuk = array(
                    'id' =>  date('myis'),
                    'user' => $this->input->post('user'),
                    'password' => $this->input->post('pass'),
                    'nama' => $this->input->post('nama'),
                    'level' => $this->input->post('role'),
                );
                $this->muser->insert_user($datamasuk);
            } else {
                echo 'Kamu Tidak Diperbolehkan Mengakses Halaman Ini';
            }
        } else {
            $this->load->view('vlogin');
        }
    }
    function hapus_user()
    {
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            if ($this->session->userdata('level') == '1') {
                $id = $this->uri->segment(3);
                $this->muser->delete_user($id);
            } else {
                echo 'Kamu Tidak Diperbolehkan Mengakses Halaman Ini';
            }
        } else {
            $this->load->view('vlogin');
        }
    }
}
