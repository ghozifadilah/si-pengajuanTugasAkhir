<?php
class Demo_view2 extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this ->load->helper('url');
	}
	//HALO SELAMAT PAGI
	public function index(){
		$this -> load->view('demoview');
		
		
	}
}
?>