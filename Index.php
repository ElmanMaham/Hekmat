<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hekmat Gallery</title>
	<script type="text/javascript">
<!--
	function rMo(){
	var  fami = '';
	fami = document.getElementById("family").value;
	if(fami == ''){
		alert('وارد کردن نام و نام خانوادگی الزامی میباشد.');
	}
		
	else{
		var r = confirm('از صحت درست بودن اطلاعات اطمینان دارید؟');
		if(r == true){
			document.register.submit();
		}
			
	}
}
	
	-->
		
	</script>
</head>

<body bgcolor="black" text="white" dir="rtl">
<center>
<h1 style="font-family:IranNastaliq ;font-size: 100px">بسم الله رحمان رحیم</h1>
		
  <h2 style="font-family: IranNastaliq ;font-size: 30px">به گالری هنرستان حکمت خوش امدید</h2>
	
	<form id="register" name="register" method="post" action="action-register.php">
      <p>
		  <p style="text-shadow: 2px 2px 10px red;color: red">لطفا نام و نام خانوادگیتان را به فارسی بنویسید.</p>
        <input style="padding: 20px;width: 220px;margin-top: 30px;border-radius: 40px 20px" type="text" name="name" id="name" placeholder="نامتان را وارد نمایید">
        <input style="padding: 20px;width: 220px;margin-top: 30px;border-radius: 40px 20px" type="text" name="family" id="family" placeholder="نام خانوادگی را وارد نمایید">
        
      </p>
      <p>
        <input style="padding: 20px;width: 100px;border-radius: 20px;background-color: blue;color: white" type="button" name="button" id="button" value="ثبت" onClick="rMo()">
      </p>
  </form>
	
		
	</center>
</body>
</html>