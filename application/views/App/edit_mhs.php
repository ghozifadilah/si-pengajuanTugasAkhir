<html>
	<head>
		<title>Edit Mahasiswa</title>
	</head>
	<body>
		<h4 align="center">Tambah Data Mahasiswa</h4>
		<div align="center">
		<p>
			<form method="post" action="<?php echo base_url()?>Mahasiswa/update">
        NIM<br/><input type="text" name="nim" size="10" maxlength="10" value="<?php echo @$user[0]['nim']; ?>"><br/><br/>
		
        Nama<br/><input type="text" name="nama" size="30" maxlength="25" value="<?php echo @$user[0]['nama'];  ?>"><br/><br/>
		
        Prodi<br/>
        <?php
        echo '<select class="form-control" name="prodi">';
            foreach($prodi as $rows)
            {
                if($rows->id==@$user[0]['tm_prodi_id']){
                    echo '<option value="'.$rows->id.'" selected="selected">'.$rows->prodi.'</option>';
                }else{
                    echo '<option value="'.$rows->id.'">'.$rows->prodi.'</option>';
                }
            }
            echo '</select>';
        ?>
        <br/><br/>
		
		Golongan<br/>
        <?php
        echo '<select class="form-control" name="gol">';
            foreach($golongan as $rows)
            {
                if($rows->id==$user[0]['tm_gol_id']){
                    echo '<option value="'.$rows->id.'" selected="selected">'.$rows->golongan.'</option>';
                }else{
                    echo '<option value="'.$rows->id.'">'.$rows->golongan.'</option>';
                }
            }
            echo '</select>';
        ?>
		<br/><br/>
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>Mahasiswa/home">Kembali</a>
    </form>
		</p>
		</div>
	</body>
</html>