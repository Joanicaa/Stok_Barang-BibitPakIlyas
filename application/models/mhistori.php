<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mhistori extends CI_Model
{
    function getdatapembelian()
    {
        $datatabel = $this->db->get('datapembelian');
        return $datatabel;
    }
    function getHistori($ID)
    {
        return $this->db->query("SELECT * FROM detailpembelian INNER JOIN databarang ON detailpembelian.Id_barang = databarang.Id_barang WHERE detailpembelian.Id_detail= '" . $ID . "'");
    }
    function GETJUMLAHTOTAL($ID)
    {
        return $this->db->query('SELECT SUM(databarang.Harga_barang) as jumlah_total FROM detailpembelian INNER JOIN databarang ON detailpembelian.Id_barang = databarang.Id_barang WHERE detailpembelian.Id_detail="' . $ID . '"')->row()->jumlah_total;
    }
    function GETQTYJUMLAH($ID)
    {
        return $this->db->query('SELECT SUM(Jumlah) as jumlah_qty FROM detailpembelian WHERE Id_detail="' . $ID . '"')->row()->jumlah_qty;
    }
}
