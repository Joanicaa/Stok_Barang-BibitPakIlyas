        <?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class mbarang extends CI_Model
        {
            function getdatafromdb()
            {
                $datatabel = $this->db->get('databarang');
                return $datatabel;
            }

            // untuk ambil Id terakhir
            function getMax($table = null, $field = null)
            {
                $this->db->select_max($field);
                return $this->db->get($table)->row_array()[$field];
            }

            function insert($insertdaricontrollerdatamasuk)
            {
                $this->db->insert('databarang', $insertdaricontrollerdatamasuk);
                redirect('Barang_masuk');
            }

            function update($updatedaricontroller, $id_daricontroller)
            {
                $this->db->where('Id_barang', $id_daricontroller);
                $this->db->update('databarang', $updatedaricontroller);
                redirect('Barang_masuk');
            }

            function delete($deletedaricontrollerdatamasuk)
            {
                $this->db->delete('databarang', array('Id_barang' => $deletedaricontrollerdatamasuk));
                redirect('Barang_masuk');
            }
        }
