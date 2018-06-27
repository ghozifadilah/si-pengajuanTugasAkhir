<?php 


class config extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

		//ngeload model ben iso di panggil
		$this->load->model('M_AjukanJudul');
		$this->load->model('M_Config');
        $this->load->helper('url');
		
		
	}
 
 function link_kirimJudul(){

	}
	
	
	
	
}

}
?>