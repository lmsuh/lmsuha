<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    public function index(){
	$this->load->view('dosen/mk');
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