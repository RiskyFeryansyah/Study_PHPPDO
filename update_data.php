<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nim</title>
	<link rel="stylesheet" href="dist/semantic.css">
</head>
<body>
	<?php 
		include("belajar_crud.php");
		$conn = new crud();
		$nim = isset($_GET['nim']) ? $_GET['nim']:"";
		//if ($conn->update_data($nim)) {
			
		//}
	 ?>
	
	<form action="update_save.php" method="get">
	 	<div class="ui error form segment">
			<div class="field">
		 		<label>Nim</label>
		 		<input type="text" name="nim" value="<?php echo $nim; ?>" placeholder="">
		 	</div>
		 	<div class="field">
		 		<label>Nama</label>
		 		<input type="text" name="nama" value="" placeholder="">
		 	</div>
		 	<div class="field">
	    		<label>Alamat</label>
	    		<input type="text" colspan="5" rowspan="30" name="alamat">
	  		</div>
		 	<input type="submit" name="insert" value="Update" class="ui submit button">
		</div>
	</form>
</body>
</html>