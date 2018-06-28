<html>
  <head>
    <title>Ajukan Judul|| SITA </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
     <script src="<?php echo base_url('vendor/jquery/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">

  </head>
  <body>

      <center>
        <h1>Halaman Pengajuan Judul || SITA </h1><br />
		<h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
		<a href="<?php echo site_url('reviewer/reviewer'); ?>">Home</a>
      </center>
	  <br>
	  <br>

	<div class="container">
	<table class="table" style="margin:20px auto;" border="1">
		 <tr class="success">
			<th>No</th>
			<th>Action</th>
			<th>Judul</th>
			<th>Dosen Pembimbing</th>
			<th>Komentar</th>
			<th>Status</th>
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td>
			      <?php echo anchor('reviewer/reviewjudul/edit/'.$u->id,'Review Judul'); ?>
			</td>
			<td><?php echo $u->judul_TA ?></td>
			<td><?php echo $u->Dospem ?></td>
			<td><?php echo $u->komentar ?></td>
			<td><?php echo $u->status ?></td>
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
  
  </body>
</html>
