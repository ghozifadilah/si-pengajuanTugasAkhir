<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>
        <h1>Edit jadwal Pengajuan Judul || SITA </h1><br />
		<h3>Edit Data</h3><br /><br />
		<a href="<?php echo site_url('mahasiswa/mahasiswa'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('mahasiswa/mahasiswa/LihatJudul'); ?>">LihatJudul</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
			
	</center>
	<br>
	<center>
	<?php foreach($TanggalJudul as $u){ ?>
	<form action="<?php echo base_url(). 'KoordinatorTA/ControlTanggal/updateJudul'; ?>" method="post">
				<input type="hidden" name="Proses" value="<?php echo $u['Proses']; ?>">
				<a> Waktu Mulai <input type="date" name="DimulaiTA" value="<?php echo $u['W_mulai']; ?>"> </a><br>
				
				 <a> Waktu Selesai <input type="date" name="SelesaiTA" value= "<?php echo $u['W_selesai']; ?>"> </a>
				 <br>
				<input type="submit" value="Simpan">
		
	</form>	
	<?php } ?>
	</center>

  	
  
  </body>
</html>
