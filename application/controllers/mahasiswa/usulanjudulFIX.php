<?php 


class usulanjudulFIX extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

		//Cek Login
		//memanggil function dari controller MY_Controller
 
  //validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/dosen');
 }
	if ($this->session->userdata('level') == "kota"){
		redirect('KoordinatorTA/KoordinatorTA');
	}


		//ngeload model ben iso di panggil
		$this->load->model('M_AjukanJudulFIX');
		$this->load->model('M_Config');
        $this->load->helper('url');
		
		
	}
 
	function index(){
		
		
		
		$id_user = array('id_user' =>$this->session->userdata('username'));
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->M_Config->Pagejumlah_KirimJudulfix('table_tafix');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'mahasiswa/usulanjudul/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['table_ta'] = $this->M_Config->Pagedata_KirimJudulfix('table_tafix',$id_user,$config['per_page'],$from);
		$this->load->view('mahasiswa/ajukanjudulfix',$data);
		
		/*
		$where = array('id_user' =>$this->session->userdata('username'));
		$data['tabel_ta'] = $this->M_AjukanJudul->tampil_data($where)->result();
		$this->load->view('mahasiswa/ajukanjudul',$data);
		*/
	}

	
	//Tambah
	function kirimbaru(){
		//manggil dosen
		$data['dospem'] = $this->M_Config->tampilnamaDosen();
		
		$this->load->view('mahasiswa/Kirim-judulfix',$data);
		
		
	}

	//aksi tambah
		function tambah_aksi(){
		
		$judul = $this->input->post('judul');
		$ringkasan = $this->input->post('ringkasan');
		$dospem = $this->input->post('dospem');
		
		$mydate=getdate(date("U"));
		
		
 
		$data = array(
			'id_user' => $this->session->userdata('username'),
			'judul_TA' => $judul,
			'prodi' => $this->session->userdata('prodi'),
			'golongan' => $this->session->userdata('golongan'),
			'ringkasan' => $ringkasan,
			'dospem' => $dospem,
			'komentar' => "Belum ada komentar",
			'status' => "Belum Di review",
			'Status_pembimbing' => "pending",
			'tanggal_kirim' => "$mydate[year]-$mydate[mon]-$mydate[mday]"
			);
		
		
		$this->M_AjukanJudulFIX->input_data($data,'table_tafix');
		redirect('mahasiswa/usulanjudulfix/');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->M_AjukanJudulFIX->hapus_data($where,'table_tafix');
		redirect('mahasiswa/usulanjudulfix/');
}

	function edit($id){
		$where = array('id' => $id);
		$data['table_ta'] = $this->M_AjukanJudulFIX->edit_data($where,'table_tafix')->result();
		$this->load->view('mahasiswa/Edit-Judulfix',$data);
	}
	
	function update(){
	$id = $this->input->post('id');
	$judul_TA = $this->input->post('judul_TA');
	$ringkasan = $this->input->post('ringkasan');
	$dospem = $this->input->post('dospem');
	$mydate=getdate(date("U"));

	$data = array(
			'judul_TA' => $judul_TA,
			'ringkasan' => $ringkasan,
			'dospem' => $dospem,
			'komentar' => "Belum ada komentar",
			'status' => "Belum Di review",
			'Status_pembimbing' => "pending",
			'tanggal_kirim' => "$mydate[year]-$mydate[mon]-$mydate[mday]"
			);

	$where = array(
		'id' => $id
	);

	$this->M_AjukanJudulFIX->update_data($where,$data,'table_tafix');
	redirect('mahasiswa/usulanjudulfix/');
}



}
?>