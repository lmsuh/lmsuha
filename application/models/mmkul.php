<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmkul extends CI_Model {
    
    public function getById($id){
        $this->db->select('*');
        $this->db->from('tbl_mk');
        $this->db->where('id_mk',$id);
        $res = $this->db->get();
        return $res->row();
    }
    
    public function getMhs($data){
        $this->db->select('*');
        $this->db->from('kls_mhs');
        $this->db->join('tbl_mhs', 'tbl_mhs.nim = kls_mhs.nim');
        $this->db->join('mk_mhs', 'mk_mhs.nim = kls_mhs.nim');
        $this->db->where('kls_mhs.id_kls',$data['idkls']);
        $this->db->where('mk_mhs.id_mk',$data['idmk']);
        $res = $this->db->get();
        return $res->result();
    }
}