<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>

		<h3>Edit Data Hak akses</h3><br /><br />
		<a href="<?php echo site_url('mahasiswa/mahasiswa'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('mahasiswa/mahasiswa/LihatJudul'); ?>">LihatJudul</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
			
	</center>
	<?php foreach($Limit as $u){ ?>
	<form action="<?php echo base_url(). 'KoordinatorTA/UserData/updatelimit'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>nama</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $user->nama ?>">
					<input type="text" name="limit" value="<?php echo $u->Limit_Dospem ?>">
				</td>
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
