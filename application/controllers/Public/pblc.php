<?php
class pblc extends MY_Controller{

 public function __construct(){
  parent::__construct();

  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level jika tidak sesuai
}

  public function index(){
	$this->load->view('header');
    $this->load->view('KoordinatorTA/Dashboard');
	$this->load->view('footer');
	
  }
  
  public function laporan (){
	 //nganu  laporan
	 $this->load->view('header');
	 $this->load->view('public/CetakLaporan');
	 $this->load->view('footer');
  }
  
  public function laporan_UsulanJudul (){
	 //nganu  laporan
	 $this->load->view('header');
	 $this->load->view('KoordinatorTA/CetakLaporan');
	 $this->load->view('footer');
  }
  
  
  
  
}
?>
