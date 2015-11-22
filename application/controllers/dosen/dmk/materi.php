<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {
    
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
        $this->getMateri();
	$this->load->view('dosen/materi', $this->data);
    }
    
    public function mtr(){
        $this->load->view('dosen/dmateri', $this->data);
    }

    public function mm($id,$ck){
        $dtid = array(
            'idmk' => $id,
            'idkelas' => $ck
        );
        $this->session->set_flashdata($dtid);
        $this->session->keep_flashdata($dtid);
        if($ck != 0){
            redirect('dosen/dmk/materi');
        }
    }
    
    private function getDataMk(){
        $this->load->model('mmkul');
        $this->data['mk'] = $this->mmkul->getById($this->idMk);
    }
    
    private function getMateri(){
        $this->load->model('dosen/mmateri');
        $dt = array(
            'idkelas' => $this->idKls,
            'idmk' => $this->idMk,
            'nip' => $this->session->userdata['logged_in']['username']
        );
        $this->data['materi'] = $this->mmateri->getById($dt);
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