<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('mlogin');
	}

	function index()
	{
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			redirect('Dashboard');
		} else {
			$this->load->view('template/load_up');
			$this->load->view('vlogin');
			$this->load->view('template/load_down');
		}
	}
	function validate()
	{
		$acc['accusername'] = $this->input->post('username');
		$acc['accpassword'] = $this->input->post('password');
		$this->mlogin->getlogindata($acc);
	}
	function logout()
	{
		$this->session->sess_destroy($this->session->userdata('logged_in'));
		redirect('Login');
	}
}
