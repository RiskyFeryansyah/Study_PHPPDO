<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update Data</title>
	<link rel="stylesheet" href="dist/semantic.css">
</head>
<body>
	<?php 
		include("belajar_crud.php");
		$conn = new crud;

		$nim = isset($_GET['nim']) ? $_GET['nim'] : "";
		$nama = isset($_GET['nama']) ? $_GET['nama'] : "";
		$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : "";

		$conn->update_save($nim,$nama,$alamat);
	 ?>
	<h1>Anda Berhasil Update Data</h1><a href="show_data.php" class="ui small red button">Kembali</a>
</body>
</html>