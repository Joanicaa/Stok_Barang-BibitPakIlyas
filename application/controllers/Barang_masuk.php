<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_masuk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mdashboard');
	}

	public function index()
	{
		$databarangmasuk['databarangmasuk'] = $this->mdashboard->getdatafromdb();

		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$this->load->view('template/load_dashboard_up');
			$this->load->view('vbarangmasuk', $databarangmasuk);
			$this->load->view('template/load_dashboard_down');
		} else {
			redirect('Login');
		}
	}
	function tambah_barang()
	{
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$datamasuk = array(
				'id' =>  date('myis'),
				'Nama_barang' => $this->input->post('Namabarang'),
				'Ukuran_barang' => $this->input->post('Ukuran'),
				'Harga_barang' => $this->input->post('Harga'),
				'Jumlah_barang' => $this->input->post('Jumlahbarang'),
				'Tanggal_barang_masuk' => date('ymd'),
			);
			$this->mdashboard->insert($datamasuk);
		} else {
			$this->load->view('template/load_up');
			$this->load->view('vlogin');
			$this->load->view('template/load_down');
		}
	}
	function hapus_barang()
	{
		$id = $this->uri->segment(3);
		$this->mdashboard->delete($id);
	}
}
