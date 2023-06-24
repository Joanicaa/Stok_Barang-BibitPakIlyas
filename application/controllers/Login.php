<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}

	function index()
	{
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			redirect('Dashboard');
		} else {
			$this->load->view('vlogin');
		}
	}
	function validate()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('vlogin');
		} else {
			$acc['accusername'] = $this->input->post('username');
			$acc['accpassword'] = $this->input->post('password');
			$this->mlogin->getlogindata($acc);
		}
	}
	function logout()
	{
		$this->session->sess_destroy($this->session->userdata('logged_in'));
		$pesan['logout'] = "Anda Berhasil Logout";
		$kirimpesan = $this->session->set_flashdata($pesan);
		redirect('Login');
	}
}
