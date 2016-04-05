<?php include_once("analytics.php") ?>

<?php 

if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}

?>

<?php 
if(isset($_SESSION['language'])){

	if($_SESSION['language'] == 'sinhala'){
		include_once 'translations/si.php' ;
	}

	else if($_SESSION['language'] == 'tamil'){
		include_once 'translations/ta.php' ;
	}

	else if($_SESSION['language'] == 'english')
	{
		include_once 'translations/en.php' ;
	}
}

else{
	include_once 'translations/en.php' ;
} 
?>


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

			if(isset($_SESSION['language']))
			{
				if($_SESSION['language']=='sinhala')
				{
			
					echo "
					<div id=\"joinus\">
					<a href=\"selectUser.php\"><img src=\"images/joinus_sinhala.png\"></a></div>

					<div id=\"login\">
					<a href=\"login.php\"><img src=\"images/login_sinhala.png\"></a></div>";
				}

				else
				{
					echo "
					<div id=\"joinus\">
					<a href=\"selectUser.php\"><img src=\"images/joinus.png\"></a></div>

					<div id=\"login\">
					<a href=\"login.php\"><img src=\"images/login.png\"></a></div>";
				}
	
			}

			else
			{
				echo "
					<div id=\"joinus\">
					<a href=\"selectUser.php\"><img src=\"images/joinus.png\"></a></div>

					<div id=\"login\">
					<a href=\"login.php\"><img src=\"images/login.png\"></a></div>";
			}



	}
	?>

	<div id="apDivLogo"><a href="index.php"><img src="images/logo.png" width="80" height="68" alt="Bass Logo"> </a></div>
	<div id="apDivUBar1"></div>
	<div id="apDivUBar2"></div>
	<div id="apDivBaasLk">baas.lk</div>


	<div id='english'><a href='english.php'><img src='images/english.png' height='20' width='40'></a></div>
	<div id='sinhala'><a href='sinhala.php'><img src='images/sinhala.png'></a></div>
	<div id="tamil"><a href="tamil.php"><img src="images/tamil.png"></a></div>

	<?php

	if(isset($_SESSION['language'])){
		if($_SESSION['language']=='tamil')
		{
			echo "<div id=\"main-header-tamil\">";
		}

		else
		{
			echo "<div id=\"main-header\">";
		}

	}
	else
	{
		echo "<div id=\"main-header\">";
	}

	?>

	
	<?php echo THEBESTWAY ; ?>
	</div>

	<div id ="menu" class="menubar">
		<ul>
	  		<li><a href="index.php"><?php echo HOME; ?></a></li>
	  		<li><a href="http://baas.lk/wiki/index.php?title=Main_Page"><?php echo WIKI; ?></a></li>
	  		<li><a href="faq.php"><?php echo FAQ; ?></a></li>	 
			<li><a href="forum.php"><?php echo FORUM; ?></a></li>
	  		<li><a href='listbiditems.php'><?php echo CLASSIFIEDS; ?></a></li>

	  		<?php
		  		if(isset($_SESSION['username']) ){
		  			if(isset($_SESSION['Catagory']) ){

		  				if( $_SESSION['Catagory']== "sp"){					
						echo"<li><a href='profile.php'>".MYPROFILE."</a></li>";					
						echo"<li><a href='findjob.php'>".JOBS."</a></li>";


			   			//echo"<li><a href=\"profile.php?user=". $_SESSION['userID'] . "\">Profile</a></li>";

			   			$foldername = "Gallery/galleryUploads/".$_SESSION['username']; 
 						if(!file_exists ( $foldername)){ 
 							mkdir($foldername, 7777);
							}
			   			}
			   		}
			   		if(isset($_SESSION['Catagory']) ){
			   			if( $_SESSION['Catagory']== "customer"){
			   			echo"<li><a href='profileCustomer.php'>".MYPROFILE."</a></li>";					
						echo"<li><a href='findjob.php'>".JOBS."</a></li>";
						//echo"<li><a href=\"menu.php\">Bidd</a></li>";
						//echo "<li><a href=\"postjob.php\">Post A Job</a></li>";
						//echo"<li><a href=\"profileCustomer.php?user=". $_SESSION['userID'] . "\">Profile</a></li>";
			   			}
			   		}

				}
			?>  
		</ul>
	</div>
</div>










