<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sukses Memasukkan Data</title>
	<link rel="stylesheet" href="dist/semantic.css">
</head>
<body>
	<?php 
		include("belajar_crud.php");

		//membuat object
		$conn = new crud();

		$nama = isset($_GET['nama']) ? $_GET['nama']:'';
		$alamat = isset($_GET['alamat']) ? $_GET['alamat']:'';

		$conn->insert_data("mahasiswa",$nama,$alamat);
	 ?>
	 <h1>Anda Sukses Memasukkan Data</h1>Kembali <a href="show_data.php" class="ui small red button">Kembali</a>
</body>
</html>