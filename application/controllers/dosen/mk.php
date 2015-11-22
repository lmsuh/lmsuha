<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mk extends CI_Controller {
    
    private $data = array();
    
    public function __construct() {
        parent::__construct();
        $this->cekSession();
        $this->data['profile'] = $this->getUser();
    }
    
    public function index(){
        $this->data['mkdosen'] = $this->getMKDosen();
	$this->load->view('dosen/mk',$this->data);
    }
    
    private function getMKDosen(){
        $this->load->model('dosen/mmk');
        $mkd = array();
        $i = 0;
        $mk = $this->mmk->getAll($this->session->userdata['logged_in']['username']);
        if($mk){
            foreach ($mk as $md){
                $mkd[$i] = array(
                    'nm_mk' => strtolower($md->nm_mk),
                    'kode_mk' => $md->kode_mk,
                    'jml' => $this->mmk->jmlPeserta($md->id_mk)
                );
                $i++;
            }
            
            return $mkd;
        }else{
            return FALSE;
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