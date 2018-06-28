 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun 
   </title>
     <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/scrolling-nav.css')?>" rel="stylesheet">
 </head>
 <body>
 <center>
     <br>
	 <br><br><br>
     <?php echo form_open('authentication/register');?>
     <p>Nama:</p>
     <p>
     <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>NIM / NIK:</p>
     <p>
     <input type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>
	 
	 <p>Prodi:</p>
     <p>
	<select 	
				name="prodi" id="" >
				<?php  foreach( $prodi as $row ): ?> 
				<option><?php echo $row->Prodi ?></option>
				<?php endforeach; ?>
	</select>
     </p>
     <p> <?php echo form_error('username'); ?> </p>
	 
	 <p>Golongan:</p>
     <p>
	<select 	
				name="golongan" id="" >
				<?php  foreach( $golongan as $row ): ?> 
				<option><?php echo $row->golongan ?></option>
				<?php endforeach; ?>
	</select>
     </p>
	 <p> <?php echo form_error('username'); ?> </p>
 
     <p>Password:</p>
     <p>
     <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>Password Confirm:</p>
     <p>
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
 
     <p>
     <input type="submit" name="btnSubmit" value="Daftar" />
     </p>
 
     <?php echo form_close();?>
 
     
</center>
   <br>
	 <br><br><br>
 </body>
 </html>