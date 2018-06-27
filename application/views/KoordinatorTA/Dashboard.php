<html>
  <head>
    <title>TEST LOGIN || SITA </title>
  </head>
  <body>
      <center>
        <h1>Membuat Login MultiLevel Menggunakan Session Codeigniter || SITA </h1><br />
        <h2>SELAMAT DATANG KOORDINATOR TA </h2>
     
	
		
		<a href="<?php echo site_url('dosen/penelitian'); ?>">Judul Penelitian</a><br>
		<a href="<?php echo site_url('dosen/bimbingan'); ?>">Daftar Mahasiswa sebagai pembimibing</a><br>
		<a href="<?php echo site_url('koordinatorTA/DaftarDosen'); ?>">Daftar Dosen </a><br>
		<a href="<?php echo site_url('reviewer/reviewer/review'); ?>">Reviewer</a><br>
		<a href="<?php echo site_url('koordinatorTA/UserData'); ?>">Data User</a><br>
		<a href="<?php echo site_url('koordinatorTA/ControlTanggal'); ?>">Atur Jadwal </a><br>
	   <a href="<?php echo site_url('reviewer/reviewer/review'); ?>">Review judul</a><br>
	   <a href="<?php echo site_url('reviewer/reviewer/review'); ?>">Statistik</a><br>
	   <br><br>
	   <a href="#">Menentukan Pembimbing </a><br>
	   <?php echo anchor('koordinatorTA/DaftarBimbingan/Golongan/'.$golongan='A','Golongan A'); ?>
	    <?php echo anchor('koordinatorTA/DaftarBimbingan/Golongan/'.$golongan='B','Golongan B'); ?>
		<?php echo anchor('koordinatorTA/DaftarBimbingan/Golongan/'.$golongan='C','Golongan C'); ?>
		<?php echo anchor('koordinatorTA/DaftarBimbingan/Golongan/'.$golongan='D','Golongan D'); ?>
	   
	   <br><br>
	   
	  	   <a href="<?php echo site_url('public/pblc/laporan'); ?>"> Cetak Laporan</a><br>
	   <a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
		
      </center><br><br>
	  <center>
	  <h3> -Profile-</h3>

	   <h4><?php echo $this->session->userdata('nama'); ?> </h4>
	   <h4>NIK   : <?php echo $this->session->userdata('username'); ?> </h4>
	   <h4>Prodi    : <?php echo $this->session->userdata('prodi'); ?> </h4>
	   <h4>Golongan  : <?php echo $this->session->userdata('golongan') ?> </h4>
	  
	  
	  </center><br><br>
	  <center>
	
	  </center>
	  <br><br>
    </form>
  </body>
</html>
