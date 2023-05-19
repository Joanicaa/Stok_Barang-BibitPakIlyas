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
		$titlepage['titlepage'] = 'Barang Masuk';
		$databarangmasuk['databarangmasuk'] = $this->mdashboard->getdatafromdb();

		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {

			$table = "databarang";
			$field = "Id_barang";
			$lastkode = $this->mdashboard->getMax($table, $field);

			$noUrut = (int) substr($lastkode, -3, 3);
			$noUrut++;
			$text = "BBPI";
			$newcode['newcode'] = $text . sprintf('%03s', $noUrut);
			// var_dump($newcode);
			// die;

			$this->load->view('template/load_dashboard_up', $titlepage);
			$this->load->view('vbarangmasuk', $databarangmasuk + $newcode);
			$this->load->view('template/load_dashboard_down');
		} else {
			redirect('Login');
		}
	}

	function tambah_barang()
	{
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$datamasuk = array(
				'Id_barang' =>  $this->input->post('Id_barang'),
				'Nama_barang' => $this->input->post('Namabarang'),
				'Ukuran_barang' => $this->input->post('Ukuran'),
				'Harga_barang' => $this->input->post('Harga'),
				'Jumlah_barang' => $this->input->post('Jumlahbarang'),
				'Tanggal_barang_masuk' => date('ymd'),
			);
			$this->mdashboard->insert($datamasuk);
		} else {
			$this->load->view('vlogin');
		}
	}
	function hapus_barang()
	{
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$id = $this->uri->segment(3);
			$this->mdashboard->delete($id);
		} else {
			$this->load->view('vlogin');
		}
	}
	function update()
	{
		if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
			$datamasuk = array(
				'Nama_barang' => $this->input->post('UpdateNamabarang'),
				'Ukuran_barang' => $this->input->post('UpdateUkuran'),
				'Harga_barang' => $this->input->post('UpdateHarga'),
				'Jumlah_barang' => $this->input->post('UpdateJumlahbarang'),
			);
			$id_barang = $this->uri->segment(3);
			$this->mdashboard->update($datamasuk, $id_barang);
		} else {
			$this->load->view('vlogin');
		}
	}
}
