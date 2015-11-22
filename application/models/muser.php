<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
    
    public function simpan($data){
        $this->db->insert('tbl_user',$data);
        return $this->db->insert_id();
    }
}