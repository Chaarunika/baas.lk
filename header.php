<?php session_start(); ?>

<script>

function Fun() {	

	setInterval( function(){		
		var widthVal = window.innerWidth;	
		console.log(widthVal);
		if (widthVal >1100){		{
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
	},500 );
}
</script>

<script>//window.onload = Fun;</script>

<div id="apDivHeaderContainer">

	<?php 		
	if(isset($_SESSION['username']) ) { //Checking whether a user has logged in
		echo "
			<div id=\"apDivProfPic\">
			<img class=\"img-circle\"  src= '".$_SESSION['url']."' ></div>

			<a href =\"includes/logout.php\"><div id=\"apDivLogout\">
			<img src=\"images/lgout.png\" width=\"100\" height=\"35\" alt=\"logot\" /></div></a>";
	}

	else{
		echo "
			<div id=\"joinus\">
			<a href=\"selectUser.php\"><img src=\"images/joinus.png\"></a></div>

			<div id=\"login\">
			<a href=\"login.php\"><img src=\"images/login.png\"></a></div>";
	}
	?>

	<div id="apDivLogo"><a href="index.php"><img src="images/logo.png" width="80" height="68" alt="Bass Logo"> </a></div>
	<div id="apDivUBar1"></div>
	<div id="apDivUBar2"></div>
	<div id="apDivBaasLk">baas.lk</div>
	<div id="sinhala"><a href=""><img src="images/sinhala.png"></a></div>
	<div id="tamil"><img src="images/tamil.png"></div>
	<div id="main-header">"The best way to find a builder"</div>

	<div id ="menu" class="menubar">
		<ul>
	  		<li><a href="../BAAS_LK/index.php">Home</a></li>
	  		<li><a href="../BAAS_LK/menu.php">Bidd</a></li>
	  		<li><a href="../BAAS_LK/index.php">Wiki</a></li>
	  		<li><a href="../BAAS_LK/faq.php">FAQ</a></li>
	  		<li><a href="../BAAS_LK/index.php">Messages</a></li>

	  		<?php
		  		if(isset($_SESSION['username']) ){
					echo"
						<li><a href=\"../BAAS_LK/spProfEdit.php\">Profile Edit</a></li>
			   			<li><a href=\"../BAAS_LK/profile.php\">Profile</a></li>";
				}
			?>  
		</ul>
	</div>
</div>








