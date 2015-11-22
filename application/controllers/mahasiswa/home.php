<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->cekSession();
    }
    
    public function index(){
	$this->load->view('mahasiswa/home');
    }
    
    private function cekSession(){
        if(isset($this->session->userdata['logged_in'])){
            if($this->session->userdata['logged_in']['kat_user'] !== 'mahasiswa'){
                redirect('login', 'refresh');
            }
        }else{
            redirect('login', 'refresh');
        }
    }
}