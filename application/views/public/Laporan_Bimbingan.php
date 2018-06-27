<html>
  <head>
    <title>Cetak laporan Bimbingan</title>
  </head>
  <body>
  <!--Scrpit prnint -->
  <h3>Gunakan Browser Google Chrome Agar Performa lebih maksimal</h3>
 <button  onclick="PrintDoc()"><img src="img/print.png">Print Data</button>
<button  onclick="PrintPreview()"><img src="img/preview.png">Print Preview</button>
  <div id="print">
      <center>
        <a><h2>Laporan Daftar Pembimbing Tugas Akhir  </h2></a>
		<h2>Jurusan Teknik informatika politeknik negeri jember tahun  </h2>
	   </center>
	
	
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>golongan</th>
			<th>Prodi</th>
			<th>dospem<th>
			
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_user ?></td>
			<td><?php echo $u->golongan ?></td>
			<td><?php echo $u->prodi ?></td>
			<td><?php echo $u->Dospem ?></td>
			
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
  </div>
  </body>
</html>

 <script type="text/javascript">
 /*--This JavaScript method for Print command--*/
 function PrintDoc() {
  var toPrint = document.getElementById('print');
  var popupWin = window.open('');
  popupWin.document.open();
  popupWin.document.write('<html><title>::Print Data::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
  popupWin.document.write(toPrint.outerHTML);
  popupWin.document.write('</html>');
  popupWin.document.close();
 }
 /*--This JavaScript method for Print Preview command--*/
 function PrintPreview() {
  var toPrint = document.getElementById('print');
  var popupWin = window.open('');
  popupWin.document.open();
  popupWin.document.write('<html><title>::Printpreview Data::</title><link rel="stylesheet" type="text/css" href="print.css" media="screen"/></head><body">')
  popupWin.document.write(toPrint.outerHTML);
  popupWin.document.write('</html>');
  popupWin.document.close();
 }
</script>
