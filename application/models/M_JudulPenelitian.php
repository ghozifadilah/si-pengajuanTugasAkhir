<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_JudulPenelitian extends CI_Model{
function DaftarJudulPenelitian(){
	
}
  //pageinaton dan view tabel
  function Pagedata_Penelitian($table,$where,$number,$offset){
		$this->db->where($where);
		return $query = $this->db->get($table,$number,$offset)->result();		
}
	function Pagejumlah_penelitian($table){
		return $this->db->get($table)->num_rows();
}

function DaftarPagedata_Penelitian($table,$number,$offset){
		return $query = $this->db->get($table,$number,$offset)->result();		
}
	function DaftarPagejumlah_penelitian($table){
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