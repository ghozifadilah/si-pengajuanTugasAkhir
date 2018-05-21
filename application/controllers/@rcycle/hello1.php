<?php
class hello1 extends CI_Controller{
	public function index(){
		
		//c3 - memuat model 'hello_model'
		$this -> load ->model('Hello_model'); 
		
		//pengambilan objek dari kelas Hello_model dan memuat di va $model
		$model = $this -> Hello_model;
		
		//mengambil data dari model
		$a = $model -> txt;
		
		//membuat data yang akan dikirim ke view
		$data ['teks'] = $a;
		
		//memanggil file view
		$this -> load ->view('helloview',$data);
		
	
	}
}
?>