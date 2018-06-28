<?php 


class penelitian extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

		//Cek Login
		//memanggil function dari controller MY_Controller
 
  //validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "mahasiswa") {
      redirect('mahasiswa/mahasiswa');
 }
	

		//ngeload model ben iso di panggil
		$this->load->model('M_AjukanJudul');
		$this->load->model('M_JudulPenelitian');
		$this->load->model('M_Config');
        $this->load->helper('url');

		
		
	}
   
   
   
	function index(){
		
		
		
		$id_user = array('id_user' =>$this->session->userdata('username'));
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->M_JudulPenelitian->Pagejumlah_penelitian('table_penelitiandosen');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'dosen/DaftarPenelitian/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['table_ta'] = $this->M_JudulPenelitian->Pagedata_Penelitian('table_penelitiandosen',$id_user,$config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('dosen/DaftarPenelitian',$data);
		
		/*
		$where = array('id_user' =>$this->session->userdata('username'));
		$data['tabel_ta'] = $this->M_AjukanJudul->tampil_data($where)->result();
		$this->load->view('mahasiswa/ajukanjudul',$data);
		*/
	}

	function DaftarPenelitian(){
		$this->load->database();
		$jumlah_data = $this->M_JudulPenelitian->DaftarPagejumlah_penelitian('table_penelitiandosen');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'dosen/DaftarPenelitian/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['table_ta'] = $this->M_JudulPenelitian->DaftarPagedata_Penelitian('table_penelitiandosen',$config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('dosen/DaftarPenelitian',$data);
	}
	
	//Tambah
	function kirimbaru(){
		//manggil dosen
		$this->load->view('header');
		$this->load->view('dosen/Judul-Baru');
		
	}

	//aksi tambah
		function tambah_aksi(){
		
		$judul = $this->input->post('judul');
		$kuota = $this->input->post('kuota');
		
 
		$data = array(
			'id_user' => $this->session->userdata('username'),
			'nama' => $this->session->userdata('nama'),
			'Judul_penelitian' => $judul,
			'kuota' => $kuota,
			);
		
		$this->load->view('header');
		$this->M_JudulPenelitian->input_data($data,'table_penelitiandosen');
		redirect('dosen/penelitian/');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->M_JudulPenelitian->hapus_data($where,'table_penelitiandosen');
		redirect('dosen/penelitian/');
}

	function edit($id){
		$where = array('id' => $id);
		$data['penelitian'] = $this->M_JudulPenelitian->edit_data($where,'table_penelitiandosen')->result();
		$this->load->view('header');
		$this->load->view('dosen/Edit-Judul',$data);
	}
	
	function update(){
	$id = $this->input->post('id');
	$Judul = $this->input->post('Judul');
	$kuota = $this->input->post('Kuota');
	

	$data = array(
			'Judul_penelitian' => $Judul,
			'kuota' => $kuota,
			);

	$where = array(
		'id' => $id
	);

	$this->M_JudulPenelitian->update_data($where,$data,'table_penelitiandosen');
	redirect('dosen/penelitian');
}



}
?>