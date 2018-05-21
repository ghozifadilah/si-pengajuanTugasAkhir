
<html>
<head>

<title>Latihan Model</title>
</head>
	<h1>Model persegi panjang </h1>
    
    <!--pemanggilan metode get _panjang dan get_lebar-->
    Nilai Panjang: <?php echo $model ->get_panjang();?></br>
    Nilai Lebar: <?php echo $model ->get_lebar();
	?></br>
    
	<!--pemanggilan hitung luas -->
    Luas persegi panjang: <?php echo $model ->hitung_luas();?></br>
    Keliling Persegi panjang : <?php echo $model ->hitung_keliling();?></br>
<body>
</body>
</html>