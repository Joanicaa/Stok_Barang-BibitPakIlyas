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
    function update($updatedaricontroller, $id_daricontroller)
    {
        $this->db->where('Id_barang', $id_daricontroller);
        $this->db->update('databarang', $updatedaricontroller);
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

    function getMax($table = null, $field = null)
    {
        $this->db->select_max($field);
        return $this->db->get($table)->row_array()[$field];
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
