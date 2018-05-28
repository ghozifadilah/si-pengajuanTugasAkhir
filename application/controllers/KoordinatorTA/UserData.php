<?php 


class UserData extends CI_Controller{
	
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


		
		$this->load->model('M_Userdata');
                $this->load->helper('url');
		
		
	}
 //lihat
	function index(){
		
		$data['user'] = $this->M_Userdata->tampil_data()->result();
		$this->load->view('koordinatorTA/UserConfig/Datauser',$data);
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
			'nama' => $nama,
			'ringkasan' => $ringkasan,
			'dospem' => $dospem,
			'komentar' => "Belum ada komentar",
			'status' => "Belum Di review"
			);
		$this->M_AjukanJudul->input_data($data,'table_ta');
		redirect('mahasiswa/usulanjudul/');
	}
	
	function hapus($id){
		$where = array('id_user' => $id);
		$this->M_Userdata->hapus_data($where,'user');
		redirect('KoordinatorTA/UserData');
}

	function edit($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->M_Userdata->edit_data($where,'user')->result();
		$data['akses'] = $this->M_Userdata->tampil_data()->result();
		$this->load->view('KoordinatorTA/UserConfig/edit-User',$data);
	}
	
	function update(){
	$id_user = $this->input->post('id_user');
	$nama = $this->input->post('nama');
	$prodi = $this->input->post('prodi');
	$level = $this->input->post('level');
	$active = $this->input->post('active');
	
	$data = array(
			'id_user' => $id_user,
			'nama' => $nama,
			'prodi' => $prodi,
			'level' => $level,
			'active' => $active
			);

	$where = array(
		'id_user' => $id_user
	);

	$this->M_Userdata->update_data($where,$data,'table_ta');
	redirect('koordinatorTA/UserData/');
}



}
?>