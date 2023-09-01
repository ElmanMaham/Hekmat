<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$name = $_POST['name'];
	$fam = $_POST['family'];
	?>
	<?php
	//<<start connection to DataBase >>//
	$link = mysqli_connect("localhost","root","","sch");
	$farsi = 'set names "utf8"';
	mysqli_query($link,$farsi);
	$sql = "INSERT INTO `info`(`name`, `family`) VALUES ('$fam','$name')";
	if(mysqli_query($link,$sql)=== true)
	// finish connection to DataBase>>//
	?>
<script type="text/javascript">
	<!--
		location.replace("h1.php");
		-->
	</script>
</body>
</html>