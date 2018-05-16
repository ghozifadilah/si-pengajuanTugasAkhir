<?php
class Kode1 extends CI_Controller{
	public function index(){
		$this->load->view('phpview');
	}
	public function hello_python(){
		$this->load->view('pythonview');
	}
	public function hello_cpp(){
		$this->load->view('cppview');
	}
	public function hello_java(){
		$this->load->view('javaview');
	}
	public function _remap($var){
		if (isset($var)){
			switch (strtolower($var)){
			case 'python':
				$this->hello_python();
				break;
			case 'cpp':
				$this->hello_java();
				break;
			case 'java':
				$this->hello_java();
				break;
			default:
				$this-> index();
			}
		}else {
			$this ->index();
		}
	}
}
?>