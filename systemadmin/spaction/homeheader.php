<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!$_SESSION["username"]){
        header("location:login.php?session=notset");
	
    }
	?>
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

<a href="index.php"><img src="images/logo.png" width="80" height="68" alt="Bass Logo"> </a>

</div>

<div id="apDivUBar1"></div>
<div id="apDivUBar2"></div>

<div id="apDivBaasLk">baas.lk</div>

<div id="logout">
<a href="logout.php"><img src="images/logout.png"></a> 
</div>
<div id="Home">
<a href="/baass/systemadmin/home.php"><strong>Home</strong></a> 
</div>
<div id="main-header">	
"The best way to find a builder"	
</div>


</div>








