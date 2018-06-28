<?php
class dosen extends MY_Controller{

 public function __construct(){
  parent::__construct();

  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "mahasiswa") {
      redirect('mahasiswa/mahasiswa');
 }
	if ($this->session->userdata('level') == "kota") {
      redirect('KoordinatorTA/KoordinatorTA');
 }
	if($this->session->userdata('level') == "reviewer"){
		redirect('reviewer/reviewer');
	}
}

  public function index()
  {
    $this->load->view('header');
    $this->load->view('dosen/Dashboard');
    $this->load->view('footer');
  }
  // input judul penelitian, melihat mahasiswa sebagai pembinging,memilih mahasisa yang akan di bimbing
  public function julpen(){
	  $this->load->view('header');
    $this->load->view('dosen/Penelitian');
    $this->load->view('footer');
  }

  public function mahsaya() {
    $this->load->view('header');
    $this->load->view('dosen/MahasiswaSaya');
    $this->load->view('footer');
  }
  public function pilmah(){
    $this->load->view('header');
    $this->load->view('dosen/PilihMahasiswa');
    $this->load->view('footer');
  }
  
  


  
}
?>
