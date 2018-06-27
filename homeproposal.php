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
	 */Test

function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('v_proposal');
		$this->load->view('footer');
	}

	public function aksi_upload(){
		$config['upload_path']          = './berkas/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 100000;
		
		$this->load->library('upload', $config);
 	if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_prokjkjposal', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('v_proposal', $data);
		}
	}
}
