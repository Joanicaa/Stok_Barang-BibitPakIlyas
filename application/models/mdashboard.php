<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mdashboard extends CI_Model
{
    function getdatafromdb()
    {
        $datatabel = $this->db->get('databarang');
        return $datatabel;
    }
    function get_count_id()
    {
        return $this->db->count_all('databarang');
    }
    function stokbarang()
    {
        return $this->db->query("Select SUM(Jumlah_barang) as jb from databarang")->row()->jb;
    }
    function hampir_habis()
    {
        return $this->db->query("SELECT * FROM databarang WHERE Jumlah_barang < 3 ")->result();
    }
    function jumlah_hampir_habis()
    {
        $jhh =  $this->db->query("SELECT * FROM databarang WHERE Jumlah_barang < 3 ")->result();
        return $this->db->count_all($jhh);
    }
}
