<?php 


class bataswaktu extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

		//ngeload model ben iso di panggil
		$this->load->model('M_AjukanJudul');
		$this->load->model('M_Config');
                $this->load->helper('url');
		
		
	}
 
 function KirimJudul(){
	
	$Tanggal = $this->M_Config->BatasWaktuJudulTA();
	
	foreach($Tanggal as $row){
		$mulai = $row['W_mulai'];
		$selesai = $row['W_selesai'];
	}
	
	
	if (!(strtotime($mulai) <= time() AND time() >= strtotime($selesai))) {
		//	echo "belum terlewat";
	redirect('mahasiswa/usulanjudul');
	
	} else {
	//echo "sudah terlewat";
	$this->load->view('notification/Block101');
	}

 }
	
function KirimProposal(){
	
	$sekarang=getdate(date("U"));
	//"$mydate[year]-$mydate[mon]-$mydate[mday]"
	
	$Dimana = array('Proses' =>"JudulTA");
	$Tanggal = $this->M_Config->BatasWaktuJudulTA();
	
	foreach($Tanggal as $row){
		$mulai = $row['W_mulai'];
		$selesai = $row['W_selesai'];
	}
	
	if (!(strtotime($mulai) <= time() AND time() >= strtotime($selesai))) {
		redirect('mahasiswa/usulanjudul');
	//jika batas waktu masih ada
		
	} else {
	//jika batas waktu di lewati
	$this->load->view('notification/Block101');
	}
	
	
	
	}
	
	
	function KirimJudulfinal(){
	
	$sekarang=getdate(date("U"));
	//"$mydate[year]-$mydate[mon]-$mydate[mday]"
	
	$Dimana = array('Proses' =>"JudulTAFIX");
	$Tanggal = $this->M_Config->BatasWaktuJudulTAFIX();
	
	foreach($Tanggal as $row){
		$mulai = $row['W_mulai'];
		$selesai = $row['W_selesai'];
	}
	
	if (!(strtotime($mulai) <= time() AND time() >= strtotime($selesai))) {
		redirect('mahasiswa/usulanjudulfix');
	//jika batas waktu masih ada
		
	} else {
	//jika batas waktu di lewati
	$this->load->view('notification/Block101');
	}
	
	
	
	}

		
			}
?>