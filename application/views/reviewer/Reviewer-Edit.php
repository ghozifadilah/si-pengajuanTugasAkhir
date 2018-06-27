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
	<?php foreach($table_ta as $u){ ?>
	<form action="<?php echo base_url(). 'reviewer/reviewjudul/update'; ?>" method="post">
	<input type="hidden" name="id" value="<?php echo $u->id?>">
		<center>
		
	<h2>Judul Tugas Akhir : <?php echo $u->judul_TA ?> <h2>
	<h3>Oleh : <?php echo $u->id_user ?> <h3>
	<h3>Pembimbing : <?php echo $u->Dospem ?> <h3>
	<br><h4>Ringkasan</h4>
	<p><?php echo $u->ringkasan ?></p><br>
	
	   </center>
		<table style="margin:20px auto;">
			<tr>
				<td>Komentar</td>
				<td><textarea type="text" name="komentar" value=""><?php echo $u->komentar ?></textarea></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
				<select name="status" id="" >
				<option>Ditermia</option>
				<option>Ditermia Dengan Syarat </option>
				<option>Ditolak</option>
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
