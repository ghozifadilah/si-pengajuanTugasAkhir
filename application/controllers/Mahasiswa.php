<?php
class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Mahasiswa');
        //$this->load->model('User_Model');
        //$this->model = $this->Model_Mahasiswa;
	}
	
	function index(){
		$this->load->view('home');
	}
	function home(){
		//$data = $this->Model_Mahasiswa->get_data();
		$data = array(
				'data'=>$this->Model_Mahasiswa->get_data());
		//$this->load->view('App/list_mhs',['data' => $data]);
		$this->load->view('list_mhs',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Mahasiswa->input(array (
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'tm_prodi_id' => $this->input->post('prodi'),
			'tm_gol_id' => $this->input->post('gol')));
			redirect('Mahasiswa/home');
		}else{
			$x =$this->Model_Mahasiswa->get_prodi();
			$data = array(
				'nama_prodi'=>$this->Model_Mahasiswa->get_prodi(),
				'gol'=>$this->Model_Mahasiswa->get_gol()
				);
			//var_dump($x);
			$this->load->view('input_mhs',$data);
		}
	}
	function delete($id){
		$this->Model_Mahasiswa->delete($id);
		redirect('Mahasiswa/home');
	}
	function edit(){
		$id = $this->uri->segment(3);
		$data = array(
            'user' => $this->Model_Mahasiswa->get_data_edit($id),
		);
        //var_dump($data);
     	$data['id']= $this->Model_Mahasiswa->get_prodi();
     	$data['prodi']= $this->Model_Mahasiswa->get_prodi();
		$data['id']= $this->Model_Mahasiswa->get_gol();
		$data['golongan']= $this->Model_Mahasiswa->get_gol();

        $this->load->view("edit_mhs", $data);
	
		
	}
	
	function update(){
		$id = $this->input->post('nim');
		$insert = $this->Model_Mahasiswa->update(array(
                
				'nama' => $this->input->post('nama'),
				'tm_prodi_id' => $this->input->post('prodi'),
				'tm_gol_id' => $this->input->post('gol')
            ), $id);
        redirect('Mahasiswa/home');
        }
	
}