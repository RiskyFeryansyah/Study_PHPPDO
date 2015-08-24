<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insert Data | CRUD</title>
	<link rel="stylesheet" href="dist/semantic.css">
</head>
<body>
	<form action="insert_proses.php" method="get">
		<div class="ui error form segment">
	    	<div class="field">
	      		<label>Name</label>
	      		<input placeholder="Name" type="text" name="nama" value="">
	    	</div>
	  		<div class="field">
	    		<label>Alamat</label>
	    		<textarea name="alamat" id="" cols="30" rows="10"></textarea>
	  		</div>
	  		<input type="submit" name="insert" value="Submit" class="ui submit button">
		</div>
	</form>
</body>
</html>