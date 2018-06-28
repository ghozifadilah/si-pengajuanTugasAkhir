<?php
class reviewer extends MY_Controller{

 public function __construct(){
  parent::__construct();

  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "mahasiswa") {
      redirect('mahasiswa/mahasiswa');
 }
 
	if($this->session->userdata('level') == "dosen"){
		redirect('dosen/dosen');
	}
  if($this->session->userdata('level') == "kota"){
    redirect('KoordinatorTA/KoordinatorTA');
  }
}

  public function index()
  {
    $this->load->view('header');
    $this->load->view('reviewer/Dashboard');
    $this->load->view('footer');
  }
  
  public function review(){
	  redirect('reviewer/reviewjudul');
  }

}

?>
