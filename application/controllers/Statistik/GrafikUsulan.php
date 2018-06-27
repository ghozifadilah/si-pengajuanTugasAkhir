<?php 
 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class GrafikUsulan extends CI_Controller 
 
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
        $this->load->view('statistik/Chart_viewDosen'); 
        } 
 
    public function getdata() 
        { 
        $data = $this->M_Grafik->get_all_UsulanJudul(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Tanggal", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "TotalUsulan,", 
            "pattern" => "", 
            "type" => "number" 
        ); 
		
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => (int)$cd->Hari , 
                    "f" => null 
					
                ) , 
                array( 
                    
					"v" => (int)$cd->TotalUsulan, 
                    "f" => null 
                ) 
			
            ); 
			
            } 
 
        echo json_encode($responce); 
        } 
    }