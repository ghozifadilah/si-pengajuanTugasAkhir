<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		<a href="<?php echo site_url('mahasiswa/mahasiswa'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('mahasiswa/mahasiswa/LihatJudul'); ?>">LihatJudul</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
	<center>
	  
	<form action="<?php echo base_url(). 'mahasiswa/usulanjudul/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			
			
			
			<tr>
				<td>ringkasan</td>
				<td><textarea  name="ringkasan"  required  ></textarea></td>
				 
			</tr>
			<tr>
			<td>Individu / kelompok </td>
				<td><select name="ik" id="" >
				<option>Individu</option>
				<option>Kelompok</option>
				</select></tr>
			</td>
			</tr>
			<tr>
				<td>Dosen Pembimbing<td>
				<select name="dospem" id="" >
				<?php  foreach( $dospem as $row ): ?> 
				<option><?php echo $row->nama ?></option>
				<?php endforeach; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	
	  </center>

  	
  
  </body>
</html>
