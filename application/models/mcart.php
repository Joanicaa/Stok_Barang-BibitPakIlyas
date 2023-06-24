<?php
class mcart extends CI_Model
{

    function get_all_produk()
    {
        $hasil = $this->db->get('tbl_produk');
        return $hasil->result();
    }

    function get_data_db()
    {
        $hasil = $this->db->get('databarang');
        return $hasil->result();
    }
    function UPLOAD_PEMBELIAN($DATA_PEMBELIAN)
    {
        $this->db->insert('datapembelian', $DATA_PEMBELIAN);
    }
    function UPLOAD_DETAILPEMBELIAN($DATA_DETAILPEMBELIAN)
    {
        $this->db->insert('detailpembelian', $DATA_DETAILPEMBELIAN);
    }
}
