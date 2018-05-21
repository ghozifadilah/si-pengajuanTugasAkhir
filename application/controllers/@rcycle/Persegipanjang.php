<?php
class Persegipanjang extends CI_Controller{
	public function index(){
		//pemanggilan model
		$this->load->model('Persegipanjang_model');
		$model = $this-> Persegipanjang_model;
	
	
	//penentuan nilai panjang & lebar
	$model -> set_panjang(4);
	$model -> set_lebar(5);
	
	//menampilkan ke view
	$this->load->view('Persegipanjangview',array('model'=>$model));
}
}
