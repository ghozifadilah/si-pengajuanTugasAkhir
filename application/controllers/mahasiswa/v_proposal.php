<header class="bg-secondary text-white">
      <div class="container text-center"></div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
         <div class="box-form">
<h3>Form Pendaftaran Ujian Proposal</h3>

             Judul:<br>
             <textarea name="jdl" rows="3" cols="40"></textarea><br><br>
             </p>
 
  <?php echo form_open_multipart('mahasiswa/homeproposal/aksi_upload');?>
 
  <input type="file" name="berkas" />
 
  <br /><br />
 
  <input type="submit" value="Upload" />
 
</form>
 
</body>
</html>