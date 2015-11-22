<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dmk extends CI_Controller {
    
    private $data = array();
    private $idMk;
    
    public function __construct() {
        parent::__construct();
        $this->cekSession();
        $this->data['profile'] = $this->getUser();
        if($this->session->flashdata('idMk')){
            var_dump($this->session->flashdata('idMk'));
            $this->idMk = $this->session->flashdata('idMk');
        }
    }
    
    public function index(){
	$this->load->view('dosen/dmk',  $this->data);
    }
    
    public function sdt($id){
        $this->session->set_flashdata('idMk', $id);
        ;
        redirect('dosen/dmk');
    }
    
    public function mhs(){
        var_dump($this->idMk);
        $this->load->view('dosen/dmk', $this->data);
    }
    
    public function group($id=0){
        if($id == 0){
            $this->load->view('dosen/group', $this->data);
        }else{
            $this->load->view('dosen/dgroup', $this->data);
        }
    }
    
    public function tugas($id=0){
        if($id == 0){
            $this->load->view('dosen/tugas', $this->data);
        }else{
            $this->load->view('dosen/dtugas', $this->data);
        }
    }
    
    public function materi($id=0){
        if($id == 0){
            $this->load->view('dosen/materi', $this->data);
        }else{
            $this->load->view('dosen/dmateri', $this->data);
        }
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