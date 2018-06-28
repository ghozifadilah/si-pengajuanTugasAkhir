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
		redirect('KoordinatorTA/KoordinatorTA');
	}
}

  public function index()
  {
    $this->load->view('header');
    $this->load->view('mahasiswa/Dashboard');
    $this->load->view('footer');
  }
  
  public function pengajuan(){
    $this->load->view('header');
	  $this->load->view('mahasiswa/ajukanjudul');
    $this->load->view('footer');
  }
  public function KirimJudul (){
    $this->load->view('header');
	  redirect('mahasiswa/usulanjudul/');
    $this->load->view('footer');
  }
  public function KirimJudulFIX (){
    $this->load->view('header');
	  redirect('mahasiswa/usulanjudulFIX/');
    $this->load->view('footer');
  }
  
  public function senpro(){
    $this->load->view('header');
	  $this->load->view('mahasiswa/SeminarPorposal');
    $this->load->view('footer');
  }
  

  
}
?>
