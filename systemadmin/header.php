<?php 
	include 'sessioncheck.php';
?>
<html>

<head>

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
			document.getElementById("apDivBaasLk").style.fontSize = "30px" ;
			document.getElementById("apDivBaasLk").style.top = "30px" ;
			}
			
			
		
			},500);
		

}
</script>

<script>
window.onload = Fun;
</script>

<html>

<div id="apDivHeaderContainer">

<div id="apDivLogo">

<a href="home.php"><img src="images/logo.png" width="80" height="68" alt="Bass Logo"> </a>

</div>

<div id="apDivUBar1"></div>
<div id="apDivUBar2"></div>

<div id="apDivBaasLk">baas.lk</div>

<div id="logout">
<a href="logout.php"><img src="images/logout.png"></a> 
</div>
<div id="Home">
<a href="home.php"><img src="images/home.png" width="70" height="70" ></a> 
</div>
<div id="main-header">	
"The best way to find a builder"	
</div>


</div>
