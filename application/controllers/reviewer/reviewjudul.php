<?php 


class reviewjudul extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

		//Cek Login
		//memanggil function dari controller MY_Controller
 
  //validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/dosen');
 }
	


		//ngeload model ben iso di panggil
		$this->load->model('M_AjukanJudul');
		$this->load->model('M_Config');
        $this->load->helper('url');
		
		
	}
 
	function index(){
		
		
		
		
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->M_Config->Pagejumlah_KirimJudul('table_ta');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'mahasiswa/usulanjudul/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['table_ta'] = $this->M_Config->PageReview_judul('table_ta',$config['per_page'],$from);
		$this->load->view('reviewer/Review-Judul',$data);
		
		/*
		$where = array('id_user' =>$this->session->userdata('username'));
		$data['tabel_ta'] = $this->M_AjukanJudul->tampil_data($where)->result();
		$this->load->view('mahasiswa/ajukanjudul',$data);
		*/
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
			'tanggal_kirim' => "$mydate[year]-$mydate[mon]-$mydate[mday]"
			);
		
		
		$this->M_AjukanJudul->input_data($data,'table_ta');
		redirect('mahasiswa/usulanjudul/');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->M_AjukanJudul->hapus_data($where,'table_ta');
		redirect('mahasiswa/usulanjudul/');
}

	function edit($id){
		$where = array('id' => $id);
		$data['table_ta'] = $this->M_AjukanJudul->edit_data($where,'table_ta')->result();
		$this->load->view('reviewer/Review-Edit',$data);
	}
	
	function update(){
	$id = $this->input->post('id');
	$judul_TA = $this->input->post('judul_TA');
	$ringkasan = $this->input->post('ringkasan');
	$dospem = $this->input->post('dospem');
	$komentar = $this->input->post('komentar');
	$status = $this->input->post('status');
	$mydate=getdate(date("U"));

	$data = array(
			'judul_TA' => $judul_TA,
			'ringkasan' => $ringkasan,
			'dospem' => $dospem,
			'komentar' => $komentar,
			'status' => $status,
			'tanggal_kirim' => "$mydate[year]-$mydate[mon]-$mydate[mday]"
			);

	$where = array(
		'id' => $id
	);

	$this->M_AjukanJudul->update_data($where,$data,'table_ta');
	redirect('mahasiswa/usulanjudul/');
}



}
?>