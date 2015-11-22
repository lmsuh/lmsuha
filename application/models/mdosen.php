<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdosen extends CI_Model {
    
    public function simpan($data){
        $this->db->insert('tbl_dosen',$data);
        return $this->db->affected_rows();
    }
}