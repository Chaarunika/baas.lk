<?php

	function get_user_details($userID){
		global $dbConnection;
		
		$query = "SELECT * FROM users WHERE user_id = $userID LIMIT 1" ;
		$result = mysqli_query($dbConnection,$query);
		
		if(!$result){
			die("Database query failed.");
		}
		return $result;
	}

	function get_serviceprovider_details($userID){
		global $dbConnection;

		$query = "SELECT * FROM serviceprovider WHERE user_id = $userID LIMIT 1" ;
		$result = mysqli_query($dbConnection,$query);
		
		if(!$result){
			die("Database query failed.");
		}

		return $result;
	}

?>