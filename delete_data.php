<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete Data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		include("belajar_crud.php");
		$conn = new crud();
		$nim = isset($_GET['nim']) ? $_GET['nim'] : "";

		$conn->delete_data($nim);
	 ?>
	 
</body>
</html>