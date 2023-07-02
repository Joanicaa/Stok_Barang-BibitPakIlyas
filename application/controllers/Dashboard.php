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
			$titlepage['titlepage'] = 'Dashboard';
			$databarangmasuk['data_flow'] = $this->mdashboard->getdatafromdb();
			$databarangmasuk["jumlah_id"] = $this->mdashboard->get_count_id();
			$databarangmasuk["jumlah_penjulan"] = $this->mdashboard->GETTOTALPENJUALAN();
			$databarangmasuk["jumlah_stok"] = $this->mdashboard->stokbarang();
			$databarangmasuk["barang_habis"] = $this->mdashboard->hampir_habis();

			$this->load->view('template/load_dashboard_up', $titlepage);
			$this->load->view('vdashboard', $databarangmasuk);
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
			$this->db->count_all('databarang');
			$this->load->view('template/load_dashboard_down');
		} else {
			redirect('Login');
		}
	}
}
