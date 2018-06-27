<?php

	function __construct(){
		parent::__construct();	

  //validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/dosen');
 }
	if ($this->session->userdata('level') == "mahasiswa"){
		redirect('mahasiswa/mahasiswa');
	}

	if ($this->session->userdata('level') == "reviewer"){
		redirect('reviewer/reviewer');
	}

		
		$this->load->model('M_Userdata');
		$this->load->model('M_Config');
		$this->load->helper('url');
		
		

class bataswaktu extends CI_Controller{
	
	function index(){
		//buat sett tanggal dari kontroller
		
	}
	
	
	function Ubah(){
		
		
	}
	
	
	}
	
			
?>