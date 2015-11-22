<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmhs extends CI_Model {
    
    public function simpan($data){
        $this->db->insert('tbl_mhs',$data);
        return $this->db->affected_rows();
    }
}