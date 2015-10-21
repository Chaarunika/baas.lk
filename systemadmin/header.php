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



<div id="apDivHeaderContainer">

<div id="apDivLogo">

<a href="index.php"><img src="images/logo.png" width="80" height="68" alt="Bass Logo"> </a>

</div>

<div id="apDivUBar1"></div>
<div id="apDivUBar2"></div>

<div id="apDivBaasLk">baas.lk</div>


<div id="login">
<a href="login.php"><img src="images/login.png"></a> 
</div>


	
<div id="main-header">	
"The best way to find a builder"	
</div>




</div>








