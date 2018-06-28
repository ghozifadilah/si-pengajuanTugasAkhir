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

	function edit($id){
		$where = array('id' => $id);
		$data['table_ta'] = $this->M_AjukanJudul->edit_data($where,'table_ta')->result();
		$this->load->view('reviewer/Reviewer-Edit',$data);
	}
	
	function update(){
	$id = $this->input->post('id');
	$komentar = $this->input->post('komentar');
	$status = $this->input->post('status');

	$data = array(
			'komentar' => $komentar,
			'status' => $status
			);
		

	$where = array(
		'id' => $id
	);

	$this->M_AjukanJudul->update_data($where,$data,'table_ta');
	redirect('reviewer/reviewjudul');
}



}
?>