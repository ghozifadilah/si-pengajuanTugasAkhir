<?php
class KoordinatorTA extends MY_Controller{

 public function __construct(){
  parent::__construct();

  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level jika tidak sesuai
    if ($this->session->userdata('level') == "mahasiswa") {
      redirect('mahasiswa/mahasiswa');
 }
 if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/dosen');
 }
  if ($this->session->userdata('level') == "reviewer") {
      redirect('reviewer/reviewer');
 }
}

  public function index(){
	$this->load->view('header');
    $this->load->view('KoordinatorTA/Dashboard');
	$this->load->view('footer');
	
  }
  
  public function UbahJadwal (){
	 //nganu  Jadwal
	 $this->load->view('header');
	 redirect('mahasiswa/usulanjudul/');
  }
  
  
}
?>
