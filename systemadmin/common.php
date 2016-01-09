<style type="text/css">
p{	
	color: rgba(51,51,51,1);
	font-size:18px;}
h3{
	line-height: 40%;	}

.FAQ { 
 		cursor:hand; cursor:pointer;
        border:1px solid darkorange;
        width:200px; 
        background-color: #f0f0f0;
       padding :5px;  }
.FAA { 
 	display:none; }

#apDivTitle{
	position: absolute;
	left: 1px;
	top: 79px;
	width: 185px;
	height: 262px;
	z-index: 111;
}

</style>
<body >
<!-- -->
<div  id="apDivTitle">
<div class="FAQ" onClick="toggle('show1')">
<h3 align="left"><a href="home.php"><img src="images/j.png" alt="expand" style="width:30px;height:30px;">  Service Provider</a></h3>
</div>
<DIV class="FAQ" onClick="toggle('show2')">
<h3 align="left"><a href="cmremove.php"><img src="images/j.png" alt="expand" style="width:30px;height:30px;"> Customer</a></h3>
</DIV>
<DIV class="FAQ" onClick="toggle('show3')">
<h3 align="left"><a href="forumremove.php"><img src="images/j.png" alt="expand" style="width:30px;height:30px;"> Forum</a></h3>
</DIV>
<DIV class="FAQ" onClick="toggle('show4')">
<h3 align="left"><a href="jobremove.php"><img src="images/j.png" alt="expand" style="width:30px;height:30px;">Jobs</a></h3>
 </DIV>
</div>