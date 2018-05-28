<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_account'); //call model
     }
 
     public function index() {
			// Validasi Form
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
		 $this->form_validation->set_rules('prodi', 'PRODI','required');
		 $this->form_validation->set_rules('golongan', 'GOLONGAN','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
        
		 //jika validasi form salah
		if($this->form_validation->run() == FALSE) {
             $this->load->view('authentication/v_register');
         }else{
			//input ke database user
             $data['nama']    =   		  $this->input->post('name');
             $data['id_user'] =   		  $this->input->post('username');
             $data['prodi']   =    	 	  $this->input->post('prodi');
			 $data['golongan']  =    	  $this->input->post('golongan');
             $data['password']  =     md5($this->input->post('password'));
			 $data['level']  =    	  	  "mahasiswa";
			 $data['active']  =    	  	  "1";
 
             $this->M_account->daftar($data);
             $pesan['message'] =    "Pendaftaran berhasil";
             $this->load->view('notification/DaftarSukses');
         }
     }
	 //link tok 
	  public function newuser () {
    $this->load->view('authentication/v_register');
  }
 
	 
 }