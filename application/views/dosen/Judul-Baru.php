<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		<a href="<?php echo site_url('dosen/dosen'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('dosen/penelitian'); ?>">LihatJudul</a>
      </center>
	  <br>
	  <br>
	
	<center>

		<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
			<form action="<?php echo base_url(). 'dosen/penelitian/tambah_aksi'; ?>" method="post">
					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Judul Penelitian</span><br>
						<textarea type="text" name="judul" value="" class="input100" placeholder="Masukan Judul Penelitian"></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Kuota Tugas Akhir</span><br>
						<textarea type="text" name="kuota" value="" class="input100" placeholder="Masukan Kuota Tugas Akhir"></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<center>
								<btninput class="login100-form-btn" type="submit" name="btnTambah" value="Tambah" href="<?php echo site_url('views/reviewr/contenview.php'); ?> ">
							Simpan</btninput>
								</center>
						</div>
						<script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
						<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>

		</div>	
	  
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
