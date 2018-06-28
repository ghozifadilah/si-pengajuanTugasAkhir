<?php 
 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class GrafikDosen extends CI_Controller 
 
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
		$this->load->view('header'); 
        $this->load->view('statistik/Chart_viewDosen'); 
        } 
 
    public function getdata() 
        { 
        $data = $this->M_Grafik->get_all_Dosen(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Dosen", 
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
                    "v" => "$cd->nama", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->nilai, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
    }