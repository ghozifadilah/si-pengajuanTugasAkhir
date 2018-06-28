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


		//ngeload model ben iso di panggil
		$this->load->model('M_AjukanJudul');
		$this->load->model('M_Config');
        $this->load->helper('url');
		$this->load->model('M_Grafik');
		
	}
 
	function index(){
		
		
		
		$id_user = array('id_user' =>$this->session->userdata('username'));
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->M_Config->Pagejumlah_KirimJudul('table_ta');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'mahasiswa/usulanjudul/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['table_ta'] = $this->M_Config->Pagedata_KirimJudul('table_ta',$id_user,$config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('mahasiswa/ajukanjudul',$data);
		
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
		
		$this->load->view('mahasiswa/Kirim-judul',$data);
		
		
	}

	//aksi tambah
		function tambah_aksi(){
		
		
	

		
		$judul = $this->input->post('judul');
		$ringkasan = $this->input->post('ringkasan');
		$dospem = $this->input->post('dospem');
		$ik = $this->input->post('ik');
		$mydate=getdate(date("U"));
		

	    
		
		$data = array(
			'id_user' => $this->session->userdata('username'),
			'judul_TA' => $judul,
			'ik'=> $ik,
			'prodi' => $this->session->userdata('prodi'),
			'golongan' => $this->session->userdata('golongan'),
			'ringkasan' => $ringkasan,
			'dospem' => $dospem,
			'komentar' => "Belum ada komentar",
			'status' => "Belum Di review",
			'Status_pembimbing' => "pending",
			'tanggal_kirim' => "$mydate[year]-$mydate[mon]-$mydate[mday]"
			);
		
	    //data statistik pengajuan
		$hari = $mydate[mday];
		
	   
	   
	    $this->M_Grafik->DataMahasiswa();
		$this->M_Grafik->UsulanJudul($hari);
		$this->M_Grafik->DataDosen($dospem);
		
		$this->M_AjukanJudul->input_data($data,'table_ta');
		$this->load->view('header');
		redirect('mahasiswa/usulanjudul/');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$usulan = $data['table_ta'] = $this->M_AjukanJudul->edit_data($where,'table_ta')->result();
		foreach($usulan as $row){
		$status = $row->status;
		}
		
		if($status === "Belum Di rev" ){
		$this->M_AjukanJudul->hapus_data($where,'table_ta');
		redirect('mahasiswa/usulanjudul/');
		}else{
			echo 'Tidak bsa di edit karena sudah di reviewe';
			die;
		}
		
		
}

	function edit($id){
		$where = array('id' => $id);
		$usulan = $data['table_ta'] = $this->M_AjukanJudul->edit_data($where,'table_ta')->result();
		$data['dospem'] = $this->M_Config->tampilnamaDosen();
		
		
		foreach($usulan as $row){
		$status = $row->status;
		}
		
		if($status === "Belum Di rev" ){
		$this->load->view('header');
		$this->load->view('mahasiswa/Edit-Judul',$data);
		
		}else{
			echo 'Tidak bsa di edit karena sudah di reviewe';
			die;
		}
		
		
	}
	
	function update(){
	$id = $this->input->post('id');
	$judul_TA = $this->input->post('judul_TA');
	$ik = $this->input->post('ik');
	$ringkasan = $this->input->post('ringkasan');
	$dospem = $this->input->post('dospem');
	
	$mydate=getdate(date("U"));

	$data = array(
			'judul_TA' => $judul_TA,
			'ik' => $ik,
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

	$this->M_AjukanJudul->update_data($where,$data,'table_ta');
	redirect('mahasiswa/usulanjudul/');
}



}
?>