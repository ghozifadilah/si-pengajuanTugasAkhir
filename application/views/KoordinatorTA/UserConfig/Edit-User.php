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
				<td>Prodi<td>
				<select name="prodi" id="" >
				<?php  foreach( $prodi as $row ): ?> 
				<option><?php echo $row->Prodi ?></option>
				<?php endforeach; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>golongan<td>
				<select name="golongan" id="" >
				<?php  foreach( $golongan as $row ): ?> 
				<option><?php echo $row->golongan ?></option>
				<?php endforeach; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>level<td>
				<select name="level" id="" >
				<?php  foreach( $akses as $row ): ?> 
				<option><?php echo $row->level ?></option>
				<?php endforeach; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>active<td>
				<select name="active" id="" >
				
				<option>1</option>
				<option>0</option>
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
