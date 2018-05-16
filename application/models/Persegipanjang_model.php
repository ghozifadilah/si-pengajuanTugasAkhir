<?php
class Persegipanjang_model extends CI_model{
	//atribut model
	private $panjang;
	private $lebar;
	
	//menentukan nilai $panjang dan $lebar
	public function set_panjang($p){
		$this -> panjang = $p;
	}
	public function set_lebar($l){
		$this -> lebar = $l;
	}
	
	//pengambilan nilai $pangjang dan $lebar
	public function get_panjang(){
		return $this->panjang;
	}
	public function get_lebar(){
		return $this->lebar;
	}
	
	//perhitunganluas persegi panjang
	public function hitung_luas(){
		return $this->panjang * $this->lebar;
	}
	//perhitungan keliling persegi panjang
	public function hitung_keliling(){
		return 2 * $this->panjang * $this ->lebar;
	}
}
