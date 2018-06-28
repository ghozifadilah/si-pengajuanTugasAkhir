<html lang="en">
  <head>
    <title>TEST LOGIN || SITA </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/scrolling-nav.css')?>" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo base_url('js/scrolling-nav.js')?>"></script>

  </head>
  <body
<div class="jumbotron text-center">
  <h2>SELAMAT DATANG ANDA TELAH BERHASIL LOGIN SEBAGAI Reviewer  </h2>
  <h3> Username Anda Adalah <?php echo $this->session->userdata('nama'); ?></h3><br /><br />

  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <a href="<?php echo site_url('dosen/penelitian'); ?>"><h6>Judul Penelitian</h6></a><br>
      <p>Melakukan pengajuan judul Tugas Akhir </p>
      
    </div>
    <div class="col-sm-4">
      <a href="<?php echo site_url('dosen/bimbingan'); ?>"><h6>Daftar Mahasiswa sebagai pembimibing</h6></a><br>
      <p>Melakukan pemilihan pendaftaran mahasiswa sebagai pembimbing</p>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo site_url('reviewer/reviewer/review'); ?>"><h6>Reviewer</h6></a><br>        
      <p>Melakukan review dengan memilih diterima, diterima dengan perbaikan atau ditola</p>
    </div>
  </div>
</div>
        <a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
  
</div>
      
	
		
    
  </body>
</html>
