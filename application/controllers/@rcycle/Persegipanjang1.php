<?php
class Persegipanjang1 extends CI_Controller{
	public function index(){
		if (isset($_POST['tambah'])){
		//pemanggilan model /pembuatan model
		$this->load->model('Persegipanjang_model');
		$model = $this-> Persegipanjang_model;
		
		$panjang = $_POST['p'];
		$lebar = $_POST['l'];
	
	
	//penentuan nilai panjang & lebar
	$model -> set_panjang(4);
	$model -> set_lebar(5);
	
	//menampilkan ke view
	$this->load->view('Persegipanjangview',array('model'=>$model));
		}else{
			//meanmpilkan from
			$this->load->view('persegipanjangfromview');
		}
		
}
}
