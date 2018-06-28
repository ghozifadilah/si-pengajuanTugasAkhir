<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
   <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">-->
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3>Edit Data</h3><br /><br />

		<a href="<?php echo site_url('dosen/dosen'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('dosen/penelitian'); ?>">LihatJudul</a>
      </center>
	  <br>
	  <br>
	
			
	</center>
	<center><!---
<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Username</span><br>
						<textarea type="hidden" name="id" class="input100"><?php echo $u->id_user ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Judul Tugas Akhir</span><br>
						<textarea type="text" name="Judul" class="input100"><?php echo $u->Judul_Penelitian ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Kuota Tugas Akhir</span><br>
						<textarea type="text" name="kuota" class="input100"><?php echo $u->kuota ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<center><button class="login100-form-btn" type="submit" name="btnTambah" value="Simpan">
								Simpan
							</button></center>
						</div>

	<script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>

</center>-->
<!--===============================================================================================-->
	<?php foreach($penelitian as $u){ ?>
	<form action="<?php echo base_url(). 'dosen/penelitian/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul Penelitian</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="Judul" value="<?php echo $u->Judul_Penelitian ?>">
				</td>
			</tr>
			<tr>
				<td>Kuota</td>
				<td><input type="text" name="Kuota" value="<?php echo $u->kuota ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>  	
  </body>
</html>
