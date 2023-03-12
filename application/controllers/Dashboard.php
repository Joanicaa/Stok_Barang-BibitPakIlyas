<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mdashboard');
	}

	public function index()
	{

		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$this->load->view('template/load_dashboard_up');
			$this->load->view('vdashboard');
			$this->load->view('template/load_dashboard_down');
		} else {
			redirect('Login');
		}
	}
	function barangmasuk()
	{
		// untuk mengambil data tabel dari database
		$databarangmasuk['databarangmasuk'] = $this->mdashboard->getdatafromdb();

		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$this->load->view('template/load_dashboard_up');
			$this->load->view('vbarangmasuk', $databarangmasuk);
			$this->load->view('template/load_dashboard_down');
		} else {
			redirect('Login');
		}
	}
	function barangkeluar()
	{
		// untuk mengambil data tabel dari database
		$databarangkeluar['databarangkeluar'] = $this->mdashboard->getdatafromdb();
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$this->load->view('template/load_dashboard_up');
			$this->load->view('vbarangkeluar', $databarangkeluar);
			$this->load->view('template/load_dashboard_down');
		} else {
			redirect('Login');
		}
	}
	function coba()
	{
		$this->load->view("dtt");
	}
}
