<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeproposal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
		 $this->load->model('M_Proposal');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('mahasiswa/v_proposal');
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
			
			$this->load->view('mahasiswa/v_proposalsukses',$dataFile);
		}
	}
}
