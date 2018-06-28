<header class="bg-secondary text-white">
      <div class="container text-center"></div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
         <div class="box-form">



		 <?php foreach($dataproposal as $u){?>
			
				
		
			<?php 
				$sudahinput =  $u->sudah;
				if($sudahinput == 1 ){
				echo "<h5 Style='color:green;'> Anda telah mengupload </h5>:";
				}else{
			     echo "<h5 Style='color:red;'> Anda Belum mengupload </h5>";
				}
			
			?>
				<h5>Judul Proposal : <?php echo $u->Judul ?> | <a  href='<?php echo $u->file ?>'> Lihat file anda </a>|<a><?php echo anchor('mahasiswa/homeproposal/hapus/'.$u->NIM,' Hapus'); ?> </a> </h5>
				
			
		 <?php } ?>
		 
		 <br><hr>
<h3>Form Pendaftaran Ujian Proposal</h3>
		
		
	
 
  <?php echo form_open_multipart('mahasiswa/homeproposal/aksi_upload');?>
 
	
             Judul:<br>
             <textarea name="judul" rows="3" cols="40"></textarea><br><br>
           </p>
 
  <input type="file" name="berkas" />
 
  <br /><br />
 
  <input type="submit" value="Upload" />
 
</form>
 
</body>
</html>