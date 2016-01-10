<?php

function update_rating($userID,$newRating){
	//include_once('_database/database.php');
	global $dbConnection;	

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
		echo "dsss as a";

	}	
	
	echo $newRatingCount;
	echo $updatedRating;
	$query2 = "UPDATE serviceprovider SET rating=$updatedRating , ratingCount=$newRatingCount WHERE user_id = $userID" ;

	$result2 = mysqli_query($dbConnection,$query2);

	if($result2){
			die("Updation Sucessful.");
	}
	

}
?>