<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$this->load->view('template/load_up');
		$this->load->view('vregister');
		$this->load->view('template/load_down');
	}
    function Tac(){
		$this->load->view('template/load_up');
        $this->load->view('vtac');
    }
    function PP(){
		$this->load->view('template/load_up');
        $this->load->view('vpp');
    }
}