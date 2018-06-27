<html>
  <head>
    <title>Daftar Mahasiswa memilih sebagai pembimbing || SITA </title>
  </head>
  <body>
      <center>
        <h1>Daftar Mahasiswa memilih sebagai pembimbing </h1><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		<a href="<?php echo site_url('mahasiswa/mahasiswa'); ?>">Home</a>
        <br>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>aksi</th>
			<th>NIM</th>
			<th>Prodi</th>
			<th>golongan</th>
			<th>judul</th>
			<th>Status pembimbing</th>
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td>
			      <?php echo anchor('dosen/bimbingan/terima/'.$u->id,'terima'); ?>
                  <?php echo anchor('dosen/bimbingan/tolak/'.$u->id,'tolak'); ?>
			</td>
			
			<td><?php echo $u->id_user ?></td>
			<td><?php echo $u->prodi ?></td>
			<td><?php echo $u->golongan ?></td>
			<td><?php echo $u->judul_TA ?></td>
			<td><?php echo $u->Status_pembimbing ?></td>
	
			
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
  
  </body>
</html>
