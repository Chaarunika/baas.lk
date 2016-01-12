<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>baas.lk</title>

	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/acceptbidNew.css">

	<!-- rating  -->
	<link rel="stylesheet" href="star-rating.css" media="all" type="text/css"/>  
    <script src="star-rating.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap  -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Gallery/_scripts/jquery-2.1.4.min.js"></script>
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<style type="text/css">

	</style>
</head>

<body>
	<?php 
	include_once('header.php'); 	
	include_once('_database/database.php'); 
	include_once('functions/functions.php');	
	?>

	<?php
		$accountid=$_SESSION['accountid'];
		$itemid=$_GET['itemid'];

		$sql="select * from tblbiditems where biditemid=$itemid LIMIT 1";
		$result=mysqli_query($database,$sql) or die ("Cannot verify login: ".mysqli_error() );
		$row=mysqli_fetch_array($result);

		$sql2="select * from users where user_id=".$row['accountno'] ;
		$result2=mysqli_query($database,$sql2) or die ("Cannot verify login: ".mysqli_error());
		$row2=mysqli_fetch_array($result2);

		$sql3="select * from tblbidhistory where  biditemid=$itemid order by bidhistoryid DESC limit 10 "  ;
		$result3=mysqli_query($database,$sql3) or die ("Cannot verify login: ".mysqli_error());
		$row3=mysqli_fetch_array($result3);

		$sql4="select * from serviceprovider where  user_id=".$row['accountno']  ;
		$result4=mysqli_query($database,$sql4) or die ("Cannot verify login: ".mysqli_error());
		$row4=mysqli_fetch_array($result4);	
	?>

	<div id="apDivContainer">
		<div id="apDivMainInfo">
	    	<div id="apDivTitle">
		        <p style="font-size:20px; margin-top:0px"> 
		        	<?php         	
		        	if(isset($row2['user_firstname'])){ 
		        		echo $row2['user_firstname']." ".$row2['user_lastname'] ;
		        	}?>        	
		      	</p>    
		        <p style="margin-top:0px" ><?php echo MEMBERSINCE ; ?> : <?php if(isset($row2['user_registration_datetime'])) { echo $row2['user_registration_datetime'] ;} ?></p> 
		        <p><?php echo CATEGORY ; ?> : <?php if(isset($row4['category'])) { echo $row4['category'] ;} ?></p>
		        <p><?php echo AREA ; ?> : <?php if(isset($row4['area'])) { echo $row4['area'] ;} ?></p>  		      
			    <p><?php include('includes/ratingForSearch.php') ?></p> 	        			      
			    <p class="bubble"><span style='padding:5px' class="glyphicon glyphicon-user"><?php echo " ".$row4['ratingCount']." Votes"; ?></span></p>
	    	</div> 
	      	<div id="apDivProfPic2"><img class="img-circle2"  src=  <?php if(isset($row2['user_avatar'])) { echo $row2['user_avatar'] ;} ?>  > </div>    	
	    </div>

	</div>



<script>
    jQuery(document).ready(function () {
        $("#input-21f").rating({
            starCaptions: function(val) {
                if (val < 3) {
                    return val;
                } else {
                    return 'high';
                }
            },
            starCaptionClasses: function(val) {
                if (val < 3) {
                    return 'label label-danger';
                } else {
                    return 'label label-success';
                }
            },
            hoverOnClear: false
        });
        
        $('#rating-input').rating({
              min: 0,
              max: 5,
              step: 1,
              size: 'lg',
              showClear: false
           });
           
        $('#btn-rating-input').on('click', function() {
            $('#rating-input').rating('refresh', {
                showClear:true, 
                disabled:true
            });
        });
        
        
        $('.btn-danger').on('click', function() {
            $("#kartik").rating('destroy');
        });
        
        $('.btn-success').on('click', function() {
            $("#kartik").rating('create');
        });
        
        $('#rating-input').on('rating.change', function() {
            alert($('#rating-input').val());
        });
        
        
        $('.rb-rating').rating({'showCaption':true, 'stars':'3', 'min':'0', 'max':'3', 'step':'1', 'size':'xs', 'starCaptions': {0:'status:nix', 1:'status:wackelt', 2:'status:geht', 3:'status:laeuft'}});
    });
</script>

</body>

</html>