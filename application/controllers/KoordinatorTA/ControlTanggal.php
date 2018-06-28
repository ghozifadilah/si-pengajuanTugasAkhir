<?php 


class ControlTanggal extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

  //validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/dosen');
 }
	if ($this->session->userdata('level') == "mahasiswa"){
		redirect('mahasiswa/mahasiswa');
	}
	if ($this->session->userdata('level') == "reviewer"){
		redirect('reviewer/reviewer');
	}


		
		$this->load->model('M_Userdata');
		$this->load->model('M_Config');
        
		$this->load->helper('url');
		
		
	}
 //lihat tanggal 
	function index(){
		//buat edit tanggal
		$data['Tanggal'] = $this->M_Config->TampilTanggal();
		$this->load->view('header');
		$this->load->view('koordinatorTA/ConfigJadwal/AturJadwal',$data);
		$this->load->view('footer');
	}

	//ngedit batas waktu and shit
	function editJadwalTA(){
		
		$data['TanggalJudul'] = $this->M_Config->BatasWaktuJudulTA();
		$this->load->view('KoordinatorTA/ConfigJadwal/EditJadwalTA',$data);
	}
	function editJadwalProposal(){
		
		$data['TanggalJudul'] = $this->M_Config->BatasWaktuProposal();
		$this->load->view('KoordinatorTA/ConfigJadwal/EditJadwalProposal',$data);
	}
	
	//ngedit batas waktu and shit
	function updateJudul(){
	$Proses = $this->input->post('Proses');
	$W_mulai = $this->input->post('DimulaiTA');
	$W_selesai = $this->input->post('SelesaiTA');
	
	
	$data = array(
			'Proses' => $Proses,
			'W_mulai' => $W_mulai,
			'W_selesai' => $W_selesai,
			);

	$where = array(
		'Proses' => $Proses
	);

	$this->M_Config->update_Tanggal_TA($where,$data,'tanggal');
	redirect('koordinatorTA/ControlTanggal/');
}



}
?>