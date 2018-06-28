<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
   
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
	  	</div>
  </body>
</html>
