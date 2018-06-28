<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Grafik extends CI_Model{
 
	
	//Dosen 
	public function DataDosen($dospem){

	 $this->db->query("INSERT INTO statistik_dosen (nama,nilai) VALUES ('$dospem',1) ON DUPLICATE KEY UPDATE nilai=nilai+1;
		");
	
	}
	
	public function get_all_Dosen() 
    { 
        return $this->db->get('statistik_dosen')->result(); 
    } 
	//////=====================================================================================================/////
	
	//UsulanJudul
	public function UsulanJudul($hari){

	 $this->db->query("INSERT INTO statistik_pengajuan (Hari,TotalUsulan) VALUES ('$hari',1) ON DUPLICATE KEY UPDATE TotalUsulan=TotalUsulan+1;
		");
	
	}
	
	public function get_all_UsulanJudul() 
    { 
        return $this->db->get('statistik_pengajuan')->result(); 
    } 
	
	
	public function count_datamahasiswa(){
		// menghitung data row 
		return $this->db->where(['level'=>'mahasiswa'])->from("user")->count_all_results();
	}
	
	public function DataMahasiswa($row_data){
		
	$this->db->query("INSERT INTO statistik_mahasiswa (Nama,Nilai) VALUES ('SudahMengajukan', 1) ON DUPLICATE KEY UPDATE Nilai=Nilai+1;
		");		

	 $this->db->query("INSERT INTO statistik_mahasiswa (Nama,Nilai) VALUES ('BelumMengajukan',$row_data) ON DUPLICATE KEY UPDATE Nilai=Nilai-1;
		
		");
	}
	public function DataMahasiswaTambah(){
		
	 $this->db->query("INSERT INTO statistik_mahasiswa (Nama) VALUES ('BelumMengajukan') ON DUPLICATE KEY UPDATE Nilai=Nilai+1;
		
	");
	}
	public function DataMahasiswaKurang(){
		
	 $this->db->query("INSERT INTO statistik_mahasiswa (Nama,Nilai) VALUES ('BelumMengajukan',$row_data) ON DUPLICATE KEY UPDATE Nilai=Nilai-1;	
		");
		
	
	}
	
	public function get_all_DataMahasiswa() 
    { 
        return $this->db->get('statistik_pengajuan')->result(); 
    } 
	
  }