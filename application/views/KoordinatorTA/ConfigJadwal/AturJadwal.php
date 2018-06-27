<html>
  <head>
    <title>Atur Batas Waktu || SITA </title>
  </head>
  <body>
      <center>
        <h2>Atur Batas Waktu Pengririman Proposal dan Judul Tugas Akhir|| SITA </h2><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		<a href="<?php echo site_url('koordinatorTA/koordinatorTA'); ?>">Home</a><br>
		<a href="<?php echo site_url('koordinatorTA/UserData'); ?>">Data User</a><br>
		<a href="<?php echo site_url('koordinatorTA/ControlTanggal'); ?>">Atur Jadwal pengajuan </a><br>
	   <a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
	
	<center>
	<?php echo anchor('KoordinatorTA/ControlTanggal/editJadwalTA/','Ubah Jadwal Pengajuan Tugas Akhir'); ?>
	<br>
	<?php echo anchor('KoordinatorTA/ControlTanggal/editJadwalProposal/','Ubah Jadwal Pengajuan Proposal'); ?>
	</center>
	<table style="margin:20px auto;" border="1">
		<tr>
		    <th></th>
			<th>Proses</th>
			<th>Jadwal dimulai </th>
			<th>Jadwal Berakhir</th>			
		</tr>
		<?php 
		foreach($Tanggal as $u){ 
		?>
		<tr>
			<td>
			      <?php echo anchor('KoordinatorTA/ControlTanggal/editJadwalTA/'.$u->id,'Edit Batas'); ?>
			</td>
			<td><?php echo $u->Proses ?></td>
			<td><?php echo $u->W_mulai ?></td>
			<td><?php echo $u->W_selesai ?></td>
		
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	
  
  </body>
</html>
