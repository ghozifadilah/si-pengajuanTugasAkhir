<html>
  <head>
    <title>Cetak laporan Daftar usulan judul </title>
  </head>
  <body>
  <!--Scrpit prnint -->
   <a>Gunakan Browser Google Chrome Agar Performa lebih maksimal</a><br>
 <button  onclick="PrintDoc()"><img src="img/print.png">Print Data</button>
<button  onclick="PrintPreview()"><img src="img/preview.png">Print Preview</button>
  <div id="print">
      <center>
        <h2>Laporan Daftar Usulan Tugas Akhir FInal  </h2>
		<h2>Jurusan Teknik informatika politeknik negeri jember tahun 
		<?php $mydate=getdate(date("U"));
			  echo " $mydate[year]";
		?>  
		</h2>
	   </center>
	
	
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Prodi</th>
			<th>Judul</th>
			<th>Komentar</th>
			<th>Status</th>
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_user ?></td>
			<td><?php echo $u->prodi ?></td>
			<td><?php echo $u->judul_TA ?></td>
			<td><?php echo $u->komentar ?></td>
			<td><?php echo $u->status ?></td>
			
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
