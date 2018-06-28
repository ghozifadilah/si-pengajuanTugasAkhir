<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeproposal extends CI_Controller {


function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
		 $this->load->model('M_Proposal');
	}

	public function index(){
		$where = array('NIM' =>$this->session->userdata('username'));
		$data['dataproposal'] = $this->M_Proposal->tampil_data($where)->result();
		
	
		
		$this->load->view('header');
		$this->load->view('mahasiswa/v_proposal',$data);
		$this->load->view('footer');
	}

	public function aksi_upload(){
		$config['upload_path']          = './berkas-Proposal';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 10000000;
		
		$this->load->library('upload', $config);
 	if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			var_dump($error); die;
			$this->load->view('mahasiswa/v_proposal', $error);
		}else{
			
			$dataFile = array('upload_data' => $this->upload->data());
			
			
			$file_path = $dataFile['upload_data']["file_name"]; 
			$judul = $this->input->post('judul');
			
			$data = array(
			'NIM' => $this->session->userdata('username'),
			'Judul' => $judul,
			'Nama' => $judul,
			'Prodi' => $this->session->userdata('prodi'),
			'Golongan' => $this->session->userdata('golongan'),
			'file' => "http://localhost/Sita2018/berkas-Proposal/$file_path",
			'sudah' => 1,
			
			);
			
			$this->M_Proposal->input_data($data,'kirimproposal');
			
			$this->load->view('mahasiswa/homeproposal',$dataFile);
		}
	}

	function hapus($id){
		$where = array('NIM' => $id);
	
		$this->M_Proposal->hapus_data($where,'kirimproposal');
		redirect('mahasiswa/usulanjudul/');
		
		
		}
	}
