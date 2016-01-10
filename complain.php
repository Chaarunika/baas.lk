<!DOCTYPE HTML>
<html>

<head>
	<title>baas.lk</title>
	<meta charset="UTF-8">

<link href="css/header.css" rel="stylesheet">

<style>

p{	
	color: rgba(51,51,51,1);
	font-size:18px;
	}

h3{
	line-height: 40%;	

}
 .FAQ { 
 		cursor:hand; cursor:pointer;
        border:1px solid darkorange;
        border-radius: 3px;
        width:600px; 
        background-color: #f0f0f0;
       // padding :5px;  	
        
        
    }

 .FAA { 
 	display:none;	
 	 }


#apDivTitle{
	position: absolute;
	left: 131px;
	top: 90px;
	width: 70%;
	height: 105px;
	z-index: 111;
}



#apDivQuestionBox {
	position: absolute;
	left: 300px;
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
	top: 100px;
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

}
.faqInput{
width:100%;
height:20px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
resize:none;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);

}

</style>



<body>


<?php
 include('header.php');
 ?>


<div id="apDivQuestionBox">



<div id="apDivQuestionTitle">
  <p style="font-size:18px"><strong> Have a complain ?</strong>?</p>
  <p > Report to admin ...... </p>

</div>

<div id="apDivQustionForum">
  <form id="form1" name="form1" method="post" action="complain.php">
    <p>
      <label for="question"></label>
      <input type="text" name="spid" class="faqInput" id="question" placeholder=" Service Provider ID required></input>
    </p>

    <p>
      <label for="question"></label>
      <input type="text" name="jobid" class="faqInput" id="question" placeholder=" Service Provider ID required></input>
    </p>

    <p>
      <label for="description"></label>
      <textarea name="description" id="question" class="faqText" placeholder="<?php echo "Description" ; ?>..." cols="45" rows="5" required></textarea>
    </p>
    <p>
      <input type="submit" class="post" name="qBtn" id="qBtn" value="<?php echo POST ; ?>" />
    </p>
  </form>
</div>

}

</div>

</body>
</html>