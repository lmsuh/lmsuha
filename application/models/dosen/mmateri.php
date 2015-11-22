<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmateri extends CI_Model {
    
    public function getById($data){
        $this->db->select('*');
        $this->db->from('tbl_materi');
        $this->db->where('tbl_materi.id_kelas',$data['idkelas']);
        $this->db->where('tbl_materi.id_mk',$data['idmk']);
        $this->db->where('tbl_materi.nip',$data['nip']);
        $res = $this->db->get();
        return $res->result();
    }
}