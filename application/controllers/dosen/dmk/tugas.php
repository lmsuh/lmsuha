<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {
    
    private $data = array();
    private $idMk = 0;
    private $idKls = 0;
    
    public function __construct() {
        parent::__construct();
        $this->cekSession();
        $this->data['profile'] = $this->getUser();
        if($this->session->flashdata()){
            $this->idMk = $this->session->flashdata()['idmk'];
            $this->idKls = $this->session->flashdata()['idkelas'];
            $this->data['id_mk'] = $this->idMk;
            $this->data['id_kls'] = $this->idKls;
        }
    }
    
    public function index(){
        if($this->idMk == 0){
            redirect('dosen/kelas');
        }
        
        $this->getDataMk();
        $this->getTugas();
	$this->load->view('dosen/tugas', $this->data);
    }
    
    public function tg(){
        $this->load->view('dosen/dtugas', $this->data);
    }

    public function tm($id,$ck){
        $dtid = array(
            'idmk' => $id,
            'idkelas' => $ck
        );
        $this->session->set_flashdata($dtid);
        $this->session->keep_flashdata($dtid);
        if($ck != 0){
            redirect('dosen/dmk/tugas');
        }
    }
    
    private function getTugas(){
        $this->load->model('dosen/mtugas');
        $tgs = array();
        $i = 0;
        $dt = array(
            'idkelas' => $this->idKls,
            'idmk' => $this->idMk,
            'nip' => $this->session->userdata['logged_in']['username']
        );
        
        $dttgs = $this->mtugas->getTgsDosen($dt);
        foreach ($dttgs as $dt){
            $tgs[$i] = array(
                'nm_tugas' => $dt->nm_tugas,
                'tgl_selesai' => $dt->tgl_selesai,
                'jml_kumpul' => $this->mtugas->jmlTgsTerkumpul($dt->id_tugas)
            );
            $i++;
        }
        $this->data['tugas'] = $tgs;
        $this->data['jmlMhs'] = $this->mtugas->jmlMhs($this->idKls);
    }
    
    private function getDataMk(){
        $this->load->model('mmkul');
        $this->data['mk'] = $this->mmkul->getById($this->idMk);
    }

    private function getUser(){
        $this->load->model('dosen/muser');
        return $this->muser->getUser($this->session->userdata['logged_in']['username']);
    }
    
    private function cekSession(){
        if(isset($this->session->userdata['logged_in'])){
            if($this->session->userdata['logged_in']['kat_user'] !== 'dosen'){
                redirect('login', 'refresh');
            }
        }else{
            redirect('login', 'refresh');
        }
    }
}