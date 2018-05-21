 <html>
	<head>
		<title>Input Mahasiswa</title>
	</head>
	<body>
		<h4 align="center">Tambah Data Mahasiswa</h4>
		<div align="center">
		<p>
			<form method="post" action="input">
        NIM<br/><input type="text" name="nim" size="10" maxlength="10"><br/><br/>
		
        Nama<br/><input type="text" name="nama" size="30" maxlength="25"><br/><br/>
		
        Prodi<br/>
        <select name="prodi">
        <?php foreach ($prodi as $row){ ?>
        	<option value="<?php echo $row->id;?>"><?php echo $row->prodi;?></option>
        	<?php }?>
        </select>
        <br/><br/>
		
		Golongan<br/>
        <select name="gol">
        <?php foreach ($gol as $row){ ?>
        	<option value="<?php echo $row->id;?>"><?php echo $row->golongan;?></option>
        	<?php }?>
		<br/><br/>
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>Mahasiswa/home">Kembali</a>
    </form>
		</p>
		</div>
	</body>
</html>