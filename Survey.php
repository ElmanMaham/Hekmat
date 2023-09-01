<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>نظر سنجی</title>
	<link rel="stylesheet" type="text/css" href="style10.css">
	<script type="text/javascript">
function ss(){
		var nz = '';
		nz = document.getElementById("naz").value;
		if(nz == '')
			{
				alert('شما نظری ننوشتید!!!');
			}
		else{
			var a = confirm('ایا میخواهید نظرتان را بفرستید؟');
			if( a == true){
				document.reg.submit();
			}
		}
}
		
	</script>
</head>
<body bgcolor="white">
	<?php
	include("header for nazar.php");
	?>
	
	<main>
	<center>
	<h1 style="font-family:Castellar;font-size: 100px ">هنرستان حکمت</h1>
	<h2>به نظر دهی خوش امدید</h2>
	<h3>ما خوش حال میشویم که نظر های شما را بدانیم</h3>
	<h3>:نظر شما</h3>
	<form name="reg" id="reg" action="action-survay.php" method="post" >
	  <p>
	    <input a style="width: 500px;height: 150px;text-align: center" type="text" name="naz" id="naz" placeholder="Your Feed back to Hekmat school">
      </p>
	  <p>
	    <input style="width: 150px;height: 50px;border-radius: 20px;font-size: 30px" type="button" name="button" id="button " value="ثبت" onClick="ss()"><br><br>
		 <p  style="color: blue" class="s"><a href="h1.php">بازگشت</a></p>
	  </p>
	</form>
	</center>
	</main>
</body>
</html>