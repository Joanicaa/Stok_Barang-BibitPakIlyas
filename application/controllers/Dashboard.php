<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
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
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$this->load->view('template/load_dashboard_up');
			$this->load->view('vbarangmasuk');
			$this->load->view('template/load_dashboard_down');
		} else {
			redirect('Login');
		}
	}
}
