<?php

function update_rating($userID,$newRating,$calendarID){
	//include_once('_database/database.php');
	global $dbConnection;	

	$query3 = "UPDATE calendar SET feedback=$newRating WHERE calendar_id = $calendarID " ;
	$result3 = mysqli_query($dbConnection,$query3);

	$query = "SELECT * FROM serviceprovider WHERE user_id = $userID " ;
	$result = mysqli_query($dbConnection,$query);

	if(!$result){
			die("Database query failed.");
	}

	$row = mysqli_fetch_assoc($result);
	if(isset($row['ratingCount'])){				
		$rating = $row['rating'];
		$ratingCount = $row['ratingCount'];
		$newRatingCount = $ratingCount+1 ;
		$updatedRating= (($rating*$ratingCount)+$newRating)/($newRatingCount);		
	}
	else{
		$updatedRating= $newRating;
		$newRatingCount = 1 ;
	}	
	
	//echo $newRatingCount;
	//echo $updatedRating;
	


	$query2 = "UPDATE serviceprovider SET rating=$updatedRating , ratingCount=$newRatingCount WHERE user_id = $userID" ;

	$result2 = mysqli_query($dbConnection,$query2);

	if($result2){
			//header('Location: profileCustomer.php');  
	}
	

}
?>