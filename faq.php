<!DOCTYPE HTML>
<html>

<head>
	<title>baas.lk</title>
	<meta charset="UTF-8">

<link href="css/header.css" rel="stylesheet">

<style>
@import "http://fonts.googleapis.com/css?family=Fauna+One|Muli";
p{	
	color: rgba(51,51,51,1);
	font-size:14px;
	font-family:'Fauna One',serif;
	padding-left: 5px;
	}
h1{	
	font-family:'Fauna One',serif
}
h3{	
	font-family:'Fauna One',serif;
}
 .FAQ { 
 		cursor:hand; cursor:pointer;
        border:1px solid darkorange;
        border-radius: 3px;
        width:600px; 
        background-color: #f0f0f0;
        font-size: 13px;
       // padding :5px;  	       
    }

 .FAA { 
 	display:none;
 	font-size: 10px;

 	 }
#apDivTitle{
	position: absolute;
	left: 131px;
	top: 90px;
	width: 70%;
	height: 105px;
	z-index: 111;
	font-size: 10px;
}
#apDivQuestionBox {
	position: absolute;
	left: 800px;
	top: 170px;
	width: 390px;
	height: 350px;
	z-index: 1;
	background-color: #f0f0f0;
	border-radius: 5px;
	border:1px solid rgba(51,51,51,0.5);
}
#apDivQuestionTitle {
	position: absolute;
	left: 16px;
	top: 18px;
	width: 350px;
	z-index: 2;
}

#apDivQustionForum {
	position: absolute;
	left: 19px;
	top: 155px;
	width: 340px;
	height: 147px;
	z-index: 2;
}
.post{
width:100%;
height:40px;
margin-top:15px;
margin-bottom:15px;
background-color:rgba(240,240,240,0.8);
border:1px solid rgba(0,0,0,0.2);
border-radius:3px;
font-family:'Fauna One',serif;
font-weight:500;
font-size:14px;
border-style: solid;
border-width: 1px;
}
.post:hover{
	background-color:#a6a6a6;
}
.faqText{
width:100%;
height:60px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
resize:none;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);
font-size: 14px;
}

label{
	font-size: 14px;
}
</style>

<script type="text/javascript">
	function toggle(Info) {
  		var CState = document.getElementById(Info);
  		CState.style.display = (CState.style.display != 'block') ? 'block' : 'none';
		}
</script>

</head>

<body>


<?php
 include('header.php');
 ?>

<div  id="apDivTitle">

<h1> <?php echo FREQUETLYASKEDQUESTIONS ; ?></h1>

<div class="FAQ" onclick="toggle('faq1')">	

	<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;">  1.<?php echo  FAQQ1 ; ?> ???</h3>

 	<div id="faq1" class="FAA" >
 	<hr/>
	 <p>
	 <?php echo FAQA1 ; ?></p>
 	</div>
</div>

<DIV class="FAQ" onclick="toggle('faq2')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 2. <?php echo FAQQ2 ; ?>???</h3>
 <div id="faq2" class="FAA">
 	<hr/>
 
 <p> <?php echo FAQA2A ; ?> 
<br><br> <?php echo FAQA2B ; ?>.</p> 
 </div>
</DIV>

<DIV class="FAQ" onclick="toggle('faq3')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 3. <?php echo FAQQ3 ; ?> ???</h3>
 <div id="faq3" class="FAA">
 	<hr/>
 <p><?php echo FAQA3 ; ?>.</p>
 
 </div>
</DIV>

<DIV class="FAQ" onclick="toggle('faq4')">

<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 4. <?php echo FAQQ4 ; ?> ???</h3>

 <div id="faq4" class="FAA">
 	<hr/> 
 <p><?php echo FAQA4 ; ?>.</p>
 
 
 </div>
</DIV>

<DIV class="FAQ" onclick="toggle('faq5')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 5. <?php echo FAQQ5 ; ?> ???</h3>

 <div id="faq5" class="FAA"><hr/>
 
 <p><?php echo FAQA5; ?>. </p>
 
 </div>
</DIV>


<DIV class="FAQ" onclick="toggle('faq6')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 6.<?php echo FAQQ6 ; ?> ???</h3>

 <div id="faq6" class="FAA"><hr/>
 
 <p> <?php echo FAQA6 ; ?>.</p>
 
 
 </div>
</DIV>


<DIV class="FAQ" onclick="toggle('faq7')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 7. <?php echo FAQQ7 ; ?> ???</h3>

 <div id="faq7" class="FAA"><hr/>
 
 <p><?php echo FAQA7 ; ?>.</p>
 
 </div>
</DIV>


<DIV class="FAQ" onclick="toggle('faq8')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 8. <?php echo FAQQ8 ; ?> ???</h3>
 <div id="faq8" class="FAA"><hr/>
 
 <p><?php echo FAQA8 ; ?>.</p>
 
 </div>
</DIV>


<DIV class="FAQ" onclick="toggle('faq9')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 9.<?php echo FAQQ9 ; ?> ???</h3>

 <div id="faq9" class="FAA"><hr/>
 
 <p>  <?php echo FAQA9 ; ?>.</p>
 </div>
</DIV>


<DIV class="FAQ" onclick="toggle('faq10')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 10. <?php echo FAQQ10 ; ?> ???</h3>

 <div id="faq10" class="FAA"><hr/>
 
 <p><?php echo FAQA10 ; ?>.</p>
 
 </div>
 
</DIV>
<?php echo
"<DIV class="FAQ" onclick="toggle('faq11')">
<h3><img src="images/magnify.png" alt="expand" style="width:20px;height:20px;"> 10. <?php echo FAQQ10 ; ?> ???</h3>

 <div id="faq11" class="FAA"><hr/>
 
 <p><?php echo FAQA10 ; ?>.</p>
 
 </div> " ?>
 
</DIV>

</div>


<div id="apDivQuestionBox">

<div id="apDivQuestionTitle">
  <p style="font-size:18px"><strong><?php echo NOSOLUTIONTOYOURPROBLEMHERE ; ?>?</strong>?</p>
  <p > <?php echo ASKTHEADMIN ; ?>...... </p>
  <p >(<?php echo YOURQUESTIONPOSTED ; ?>)</p>
</div>

<div id="apDivQustionForum">
  <form id="form1" name="form1" method="post" action="">
    <p>
      <label for="question"></label>
      <textarea name="question" id="question" class="faqText" placeholder="<?php echo ENTERYOURQUESTION ; ?>..." cols="45" rows="5" required></textarea>
    </p>
    <p>
      <input type="button" class="post" name="qBtn" id="qBtn" value="<?php echo POST ; ?>" />
    </p>
  </form>
</div>

</div>

</body>
</html>