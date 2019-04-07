<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

public function __construct()
	{
		parent:: __construct();
              
		$this->load->model('data_model');
		$this->load->library('session');

        if($this->session->userdata('status') != "login"){
            redirect('login/');
        }
	}

	/* -- Dashboard -- */
	public function dashboard()
	{
		$param['barang_banyak'] = $this->data_model->barang_banyak();
		$param['barang_sedikit'] = $this->data_model->barang_sedikit();
		$param['jumlah_supplier'] = $this->data_model->jumlah_supplier();
		$param['jumlah_barang'] = $this->data_model->jumlah_barang();
		$param['main_content'] = 'dashboard';
		$this->load->view('main_page', $param);
	}

	
	/* -- Manage Supplier -- */

	public function input_supplier()
	{
		$param['main_content'] = 'input_supplier';
		$this->load->view('main_page', $param);
	}


	public function supplier()
	{     

		$param['msg']		   	= $this->session->flashdata('msg');
		$param['supplier'] 		= $this->data_model->get_supplier();
		$param['main_content'] 	= 'supplier';
		$this->load->view('main_page', $param);
	}

	public function insert_supplier()
	{
		 $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Berhasil menambah data.</div>');
			$id_supplier 		= $this->input->post('id'); 
			$nama_supplier 		= $this->input->post('nama');
			$alamat_supplier	= $this->input->post('alamat');
			$no_hp 				= $this->input->post('no_hp');
			$kode_pos 			= $this->input->post('kode_pos');

			$this->data_model->insert_supplier($id_supplier,$nama_supplier,$alamat_supplier,$no_hp,$kode_pos);				
	}

	public function delete_supplier()
    { 	$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil terhapus.</div>');

        $id_supplier = $this->uri->segment(3);
        $this->data_model->delete_sup($id_supplier);
        redirect('data/supplier');
    }

	public function edit_supplier($id_supplier)
	{

		$param['data'] 				= $this->data_model->edit_supplier($id_supplier);
		$param['id_supplier'] 		= $id_supplier;
		$param['main_content'] 		= 'edit_supplier';
		$this->load->view('main_page', $param);
	}

    public function update_supplier($id_supplier)
    {
         $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil di update.</div>');

                $param=array(
                    'ID_SUPPLIER'     	=> $this->input->post('id'),
                    'NAMA_SUPPLIER'     => $this->input->post('nama'),
                    'ALAMAT_SUPPLIER'   => $this->input->post('alamat'),
                    'NO_HP_SUPPLIER'    => $this->input->post('no_hp'),
                    'KODE_POS_SUPPLIER' => $this->input->post('kode_pos')
                );

                $proses = $this->data_model->update_sup($param,$id_supplier);
                redirect('data/supplier');
    }


   /* -- Manage Barang -- */

	public function input_barang()
	{
		$param['supplier']	   = $this->data_model->get_supplier();
		$param['main_content'] = 'input_barang';
		$this->load->view('main_page', $param);
	}


	public function v_barang()
	{     

		$param['msg']		   	= $this->session->flashdata('msg');
		$param['barang'] 		= $this->data_model->get_barang();
		$param['main_content'] 	= 'v_barang';
		$this->load->view('main_page', $param);
	}


	public function insert_barang()
	{
		 $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Berhasil menambah data.</div>');
			$nama_barang 	= $this->input->post('nama');
			$stok_barang	= $this->input->post('stok');
			$harga_barang	= $this->input->post('harga');
			$kategori 		= $this->input->post('kategori');
			$id_supplier 	= $this->input->post('supplier');

			$this->data_model->insert_barang($nama_barang,$stok_barang,$harga_barang,$kategori,$id_supplier);				
	}


	public function delete_barang()
    { 	$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil terhapus.</div>');

        $id_barang = $this->uri->segment(3);
        $this->data_model->delete_barang($id_barang);
        redirect('data/v_barang');
    }

	public function edit_barang($id_barang)
	{
		$param['supplier']	   = $this->data_model->get_supplier();
		$param['data'] 				= $this->data_model->edit_barang($id_barang);
		$param['id_barang'] 		= $id_barang;
		$param['main_content'] 		= 'edit_barang';
		$this->load->view('main_page', $param);
	}

    public function update_barang($id_barang)
    {
         $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil di update.</div>');

                $param=array(
                   'ID_BARANG'			=> $this->input->post('id'),
					'NAMA_BARANG'		=> $this->input->post('nama'),
					'STOK_BARANG'		=> $this->input->post('stok'),
					'HARGA_BARANG'		=> $this->input->post('harga'),
					'ID_SUPPLIER'		=> $this->input->post('supplier'),
					'KATEGORI'			=> $this->input->post('kategori')
                );

                $proses = $this->data_model->update_barang($param,$id_barang);
                redirect('data/v_barang');
    }

    /* -- Manage Barang Masuk -- */
	public function masuk()
	{	
		$param['supplier'] 		= $this->data_model->get_supplier();
		$param['barang'] 		= $this->data_model->get_barang();
		$param['main_content'] = 'input_barang_masuk';
		$this->load->view('main_page', $param);
	}

	public function insert_barang_masuk()
	{
		 $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Berhasil menambah data.</div>');

			$data = array(
					'ID_BARANG'			=> $this->input->post('id_barang'),
					'TANGGAL_BARANG_MASUK'	=> $this->input->post('tgl_masuk'),
					'STOK_BARANG_MASUK'	=> $this->input->post('stok_masuk'),
					'ID_SUPPLIER'		=> $this->input->post('id_supplier')

				);

			$this->data_model->insert_barang_masuk($data);				
	}


	public function v_barang_masuk()
	{     

		$param['msg']		   	= $this->session->flashdata('msg');
		$param['barang_masuk'] 	= $this->data_model->get_barang_masuk();
		$param['main_content'] 	= 'v_barang_masuk';
		$this->load->view('main_page', $param);
	}

	public function delete_barang_masuk()
    { 	$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil terhapus.</div>');

        $id_barang_masuk = $this->uri->segment(3);
        $this->data_model->delete_barang_masuk($id_barang_masuk);
        redirect('data/v_barang_masuk');
    }

     /* -- Manage Barang Keluar -- */
	public function keluar()
	{	
		$param['supplier'] 		= $this->data_model->get_supplier();
		$param['barang'] 		= $this->data_model->get_barang();
		$param['main_content'] = 'input_barang_keluar';
		$this->load->view('main_page', $param);
	}

	public function insert_barang_keluar()
	{
		 $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Berhasil menambah data.</div>');

			$data = array(
					'ID_BARANG'			=> $this->input->post('id_barang'),
					'TANGGAL_BARANG_KELUAR'	=> $this->input->post('tgl_keluar'),
					'STOK_BARANG_KELUAR'	=> $this->input->post('stok_keluar'),
					'ID_SUPPLIER'		=> $this->input->post('id_supplier')

				);

			$this->data_model->insert_barang_keluar($data);				
	}


	public function v_barang_keluar()
	{     

		$param['msg']		   	= $this->session->flashdata('msg');
		$param['barang_keluar'] 	= $this->data_model->get_barang_keluar();
		$param['main_content'] 	= 'v_barang_keluar';
		$this->load->view('main_page', $param);
	}

	public function delete_barang_keluar()
    { 	$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil terhapus.</div>');

        $id_barang_keluar = $this->uri->segment(3);
        $this->data_model->delete_barang_keluar($id_barang_keluar);
        redirect('data/v_barang_keluar');
	
	
	}

	public function input_admin()
	{
		$param['main_content'] = 'input_admin';
		$this->load->view('main_page', $param);
	}

	public function insert_admin()
	{
		 $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Berhasil menambah data.</div>');
			$id_admin 		= $this->input->post('id_admin'); 
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');


			$this->data_model->insert_admin($id_admin,$username,$password);				
	}

	
	public function v_admin()
	{     

		$param['msg']			= $this->session->flashdata('msg');
		$param['admin'] 		= $this->data_model->get_admin();
		$param['main_content'] 	= 'v_admin';
		$this->load->view('main_page', $param);
	}




}