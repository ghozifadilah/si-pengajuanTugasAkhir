<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
		<p><h3 align="center">Daftar Mahasiswa</h3></p>
		<p align="center"><a href="<?php echo base_url()?>Mahasiswa/input">Tambah</a></p>
		<p align="center">
			<table border="1">
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Golongan</th>
					<th colspan="2"></th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->tm_prodi_id;?></td>
					<td><?php echo $row->tm_gol_id;?></td>
					<td><a href="<?php echo base_url(); ?>Mahasiswa/edit/<?php echo $row->nim;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>Mahasiswa/delete/<?php echo $row->nim;?>">Hapus</a></td>
				</tr>
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>