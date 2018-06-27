<?php 


class DaftarDosen extends CI_Controller{
	
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
		$this->load->model('M_Config');
        
		$this->load->helper('url');
		
		
	}
 //lihat
	function index(){
				
		$data['user'] = $this->M_Config->tampilnamaDosen();
		$this->load->view('koordinatorTA/UserConfig/DaftarDosen',$data);
		
	}


	//Tambah
	function kirimbaru(){
		$this->load->view('mahasiswa/Kirim-judul');
	}

	
	
	
	function hapus($id){
		$where = array('id_user' => $id);
		$this->M_Userdata->hapus_data($where,'user');
		redirect('KoordinatorTA/UserData');
}

	function edit($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->M_Userdata->edit_data($where,'user')->result();
		
		//option nganu akses prodi kro golongan
		$data['akses'] = $this->M_Config->aksesUser();
		$data['golongan'] = $this->M_Config->tampilgolongan();
		$data['prodi'] = $this->M_Config->tampilProdi();
		
		$this->load->view('KoordinatorTA/UserConfig/edit-User',$data);
	}
	
	function edit_limit($id){
		$where = array('id_user' => $id);
		//$data['user'] = $this->M_Userdata->edit_data($where,'user')->result();
		$data['Limit'] = $this->M_Userdata->edit_data($where,'limitdospem')->result();
		
		
		//option nganu akses prodi kro golongan
		$data['akses'] = $this->M_Config->aksesUser();
		$data['golongan'] = $this->M_Config->tampilgolongan();
		$data['prodi'] = $this->M_Config->tampilProdi();
		
		$this->load->view('KoordinatorTA/UserConfig/Edit-Limit',$data);
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

	$this->M_Userdata->update_data($where,$data,'user');
	redirect('koordinatorTA/UserData/');
}

function updatelimit(){
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

	$this->M_Userdata->update_data($where,$data,'user');
	redirect('koordinatorTA/UserData/');
}



}
?>