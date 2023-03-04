<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mlogin extends CI_Model {
    function getlogindata($daricontrollerlogin){
        $dbacc['user']=$daricontrollerlogin['accusername'];
        $dbacc['password']=$daricontrollerlogin['accpassword'];
        $tanyadb=$this->db->get_where('user',$dbacc);
        if($tanyadb->num_rows()>0){
            foreach($tanyadb->result() as $tanya){
                $datalogin['logged_in'] = "J0joLulu5tepatw4ktu";
                $datalogin['id']= $tanya->id;
                $datalogin['user']=$tanya->user;
                $datalogin['level']=$tanya->level;
                $this->session->set_userdata($datalogin);
            }
            if($datalogin['level']=="1"){
                redirect("Dashboard");
            } else {
                echo "Kamu bisa login";
            }
        } else {
            echo "Kamu gagal masuk";
        }
    }
}
