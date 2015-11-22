<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmk extends CI_Model {
    
    public function getAll($nip){
        $this->db->select('*');
        $this->db->from('mk_dosen');
        $this->db->join('tbl_mk', 'tbl_mk.id_mk = mk_dosen.id_mk');
        $this->db->where('mk_dosen.nip', $nip);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function jmlPeserta($id){
        $this->db->where('id_mk', $id);
        $this->db->from('mk_mhs');
        return $this->db->count_all_results();
    }
}