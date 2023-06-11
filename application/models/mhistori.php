<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mhistori extends CI_Model
{
    function getdatapembelian()
    {
        $datatabel = $this->db->get('datapembelian');
        return $datatabel;
    }
}
