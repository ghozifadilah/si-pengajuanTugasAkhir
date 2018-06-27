<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		<a href="<?php echo site_url('mahasiswa/mahasiswa'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('mahasiswa/mahasiswa/LihatJudul'); ?>">LihatJudul</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
	<center>
	  
	<form action="<?php echo base_url(). 'dosen/penelitian/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul penelitian</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Kuota</td>
				<td><input type="text" name="kuota"></td>
			</tr>
				 
				<td></td>
				<td><input type="submit" value="Tambah" href="<?php echo site_url('views/reviewr/contenview.php'); ?> "></td>
			</tr>
		</table>
	</form>	
	
	  </center>

  	
  
  </body>
</html>
