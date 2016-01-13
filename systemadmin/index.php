<html>
<head>
<!-- systemadmin sign in page-->
<title>baas.lk</title>
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link href="css/header.css" rel="stylesheet">
<script>

function Fun() {	
	
	setInterval(function(){	
	var widthVal = window.innerWidth;	
	console.log(widthVal);
		if (widthVal >1100)
			{
			document.getElementById("main-header").style.right ="30%";
			}
			
		else if(widthVal >1024){
			document.getElementById("main-header").style.right ="15%";
			}
		else{
			document.getElementById("main-header").style.visibility = "hidden" ;
			document.getElementById("menu").style.visibility = "hidden" ;
			//document.getElementById("sinhala").style.visibility = "hidden" ;		
			//document.getElementById("tamil").style.visibility = "hidden" ;
			document.getElementById("apDivBaasLk").style.fontSize = "30px" ;
			document.getElementById("apDivBaasLk").style.top = "30px" ;
			document.getElementById("tamil").style.right = "0px" ;
			document.getElementById("sinhala").style.right = "45px" ;
			}
			
			
		
			},500);
		

}
</script>

<script>
window.onload = Fun;
</script>

<style>
#apDiv7 {
	position: absolute;
	left: 380px;
	top: 226px;
	width: 413px;
	height: 240px;
	z-index: 6;
	background-color: #CCCCCC;
}
#apDiv11 {
	position:absolute;
	left:352px;
	top:190px;
	width:252px;
	height:38px;
	z-index:7;
}

.submit {
	font-size: 14px;
	font-weight: bolder;
	background-color: #FC0;
	position: absolute;
	left: 193px;
	width: 102px;
	height: 31px;
}
#apDiv1 {
	position:absolute;
	border:1px #333 solid;
	border-radius:40px;
	left:145px;
	top:218px;
	width:339px;
	height:308px;
	z-index:1;
	color: #CCC;
	background-color: rgba(0, 0, 0, 0.5);
}
#apDiv2 {
	position:absolute;
	left:7px;
	top:0px;
	width:387px;
	height:351px;
	z-index:2;
	color: #000;
	font-weight: bold;
	font-size: 20px;
}
#apDiv3 {
	border:1px #333 solid;
	border-radius:40px;
	position:absolute;
	left:87px;
	top:4px;
	width:170px;
	height:34px;
	z-index:3;
	font-size: 25px;
	font-weight: bold;
	color: #000;
	background-color: #FFCC00;
	text-align: center;
}


.usetex {
	position: absolute;
	width: 277px;
	height: 39px;
	left: 20px;
	top: 94px;
	background-color: #FFF;
	font-size: 16px;
	font-family:"Arial Black", Gadget, sans-serif;
}
.password {
	position: absolute;
	width: 276px;
	height: 41px;
	left: 23px;
	top: 184px;
	background-color: #FFF;
	font-size: 16px;
	font-family:"Arial Black", Gadget, sans-serif;
}
.login {
	position: absolute;
	left: 96px;
	top: 253px;
	width: 138px;
	height: 35px;
	font-weight: bold;
	font-size: 18px;
	cursor:hand;
}
#coverPics{
	width: 110%
	top:0px;
	background-image: url('images/cover.jpg');
	height: 100%
}
#apDiv1 #apDiv2 form p {
	color: #FFF;
}
</style>
</head>
<body background="images/cover.jpg">
<div id="btnheader">
<div id="apDivLogo">
<a href="index.php"><img src="images/logo.png" width="80" height="68" alt="Bass Logo"> </a>
</div>
<div id="btnheader1"></div>
<div id="btnheader2"></div>
<div id="apDivBaasLk">baas.lk</div>
<div id="main-header1">	
System Admin Panel	
</div>
</div>
</div>



<div id="apDiv1">
<div id="apDiv3">Admin Login</div>
<div id="apDiv2">
  <form name="form1" method="post" action="login.php">
    <p>&nbsp;</p>
    <p>Username</p>
    <p>
      <label for="textfield"></label>
      <input name="textfield" type="text" class="usetex" placeholder="      Username" id="textfield" autofocus required>
      <input name="button" type="submit" class="login" id="button" value="Login">
    </p>
    <p>&nbsp;</p>
    <p>Password</p>
    <p>
      <label for="textfield2"></label>
      <input name="textfield2" type="password" placeholder="      Password" class="password" id="textfield2" required>
</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>

</div>
</div>


</body></html>










