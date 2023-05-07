<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mdashboard extends CI_Model
{
    function getdatafromdb()
    {
        $datatabel = $this->db->get('databarang');
        return $datatabel;
    }
    function get_keranjang()
    {
        $datakeranjang = $this->db->get('databarang');
        return $datakeranjang->result();
    }
    function getdatauser()
    {
        $datauser = $this->db->get('user');
        return $datauser;
    }

    // untuk barang
    function insert($insertdaricontrollerdatamasuk)
    {
        $this->db->insert('databarang', $insertdaricontrollerdatamasuk);
        redirect('Barang_masuk');
    }
    function delete($deletedaricontrollerdatamasuk)
    {
        $this->db->delete('databarang', array('Id_barang' => $deletedaricontrollerdatamasuk));
        redirect('Barang_masuk');
    }

    // untuk user 
    function delete_user($deletedaricontrolleruser)
    {
        $this->db->delete('user', array('Id' => $deletedaricontrolleruser));
        redirect('User');
    }
    function insert_user($insertdaricontrolleruser)
    {
        $this->db->insert('user', $insertdaricontrolleruser);
        redirect('User');
    }
}
