<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkelas extends CI_Model {
    
    public function getMkKls($nip){
        $this->db->select('*');
        $this->db->from('mk_dosen');
        $this->db->join('tbl_mk', 'tbl_mk.id_mk = mk_dosen.id_mk');
        $this->db->join('mk_kls', 'mk_kls.id_mk = mk_dosen.id_mk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = mk_kls.id_kelas');
        $this->db->where('mk_dosen.nip',$nip);
        $res = $this->db->get();
        return $res->result();
    }
}