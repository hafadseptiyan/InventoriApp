<?php

class data_model extends CI_Model{

  function __Construct()
  {
    parent::__Construct();
  }

  	function cek_login($table,$where){      
	return $this->db->get_where($table,$where);
	}	



	/* -- Dashboard -- */
	
    public function barang_sedikit(){
		
		$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))
		(CONNECT_DATA=(SID=latihanDB)))" ;
		$c = OCILogon("UAS", "Inventori20", $db);
		$hasil;
	    $sql = 'SELECT GET_BARANG_SEDIKIT()as JUMLAH FROM DUAL'; 
		$result = oci_parse($c,$sql);
		oci_execute($result); 		
		while($row = oci_fetch_array($result)){
                $hasil=$row['JUMLAH'];
			}
		return $hasil;
	}


    public function barang_banyak(){
		
		$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))
		(CONNECT_DATA=(SID=latihanDB)))" ;
		$c = OCILogon("UAS", "Inventori20", $db);
		$hasil;
	    $sql = 'SELECT GET_BARANG_BANYAK()as JUMLAH FROM DUAL'; 
		$result = oci_parse($c,$sql);
		oci_execute($result); 		
		while($row = oci_fetch_array($result)){
                $hasil=$row['JUMLAH'];
			}
		return $hasil;
	}


    public function jumlah_supplier(){
		
		$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))
		(CONNECT_DATA=(SID=latihanDB)))" ;
		$c = OCILogon("UAS", "Inventori20", $db);
		$hasil;
	    $sql = 'SELECT GET_SUPPLIER_BARANG()as JUMLAH FROM DUAL'; 
		$result = oci_parse($c,$sql);
		oci_execute($result); 		
		while($row = oci_fetch_array($result)){
                $hasil=$row['JUMLAH'];
			}
		return $hasil;
	}
    
    public function jumlah_barang(){
		
		$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))
		(CONNECT_DATA=(SID=latihanDB)))" ;
		$c = OCILogon("UAS", "Inventori20", $db);
		$hasil;
		    $sql = 'SELECT GET_JUMLAH_DATA_BARANG()as JUMLAH FROM DUAL'; 
		$result = oci_parse($c,$sql);
		oci_execute($result); 		
		while($row = oci_fetch_array($result)){
                $hasil=$row['JUMLAH'];
			}
		return $hasil;
	}
	
	/* -- Manage Supplier -- */
	function get_supplier()
  	{
    	$query = $this->db->order_by('ID_SUPPLIER', 'ASC');
        $query = $this->db->get('TB_SUPPLIER');
        return $query->result();
  	
  	}
	
	  function insert_supplier($id_supplier,$nama_supplier,$alamat_supplier,$no_hp,$kode_pos){  
		$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))
		(CONNECT_DATA=(SID=latihanDB)))" ;
		$c = OCILogon("UAS", "Inventori20", $db);
		$hasil;
		$sql = 'BEGIN INSERT_TB_SUPPLIER(:ID_SUPPLIER, :NAMA_SUPPLIER,:ALAMAT_SUPPLIER,
		:NO_HP_SUPPLIER,:KODE_POS_SUPPLIER); END;'; 
		$result = oci_parse($c,$sql);
		oci_bind_by_name($result,':ID_SUPPLIER',$id_supplier);
		oci_bind_by_name($result,':NAMA_SUPPLIER',$nama_supplier);
		oci_bind_by_name($result,':ALAMAT_SUPPLIER',$alamat_supplier);
		oci_bind_by_name($result,':NO_HP_SUPPLIER',$no_hp);
		oci_bind_by_name($result,':KODE_POS_SUPPLIER',$kode_pos);
		oci_execute($result);
		redirect('data/supllier'); 	
	}
	

 	function edit_supplier($id_supplier)
	{
		$query = $this->db->order_by('ID_SUPPLIER', 'ASC');
		$query	=	$this->db->where('ID_SUPPLIER', $id_supplier);
		$query 	= 	$this->db->get('TB_SUPPLIER');
		return $query->row();
	}
	
  	function update_sup($param,$id_supplier)
    {
        $this->db->where('ID_SUPPLIER',$id_supplier);
        $this->db->update('TB_SUPPLIER',$param);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    function delete_sup($id_supplier)
    {
        $this->db->delete('TB_SUPPLIER',array('ID_SUPPLIER' =>$id_supplier ));
        return;
    }

	/* -- Manage Barang -- */
	function get_barang()
  	{
        $query = $this->db->query('SELECT TB_BARANG.*,NAMA_SUPPLIER FROM 
        	TB_BARANG inner join TB_SUPPLIER ON TB_BARANG.ID_SUPPLIER = TB_SUPPLIER.ID_SUPPLIER ORDER BY ID_BARANG DESC');
        return $query->result();
  	
  	}
	  
	  function insert_barang($nama_barang,$stok_barang,$harga_barang,$kategori,$id_supplier){  
		$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))
		(CONNECT_DATA=(SID=latihanDB)))" ;
		$c = OCILogon("UAS", "Inventori20", $db);
		$hasil;
		$sql = 'BEGIN INSERT_TB_BARANG(:NAMA_BARANG,:STOK_BARANG,:HARGA_BARANG,:KATEGORI,:ID_SUPPLIER); END;'; 
		$result = oci_parse($c,$sql);
		oci_bind_by_name($result,':NAMA_BARANG',$nama_barang);
		oci_bind_by_name($result,':STOK_BARANG',$stok_barang);
		oci_bind_by_name($result,':HARGA_BARANG',$harga_barang);
		oci_bind_by_name($result,':KATEGORI',$kategori);
		oci_bind_by_name($result,':ID_SUPPLIER',$id_supplier);
		oci_execute($result);
		redirect('Data/v_barang'); 	
	}

 	function edit_barang($id_barang)
	{
		$query	=	$this->db->where('ID_BARANG', $id_barang);
		$query 	= 	$this->db->get('TB_BARANG');
		return $query->row();
	}

  	function update_barang($param,$id_barang)
    {
        $this->db->where('ID_BARANG',$id_barang);
        $this->db->update('TB_BARANG',$param);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    function delete_barang($id_barang)
    {
        $this->db->delete('TB_BARANG',array('ID_BARANG' =>$id_barang ));
        return;
    }

	/* -- Manage Barang Masuk -- */
	

	function get_barang_masuk()
  	{
  		$query = $this->db->order_by('ID_BARANG_MASUK', 'ASC');
        $query = $this->db->query('SELECT TB_BARANG_MASUK.*,NAMA_BARANG,NAMA_SUPPLIER 
        	FROM TB_BARANG_MASUK inner join TB_BARANG ON TB_BARANG_MASUK.ID_BARANG =
        	TB_BARANG.ID_BARANG inner join TB_SUPPLIER ON TB_BARANG.ID_SUPPLIER = TB_SUPPLIER.ID_SUPPLIER');
        return $query->result();
  	
  	}
  	
  	function insert_barang_masuk($data)
  	{
    $this->db->insert('TB_BARANG_MASUK',$data);
    redirect('data/v_barang_masuk');
  
  	}

  	function delete_barang_masuk($id_barang_masuk)
    {
        $this->db->delete('TB_BARANG_MASUK',array('ID_BARANG_MASUK' =>$id_barang_masuk ));
        return;
    }

		/* -- Manage Barang Keluar -- */
		

	function get_barang_keluar()
  	{
    	$query = $this->db->order_by('ID_BARANG_KELUAR', 'ASC');
        $query = $this->db->query('SELECT TB_BARANG_KELUAR.*,NAMA_BARANG,NAMA_SUPPLIER 
        	FROM TB_BARANG_KELUAR inner join TB_BARANG ON TB_BARANG_KELUAR.ID_BARANG =
        	TB_BARANG.ID_BARANG inner join TB_SUPPLIER ON TB_BARANG.ID_SUPPLIER = TB_SUPPLIER.ID_SUPPLIER');
        return $query->result();
  	
  	}
  	
  	function insert_barang_keluar($data)
  	{
    $this->db->insert('TB_BARANG_KELUAR',$data);
    redirect('data/v_barang_keluar');
  
  	}

  	function delete_barang_keluar($id_barang_keluar)
    {
        $this->db->delete('TB_BARANG_KELUAR',array('ID_BARANG_KELUAR' =>$id_barang_keluar ));
        return;
	}

	/* -- Admin -- */
	function get_admin()
	{
	  $query = $this->db->order_by('ID_ADMIN', 'ASC');
	  $query = $this->db->get('TB_ADMIN');
	  return $query->result();
	
	}

	function insert_admin($id_admin,$username,$password){  
		$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))
		(CONNECT_DATA=(SID=latihanDB)))" ;
		$c = OCILogon("UAS", "Inventori20", $db);
		$hasil;
		$sql = 'BEGIN INSERT_TB_ADMIN(:ID_ADMIN, :USERNAME,:PASSWORD); END;'; 
		$result = oci_parse($c,$sql);
		oci_bind_by_name($result,':ID_ADMIN',$id_admin);
		oci_bind_by_name($result,':USERNAME',$username);
		oci_bind_by_name($result,':PASSWORD',$password);

		oci_execute($result);
		redirect('data/v_admin'); 	
	}
  
}
