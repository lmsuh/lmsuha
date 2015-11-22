<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
    
    public function getUser($nip){
        $this->db->select('*');
        $this->db->from('tbl_dosen');
        $this->db->where('nip',$nip);
        $res = $this->db->get();
        return $res->row();
    }
}