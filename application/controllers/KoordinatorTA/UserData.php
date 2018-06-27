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
		$this->load->model('M_Config');
        
		$this->load->helper('url');
		
		
	}
 //lihat
	function index(){
		
		//pengaturan pagination tabel
		$this->load->database();
		$jumlah_data = $this->M_Config->Pagejumlah_dataUser('user');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'koordinatorTA/UserData/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['user'] = $this->M_Config->PagedataUser('user',$config['per_page'],$from);
		$this->load->view('koordinatorTA/UserConfig/Datauser',$data);
		
		
		
		/*$data['user'] = $this->M_Userdata->tampil_data()->result();
		$this->load->view('koordinatorTA/UserConfig/Datauser',$data);
		*/
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



}
?>