<html>
  <head>
    <title>SiTa</title>
  </head>
  <body>
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
        <h3>SILAHKAN LOGIN</h3>
        <input type="text" name="username" placeholder="Masukan Username" size="30" required/></br></br>
        <input type="password" name="password" placeholder="Masukan Password" size="30" required/></br></br>
        
		<button type="submit" name="submit" value="login">Masuk</button>
		<a href="<?php echo site_url('authentication/Register/newuser'); ?>">Daftar</a>
		
      </center>
    </form>
  </body>
</html>