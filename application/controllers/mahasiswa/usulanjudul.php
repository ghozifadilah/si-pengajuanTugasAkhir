<?php 


class usulanjudul extends CI_Controller{
	
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


		
		$this->load->model('M_AjukanJudul');
                $this->load->helper('url');
		
		
	}
 
	function index(){
		$where = array('id_user' =>$this->session->userdata('username'));
		$data['tabel_ta'] = $this->M_AjukanJudul->tampil_data($where)->result();
		$this->load->view('mahasiswa/ajukanjudul',$data);
	}

	
	//Tambah
	function kirimbaru(){
		$this->load->view('mahasiswa/Kirim-judul');
	}

	//aksi tambah
		function tambah_aksi(){
		
		$judul = $this->input->post('judul');
		$ringkasan = $this->input->post('ringkasan');
		$dospem = $this->input->post('dospem');
 
		$data = array(
			'id_user' => $this->session->userdata('username'),
			'judul_TA' => $judul,
			'ringkasan' => $ringkasan,
			'dospem' => $dospem,
			'komentar' => "Belum ada komentar",
			'status' => "Belum Di review"
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
		$this->load->view('mahasiswa/Edit-Judul',$data);
	}
	
	function update(){
	$id = $this->input->post('id');
	$judul_TA = $this->input->post('judul_TA');
	$ringkasan = $this->input->post('ringkasan');
	$dospem = $this->input->post('dospem');

	$data = array(
			'judul_TA' => $judul_TA,
			'ringkasan' => $ringkasan,
			'dospem' => $dospem,
			'komentar' => "Belum ada komentar",
			'status' => "Belum Di review"
			);

	$where = array(
		'id' => $id
	);

	$this->M_AjukanJudul->update_data($where,$data,'table_ta');
	redirect('mahasiswa/usulanjudul/');
}



}
?>