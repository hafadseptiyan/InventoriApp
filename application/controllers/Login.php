<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 	public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('data_model');
        $this->load->library('session');
    }

	public function index()
    {    
        $this->load->view('login.php');
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'USERNAME' => $username,
			'PASSWORD' => $password
			);
		$cek = $this->data_model->cek_login("TB_ADMIN",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('Data/dashboard');
 
		}else{
			echo "<script>alert('Maaf username atau password anda salah');</script>";
			$this->load->view('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login/'));
	}
 
	
}