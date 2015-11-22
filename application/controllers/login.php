<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    private $kat_user;
    private $sess = array();
    
    function __construct() {
        parent::__construct();
        $this->load->model('mlogin');
        $this->cekSession();
    }
    
    public function index(){
	$this->load->view('login');
    }
    
    public function auth(){
        $this->load->library('form_validation');
 
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cek_db');

        if($this->form_validation->run() == FALSE){
            $this->load->view('login');
        }else{
            if($this->kat_user == 'dosen'){
                $this->session->set_userdata('logged_in',$this->sess);
                redirect('dosen/home', 'refresh');
            }elseif($this->kat_user == 'mahasiswa'){
                $this->session->set_userdata('logged_in',$this->sess);
                redirect('mahasiswa/home', 'refresh');
            }
        }
    }
    
    public function cek_db($password){
        $username = $this->input->post('username');
        
        $data = array(
            'user' => $username,
            'pass' => $password
        );
        //query the database
        $result = $this->mlogin->cekLogin($data);

        if($result){
            foreach($result as $row){
                $user = $row->usr_nm;
                $id = $row->id_user;
            }
            
            $cekDb = $this->mlogin->cekDB($user);
            if($cekDb){
                
                $this->kat_user = $cekDb['user_cat'];
                $this->sess['id'] = $id;
                $this->sess['kat_user'] = $cekDb['user_cat'];
                $this->sess['username'] = $cekDb['user'];
                return TRUE;
            }else{
                $this->form_validation->set_message('cek_db','Invalid username or password');
                return FALSE;
            }
            
        }else{
            $dtSiaka = $this->cekSiaka($data);
            if($dtSiaka){
                $idUser = $this->saveUser($dtSiaka);
                if($dtSiaka->kat_user == 'dosen'){
                    if($idUser){
                        $ckDUser = $this->saveDosen($dtSiaka);
                    }
                }elseif($dtSiaka->kat_user == 'mahasiswa'){
                    if($idUser){
                        $ckDUser = $this->saveMhs($dtSiaka);
                    }
                }
                
                if($ckDUser){
                    $this->kat_user = $dtSiaka->kat_user;
                    $this->sess['id'] = $id;
                    $this->sess['kat_user'] = $dtSiaka->kat_user;
                    $this->sess['username'] = $data['user'];
                }
                //var_dump($this->saveUser($dtSiaka));
                //$this->saveDosen($dtSiaka);
                
                //var_dump($dtSiaka);
                return TRUE;
            }else{
                $this->form_validation->set_message('cek_db','Invalid username or password');
                return false;
            }
        }
    }
    
    private function saveMhs($data){
        $this->load->model('mmhs');
        $jk = $data->KEL;
        if($jk == 'P'){
            $jkl = 'PEREMPUAN';
        }elseif($jk == 'L'){
            $jkl = 'LAKI-LAKI';
        }
        $dt = array(
            'nim' => $data->STB,
            'nm_mhs' => $data->NMMHS,
            'jk' => $jkl,
            'alamat' => $data->ALM,
            'tlfn' => $data->TLP,
            'id_prodi' => $data->IDPRODI
        );
        //$this->mmhs->simpan($dt);
        return $this->mmhs->simpan($dt);
    }
    
    private function saveDosen($data){
        $this->load->model('mdosen');
        $jk = $data->KEL;
        if($jk == 'P'){
            $jkl = 'PEREMPUAN';
        }elseif($jk == 'L'){
            $jkl = 'LAKI-LAKI';
        }
        $dt = array(
            'nip' => $data->NIP,
            'nm_dosen' => $data->NMDOS,
            'jk' => $jkl,
            'alamat' => $data->ALM,
            'tlfn' => $data->TLP,
            'id_prodi' => $data->PStudiID,
            'glr_depan' => $data->GLR,
            'glr_belakang' => $data->GLR1,
            'tmp_lahir' => $data->TPLHR,
            'tgl_lahir' => $data->TGLHR,
        );
        return $this->mdosen->simpan($dt);
    }
    
    private function saveUser($data){
        $this->load->model('muser');
        if($data->kat_user == 'dosen'){
            $dt = array(
                'usr_nm' => $data->NIP,
                'password' => md5($data->NIP)
            );
        }elseif($data->kat_user == 'mahasiswa'){
            $dt = array(
                'usr_nm' => $data->STB,
                'password' => md5($data->STB)
            );
        }
        return $this->muser->simpan($dt);
    }
    
    private function cekSiaka($data){
        $postdata = http_build_query(
            array(
                'user' => $data['user'],
                'pass' => $data['pass']
            )
        );
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        
        $context  = stream_context_create($opts);

	$result = file_get_contents('http://admin:1234@localhost/cirest/index.php/api/Login/loguser', false, $context);
        $res = json_decode($result);
        return $res;
    }
    
    private function cekSession(){
        if(isset($this->session->userdata['logged_in'])){
            if($this->session->userdata['logged_in']['kat_user'] == 'dosen'){
                redirect('dosen/home', 'refresh');
            }elseif($this->session->userdata['logged_in']['kat_user'] == 'mahasiswa'){
                redirect('mahasiswa/home', 'refresh');
            }
        }
    }
}