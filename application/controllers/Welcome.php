<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
              
		$this->load->model('view_model');
	
	}
	public function index()
	{
		$data['barang'] = $this->view_model->get_barang();
		$this->load->view('index',$data);	
	}
}
