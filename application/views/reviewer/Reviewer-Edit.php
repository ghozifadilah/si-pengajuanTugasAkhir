<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
  </head>
  <body>
  	
  	<!-- Custom JavaScript for this theme halaman kedua -->
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3>Review Judul Tugas AKhir</h3><br /><br />
		<a href="<?php echo site_url('reviewer/reviewer'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('reviewer/reviewjudul'); ?>">LihatJudul</a>
      </center>
	  <br>
	 
	</center>

	<?php foreach($table_ta as $u){ ?>
	<form action="<?php echo base_url(). 'reviewer/reviewjudul/update'; ?>" method="post">
	<input type="hidden" name="id" value="<?php echo $u->id?>">
<center>
<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Judul Tugas Akhir</span><br>
						<textarea  class="input100"><?php echo $u->judul_TA ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Oleh Mahasiswa</span><br>
						<textarea  class="input100"><?php echo $u->id_user ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Pembimbing</span><br>
						<textarea  class="input100"><?php echo $u->Dospem ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Ringkasan</span><br>
						<textarea  class="input100"><?php echo $u->ringkasan ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Komentar</span><br>
						<textarea type="text" name="komentar" value="" class="input100" placeholder="Hasil Komentar"><?php echo $u->komentar ?></textarea>
						
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Status</span><br>
                        <select class="input100" type="text" id="" name="status" placeholder="Terima/Tolak/Terima Dengan Perbaikan">
                  <option>Diterima</option>
				<option>Ditermia Dengan Syarat </option>
				<option>Ditolak</option>
				</select>
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

		</center>
	</form>	
	<?php } ?>

  	</div>
  <div>
  </div>
  <br>
  </body>
</html>
