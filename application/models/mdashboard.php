<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mdashboard extends CI_Model
{
    function getdatafromdb()
    {
        $datatabel = $this->db->get('databarang');
        return $datatabel;
    }
    function insert($insertdaricontrollerdatamasuk)
    {
        $this->db->insert('databarang', $insertdaricontrollerdatamasuk);
        redirect('Barang_masuk');
    }
    function delete($deletedaricontrollerdatamasuk)
    {
        $this->db->delete('databarang', array('Id' => $deletedaricontrollerdatamasuk));
        redirect('Barang_masuk');
    }
}
