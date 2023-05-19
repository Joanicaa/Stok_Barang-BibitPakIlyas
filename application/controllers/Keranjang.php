<?php

class Keranjang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mcart');
    }

    function index()
    {
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            $titlepage['titlepage'] = 'Keranjang';
            $data['databarangmasuk'] = $this->mcart->get_data_db();
            $this->load->view('template/load_dashboard_up', $titlepage);
            $this->load->view('vkeranjang', $data);
            $this->load->view('template/load_dashboard_down');
        } else {
            redirect('Login');
        }
    }

    function add_to_cart()
    { //fungsi Add To Cart
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            $data = array(
                'id' => $this->input->post('produk_id'),
                'name' => $this->input->post('produk_nama'),
                'price' => $this->input->post('produk_harga'),
                'jenis' => $this->input->post('jenis_produk'),
                'qty' => $this->input->post('quantity'),
            );
            $this->cart->insert($data);
            echo $this->show_cart(); //tampilkan cart setelah added
        } else {
            redirect('Login');
        }
    }

    function show_cart()
    { //Fungsi untuk menampilkan Cart
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            $output = '';
            $no = 0;
            foreach ($this->cart->contents() as $items) {
                $no++;
                $output .= '
				<tr>
					<td>' . $items['name'] . '</td>
					<td>' . number_format($items['price']) . '</td>
					<td>' . $items['jenis'] . '</td>
					<td>' . $items['qty'] . '</td>
					<td>' . number_format($items['subtotal']) . '</td>
					<td><button type="button" id="' . $items['rowid'] . '" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
            }
            $output .= '
			<tr>
				<th colspan="4">Total</th>
				<th colspan="2">' . 'Rp ' . number_format($this->cart->total()) . '</th>
			</tr>
		';
            return $output;
        } else {
            redirect('Login');
        }
    }

    function load_cart()
    { //load data cart
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            echo $this->show_cart();
        } else {
            redirect('Login');
        }
    }

    function hapus_cart()
    { //fungsi untuk menghapus item cart
        if ($this->session->userdata('logged_in') == "J0joLulu5tepatw4ktu") {
            $data = array(
                'rowid' => $this->input->post('row_id'),
                'qty' => 0,
            );
            $this->cart->update($data);
            echo $this->show_cart();
        } else {
            redirect('Login');
        }
    }

    function checkout()
    {
        echo "checkout berhasil";
    }
}
