<html>
  <head>
    <title>TEST LOGIN || SITA </title>
  </head>
  <body>
      <center>
        <h1>Membuat Login MultiLevel Menggunakan Session Codeigniter || SITA </h1><br />
        <h2>SELAMAT DATANG ANDA TELAH BERHASIL LOGIN SEBAGAI Mahasiswa </h2>
        <h3> Username Anda Adalah <?php echo $this->session->userdata('nama'); ?></h3><br /><br />
        <a href="<?php echo site_url('config/bataswaktu/KirimJudul/'); ?>">Ajukan Judul Tugas akhir</a>
		<br>
		<a href="<?php echo site_url('config/bataswaktu/KirimJudulfinal/'); ?>">Ajukan Judul Tugas akhir (Final )</a>
		<br>
		<a href="<?php echo site_url('mahasiswa/homeproposal'); ?>">Daftar Ujian Proposal</a>
		<br>
		<a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
    </form>
  </body>
</html>
