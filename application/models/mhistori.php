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
}
