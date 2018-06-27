<?php 
 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class GrafikMahasiswa extends CI_Controller 
 
    { 
    function __construct() 
        { 
        parent::__construct(); 
        $this->load->model('M_Grafik'); 
 
        // $this->load->library('form_validation'); 
 
        $this->load->helper('string'); 
        } 
 
    public 
 
    function index() 
        { 
       
		
		$this->load->view('Statistik/Chart_viewDosen'); 
		
        } 
 
    public function getdata() 
        { 
		
        $data = $this->M_Grafik->get_all_DataMahasiswa(); 
		$Belum = $this->M_Grafik->count_datamahasiswa();
		
	
	foreach($data as $row){
		
		$Sudah = $row -> Nilai ;	
	}
		$BelumMengajukan = $Belum  - $Sudah;
		
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Mahasiswa", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 

        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->Nama", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->Nilai, 
                    "f" => null 
                )
				
            ); 
            } 
			
			foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "Belum Mengajukan",
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$BelumMengajukan,
                    "f" => null 
                )
				
            ); 
            } 

			
			
				
 
        echo json_encode($responce); 
        } 
    }