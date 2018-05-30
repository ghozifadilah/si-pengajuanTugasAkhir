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
		<a href="<?php echo site_url('mahasiswa/usulanjudul/LihatJudul'); ?>">Kirim Judul</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
	
	<center><?php echo anchor('mahasiswa/usulanjudul/kirimbaru','Kirim Judul'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Action</th>
			<th>Judul</th>
			<th>Dosen Pembimbing</th>
			<th>Komentar</th>
			<th>Status</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tabel_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td>
			      <?php echo anchor('mahasiswa/usulanjudul/edit/'.$u->id,'Edit'); ?>
                  <?php echo anchor('mahasiswa/usulanjudul/hapus/'.$u->id,'Hapus'); ?>
			</td>
			<td><?php echo $u->judul_TA ?></td>
			<td><?php echo $u->Dospem ?></td>
			<td><?php echo $u->komentar ?></td>
			<td><?php echo $u->status ?></td>
			
		</tr>
		<?php } ?>
	</table>
  
  </body>
</html>
