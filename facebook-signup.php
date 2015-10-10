<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php include 'header.php'?>
<?php include 'navbar/navigation.php'?>
<link href="main.css" rel="stylesheet">




<style type="text/css">
#serviceproviderbox {
	position:absolute;
	width:460px;
	height:400px;
	z-index:1;
	left: 702px;
	top: 336px;
	background-color: #F7F7F7;
	background-color: #ffffff;
	border: 2px solid #f0f0f0;
	border-radius: 10px;
}

#spimage{
	position:absolute;
	width:207px;
	height:177px;
	z-index:2;
	left: 247px;
	top: 103px;
}

#apDiv2 {
	position:absolute;
	width:460px;
	height:400px;
	z-index:2;
	left: 202px;
	top: 336px;
	background-color: #F7F7F7;
	background-color: #ffffff;
	border: 2px solid #f0f0f0;
	border-radius: 10px;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}
#signupasa {
	position:absolute;
	width:200px;
	height:53px;
	z-index:3;
	left: 60px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #213266;
	font-weight:bold;
}
@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#general {
	position:absolute;
	width:200px;
	height:53px;
	z-index:3;
	left: 60px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #213266;
	font-weight:bold;
}
#apDiv5 {
	position:absolute;
	width:207px;
	height:177px;
	z-index:2;
	left: 247px;
	top: 103px;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#sptitle {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 57px;
	top: 55px;
	font-family:BRITANIC;
	font-size: 40px;
	color: #213266;
	font-weight:bold;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#looking{
	position:absolute;
	width:400px;
	height:115px;
	z-index:3;
	left: 12px;
	top: 55px;
	font-family:BRITANIC;
	font-size: 40px;
	color: #213266;
	font-weight:bold;
}


#apDiv7 {
	position:absolute;
	width:124px;
	height:45px;
	z-index:4;
	left: -494px;
	top: 353px;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#signUP {
	position:absolute;
	width:217px;
	height:50px;
	z-index:5;
	left: 150px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #009900;
	font-weight:bold;
	}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#serviceprovider {
	position:absolute;
	width:217px;
	height:50px;
	z-index:5;
	left: 195px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #009900;
	font-weight:bold;
	}

#home {
	position:absolute;
	width:145px;
	height:147px;
	z-index:1;
	left: 78px;
	top: 147px;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}


#apDiv1 {
	position:absolute;
	width:564px;
	height:58px;
	z-index:3;
	left: 204px;
	top: 253px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #213266;
	font-weight:bold;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#apDiv3 {
	position:absolute;
	width:543px;
	height:63px;
	z-index:4;
	left: 203px;
	top: 210px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #213266;
	font-weight:bold;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#apDiv4 {
	position:absolute;
	width:543px;
	height:63px;
	z-index:4;
	left: 250px;
	top: 210px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #04B404;
	font-weight:bold;
}

</style>

<?php 

session_start();
$firstname=$_SESSION['firstname'];

?>


</head>

<body>




	<div id="apDiv3">Hi, 
	
	</div>
	<div id="apDiv4">
		<?php echo $firstname?>
	</div>
	


	



<div id="apDiv1">You are signing up using facebook</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div id="serviceproviderbox">
  <div id="spimage"><img src="images/man.png" width="200" height="200" /> </div>
  <div id="sptitle">Are you a service provider?</div>
  <div id="signupasa">Sign up as a</div>
  <a href="serviceprovider/fsignup.php"><div id="serviceprovider">Service provider</div></a>
 

</div>


<div id="apDiv2">
	<div id="looking">
    Looking for a service provider?
	</div>
	<div id="general">General </div>
	<a href="customer/fsignup.php"><div id="signUP">Sign UP</div></a>
	<div id="home"><img src="images/customer.png" width="220px" height="190" /></div>

	
</div>

</body>
</html>

