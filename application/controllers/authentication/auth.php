<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

//fungsi menegecek login user
public function cekAkun(){
	//load model user_error
	$this->load->model('model_users');
	
	//membuat validasi login
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	
	
	$query = $this->model_users->cekAkun($username, $password);
	
	if($query === 1 ){
		return "User tidak ditemukan";
	}else if ($query === 2){
		return "user tidak aktif";
	}else if ($query ===3 ){
		return "Password Salah";
	}else{
		//membuat session dengan nama userdata
		$userData = array(
			'username'=> $query->id_user,
			'level'=> $query->level,
			'nama'=> $query->nama,
			'prodi'=> $query->prodi,
			'golongan'=> $query->golongan,
			'logged_in' => true
		);
		$this->session->set_userdata($userData);
		return TRUE;
	}
	
}

public function login(){
	//melakukan pengalihan halaman sesuai akses atau level user
	if ($this->session->userdata('level') == "mahasiswa"){redirect('mahasiswa/mahasiswa');}
    if ($this->session->userdata('level') == "dosen"){redirect('dosen/dosen');}
	if ($this->session->userdata('level') == "kota"){redirect('KoordinatorTA/KoordinatorTA');}
	if ($this->session->userdata('level') == "reviewer"){redirect('reviewer/reviewer');}
	
	//Proses login dan validasi
	if($this->input->post('submit')){
		$this->load->model('Model_users');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$error = $this->cekAkun();
      
	  if ($this->form_validation->run() && $error === TRUE) {
        $data = $this->Model_users->cekAkun($this->input->post('username'), $this->input->post('password'));
		
		//jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
        if($data->level == 'mahasiswa'){
          redirect('mahasiswa/mahasiswa');
        }
        else if($data->level == 'dosen'){
          redirect('dosen/dosen');
        }else if($data->level == 'kota'){
			redirect('KoordinatorTA/KoordinatorTA');
		}else if($data->level == 'reviewer'){
			redirect('reviewer/reviewer');
		}
		
	}
	
	    //Jika bernilai FALSE maka tampilkan error
      else{
        $data['error'] = $error;
        $this->load->view('authentication/login', $data);
      }
    }
    //Jika tidak maka alihkan kembali ke halaman login
    else{
      $this->load->view('authentication/login');
    }
  }
  
public function logout() {
    //Menghapus semua session (sesi)
    $this->session->sess_destroy();
    redirect('authentication/auth/login');
  }
  
  



	
}
?>
