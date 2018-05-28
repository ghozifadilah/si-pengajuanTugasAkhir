<?php
class mahasiswa extends MY_Controller{

 public function __construct(){
  parent::__construct();

  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/dosen');
 }
	if ($this->session->userdata('level') == "kota"){
		redirect('KoordinatorTA/KoordinatroTA');
	}
}

  public function index()
  {
    $this->load->view('mahasiswa/Dashboard');
  }
  
  public function pengajuan(){
	  $this->load->view('mahasiswa/ajukanjudul');
  }
  
  public function senpro(){
	  $this->load->view('mahasiswa/SeminarPorposal');
  }
  
  
}
?>
