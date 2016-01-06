<?php include "header.php" ?>
<div id="coverPics">
</div>

<style type="text/css">


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
        width:200px; 
        background-color: #f0f0f0;
       // padding :5px;  	
        
        
    }

 .FAA { 
 	display:none;	
 	 }


#apDivTitle{
	position: absolute;
	left: 1px;
	top: 79px;
	width: 202px;
	height: 262px;
	z-index: 111;
}
#show1{
	position:absolute;
	left:204px;
	top:79px;
	width:85%;
	height:500;
	z-index:2;
	background-color: rgba(192,192,192,1);	
	
}
#show2 {
	position:absolute;
	left:204px;
	top:79px;
	width:85%;
	height:auto;
	z-index:2;
	background-color: rgba(192,192,192,1);
}
#show3 {
	position:absolute;
	left:204px;
	top:79px;
	width:85%;
	height:auto;
	z-index:2;
	background-color: rgba(192,192,192,1);
}
#show4 {
	position:absolute;
	left:204px;
	top:79px;
	width:85%;
	height:auto;
	z-index:2;
	background-color: rgba(192,192,192,1);
}
#showspremove {
	position:absolute;
	left:0px;
	top:50px;
	height:auto;
	width:100%;
	z-index:2;
	background-color: rgba(192,192,192,1);
}
#showcreate {
	position:absolute;
	left:0px;
	top:50px;
	height:700px;
	width:100%;
	z-index:2;
	background-color: rgba(192,192,192,1);
}
</style>
<script type="text/javascript">
	function toggle(Info) {
  		var CState = document.getElementById(Info);
		var CState1 = document.getElementById('show1');
		var CState2 = document.getElementById('show2');
		var CState3 = document.getElementById('show3');
		var CState4 = document.getElementById('show4');
		if(Info =="show1")
		{
			CState2.style.display = 'none';
			CState3.style.display = 'none';
			CState4.style.display = 'none';
		}
		else if(Info =="show2")
		{
			CState1.style.display = 'none';
			CState3.style.display = 'none';
			CState4.style.display =  'none';
		}
			else if(Info =="show3")
		{
			CState1.style.display = 'none';
			CState2.style.display = 'none';
			CState4.style.display = 'none';
		}
			else if(Info =="show4")
		{
			CState1.style.display = 'none' ;
			CState2.style.display =  'none' ;
			CState3.style.display = 'none';
		}
		
		
  		CState.style.display = (CState.style.display != 'block') ? 'block' : 'none';
		}
</script>
<script type="text/javascript">
function showremove()
{
	var remove = document.getElementById('showspremove');
	var create = document.getElementById('showcreate');
	remove.style.display = 'block';
	create.style.display = 'none';
	clear(create);
}
function showcreate()
{
	var create = document.getElementById('showcreate');
	var remove = document.getElementById('showspremove');
	create.style.display = 'block';
	remove.style.display = 'none';
	clear(remove);
}
function clear(value)
{
	value.reset();
	
	
}
</script>
<body >

<div  id="apDivTitle">
  <div class="FAQ" onClick="toggle('show1')">
    <h3 align="left"><img src="images/j.png" alt="expand" style="width:30px;height:30px;">  Service Provider</h3>
</div>
<DIV class="FAQ" onClick="toggle('show2')">
<h3 align="left"><img src="images/j.png" alt="expand" style="width:30px;height:30px;"> Customer</h3>
</DIV>
<DIV class="FAQ" onClick="toggle('show3')">
<h3 align="left"><img src="images/j.png" alt="expand" style="width:30px;height:30px;"> Forum</h3>
</DIV>
<DIV class="FAQ" onClick="toggle('show4')">
<h3 align="left"><img src="images/j.png" alt="expand" style="width:30px;height:30px;">Jobs</h3>
 </DIV>

</div>

<div id="show1" >
<table width="350" align="left" cellspacing="20" >
          <tr>
         <td  align="left"  ><a href="#" onClick="return showremove()"><h3>View Account</h3></a></td>
         <td  align="left"><a href="#" onClick="return showcreate()"><h3>Create New Account</h3></a></td>
         </tr>
    </table>

<div id="showspremove" >
<?php include 'spremove.php'; ?>
</div>
<div id="showcreate" class="FAA" >
<?php include 'createprofile.php'; ?>
</div>
</div>

<div id="show2" class="FAA">
 <p>&nbsp;</p>
<table width="500" align="center" cellspacing="20" >
      	  <tr >
        <td width="25%" height="100" align="center"><a href="cmremove.php"><img src="images/1.jpg" height="100" width="100"></img></a></td>
        </tr>
        <tr>
         <td width="25%" height="50" align="center" class="tablefont"><a href="cmremove.php"><strong>Remove Account</strong></a></td>
         </tr>
    </table>

</div>

<div id="show3" class="FAA">
 <p>&nbsp;</p>
<table width="500" align="center" cellspacing="20" >
      	  <tr >
        <td width="25%" height="100" align="center"><a href="forumremove.php"><img src="images/4.jpg" height="100" width="100"></img></a></td>
        </tr>
        <tr>
         <td width="25%" height="50" align="center" class="tablefont"><a href="forumremove.php"><strong>Remove Topic</strong></a></td>
         </tr>
    </table>
</div>
<div id="show4" class="FAA">
 <p>&nbsp;</p>
<table width="500" align="center" cellspacing="20" >
      	  <tr >
        <td width="25%" height="100" align="center"><a href="jobremove.php"><img src="images/4.jpg" height="100" width="100"></img></a></td>
        </tr>
        <tr>
         <td width="25%" height="50" align="center" class="tablefont"><a href="jobremove.php"><strong>Remove Jobs</strong></a></td>
         </tr>
    </table>
    
</div>



