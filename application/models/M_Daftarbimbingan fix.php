<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_Daftarbimbingan extends CI_Model{

  //pageinaton dan view tabel
  function Pagedata_bimbingan($table,$where,$number,$offset){
		$this->db->where($where);
		return $query = $this->db->get($table,$number,$offset)->result();		
}
	function Pagejumlah_bimbingan($table){
		return $this->db->get($table)->num_rows();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}

function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
}

	
	
  }