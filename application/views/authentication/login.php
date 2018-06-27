<html>
   <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | Pengajuan Judul Tugas Akhir </title>


    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    
	
    <link href="<?php echo base_url('assets/css/scrolling-nav.css')?>" rel="stylesheet">
	
	<link href="<?php echo base_url('assets/css/Google-Style-Login.css')?>" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SIPTA 2018 - JURUSAN TEKONOLOGI INFORMASI POLTIKENIK NEGERI JEMBER </a></div>
    </nav>
  
    <form method="post" action="<?php echo site_url('authentication/auth/login'); ?>" role="login">
      <?php
      //menampilkan error menggunakan alert javascript
        if(isset($error)){
        echo '<script>
        alert("'.$error.'");
        </script>';
        }
      ?>
	  
      <center>
        <h1>Selamat Datang di Website pengajuan judul tugas akhir </h1></br></br>
     
	 
		<div class="login-card ">   
        <form class="form-signin">
		<h5>SILAHKAN LOGIN</h5></br>
		
		<input class="form-control text-login" type="text" name="username" placeholder="Masukan Username" size="30" required /></br>
        <input class="form-control text-login" type="password" name="password" placeholder="Masukan Password" size="30" required /></br>
        
		<button class="text-login btn btn-primary btn-block btn-lg btn-signin " type="submit" name="submit" value="login">Masuk</button>
		
		<a href="<?php echo site_url('authentication/Register/newuser'); ?>">Daftar</a>
		
		</form>
		<div>
      </center>
    </form>
  </body>
</html>