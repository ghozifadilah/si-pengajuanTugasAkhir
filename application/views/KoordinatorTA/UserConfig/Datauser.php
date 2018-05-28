<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
  </head>
  <body>
      <center>
        <h1>Config User || SITA </h1><br />
		<br /><br />
		<a href="<?php echo site_url('KoordinatorTA/KoordinatorTA'); ?>">Home</a>
        <br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
	  <br>
	  <br>
	
	
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>action</th>
			<th>id user</th>
			<th>prodi</th>
			<th>golongan</th>
			<th>level</th>
			<th>active</th>
			
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td>
			      <?php echo anchor('koordinatorTA/UserData/edit/'.$u->id_user,'Edit'); ?>
                  <?php echo anchor('koordinatorTA/UserData/hapus/'.$u->id_user,'Hapus'); ?>
			</td>
			<td><?php echo $u->id_user ?></td>
			<td><?php echo $u->prodi ?></td>
			<td><?php echo $u->golongan ?></td>
			<td><?php echo $u->level ?></td>
			<td><?php echo $u->active ?></td>
			
		</tr>
		<?php } ?>
	</table>
  
  </body>
</html>
