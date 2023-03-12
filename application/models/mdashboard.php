<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mdashboard extends CI_Model
{
    function getdatafromdb()
    {
        $datatabel = $this->db->get('databarang');
        return $datatabel;
    }
}
