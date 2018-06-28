<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_Proposal extends CI_Model{

   	function tampil_data($where){
		$this->db->where($where);
		return $this->db->get('kirimproposal');
	}
 
function input_data($data,$table){
		$this->db->insert($table,$data);
		//$this->db->on_duplicate($table, $data);
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

	function tampilnamaDosen(){
		//cari dosen
		$query = $this->db->query("SELECT * FROM user WHERE level IN ('dosen','kota','reviewer') ");
		return $query->result();
	}
	
	
  }