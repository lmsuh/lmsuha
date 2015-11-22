<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtugas extends CI_Model {
    
    public function getTgsDosen($data){
        $this->db->select('*');
        $this->db->from('tbl_tugas');
        //$this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_tugas.id_kelas');
        //$this->db->join('tbl_mk', 'tbl_mk.id_mk = tbl_tugas.id_mk');
        //$this->db->join('tbl_dosen', 'tbl_dosen.nip = tbl_tugas.nip');
        $this->db->where('tbl_tugas.id_kelas',$data['idkelas']);
        $this->db->where('tbl_tugas.id_mk',$data['idmk']);
        $this->db->where('tbl_tugas.nip',$data['nip']);
        $res = $this->db->get();
        return $res->result();
    }
    
    public function jmlTgsTerkumpul($id){
        $this->db->where('id_tugas', $id);
        $this->db->from('tbl_tgs_kumpul');
        return $this->db->count_all_results();
    }
    
    public function jmlMhs($id){
        $this->db->where('id_kls', $id);
        $this->db->from('kls_mhs');
        return $this->db->count_all_results();
    }
}