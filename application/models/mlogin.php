<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
    
    public function cekLogin($data){
        $this -> db -> select('id_user, usr_nm, password');
        $this -> db -> from('tbl_user');
        $this -> db -> where('usr_nm', $data['user']);
        $this -> db -> where('password', MD5($data['pass']));
        $this -> db -> limit(1);

        $query = $this -> db -> get();
        
        if($query -> num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
    }
    
    public function cekDB($user){
        $data = array();
        $this->db->select('*');
        $this->db->from('tbl_dosen');
        $this->db-> where('nip', $user);
        
        $dbDosen = $this->db->get();
        
        if($dbDosen->num_rows() == 1){
            foreach ($dbDosen->result() as $dt){
                $data['user_cat'] = "dosen";
                $data['user'] = $dt->nip;
                $data['nama'] = $dt->nm_dosen;
                /*
                $data = array(
                    'user_cat' => "dosen",
                    'user' => $dt->nip,
                    'nama' => $dt->nm_dosen
                );*/
            }
        }
        
        if(!$data){
            $this->db->select('*');
            $this->db->from('tbl_mhs');
            $this->db-> where('nim', $user);

            $dbMhs = $this->db->get();

            if($dbMhs->num_rows() == 1){
                foreach ($dbMhs->result() as $dt){
                    $data['user_cat'] = "mahasiswa";
                    $data['user'] = $dt->nim;
                    $data['nama'] = $dt->nm_mhs;
                    /*
                    $data = array(
                        'user_cat' => "mahasiswa",
                        'user' => $dt->nim,
                        'nama' => $dt->nm_mhs
                    );*/
                }
            }
        }
        
        if($data){
            return $data;
        }else{
            return false;
        }
    }
}