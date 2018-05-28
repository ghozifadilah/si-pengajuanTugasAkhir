<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
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
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'KoordinatorTA/UserData/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>nama</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $u->prodi ?>"></td>
			</tr>
			<tr>
				<td>golongan</td>
				<td><input type="text" name="golongan" value="<?php echo $u->golongan ?>"></td>
			</tr>
			<tr>
				<td>level<td>
				<select name="" id="" >
				<?php  foreach( $akses as $row ): ?> 
				<option><?php echo $row->level ?></option>
				<?php endforeach; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>active<td>
				<select name="" id="" >
				<?php  foreach( $akses as $row ): ?> 
				<option><?php echo $row->active ?></option>
				<?php endforeach; ?>
				</select>
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
