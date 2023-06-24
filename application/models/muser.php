    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class muser extends CI_Model
    {
        function getdatauser()
        {
            $datauser = $this->db->get('user');
            return $datauser;
        }
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
