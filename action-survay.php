<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>نظر سنجی</title>
</head>

<body bgcolor="#07675D">
	<?php
	$survay = $_POST['naz'];
	?>
	
	
	
	<?php
	$link = mysqli_connect("localhost","root","","nazar");
	$farsi = 'set names "utf8"';
	mysqli_query($link,$farsi);
	$sql ="INSERT INTO `harf`(`نظر`) VALUES ('$survay')";
	if(mysqli_query($link,$sql) === true)
		echo("<center>");
		echo("<h1 style='color:crimson ;font-size: 60px;text-shadow: 1px 1px 10px aquamarine;margin-top: 200px'>.نظر شما به صورت کامل فرستاده شد</h1>");
	echo("<h3 style='color:darkorange';>از اینکه به ما نظرهایتان را میگویید خوشحال می شویم</h3>");
	echo("</center>");
	
	?>
<h1 style="color:"></h1>
</body>
</html>