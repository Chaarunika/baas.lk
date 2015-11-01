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

	function get_customer_details($userID){
		global $dbConnection;

		$query = "SELECT * FROM customer WHERE user_id = $userID LIMIT 1" ;
		$result = mysqli_query($dbConnection,$query);
		
		if(!$result){
			die("Database query failed.");
		}

		return $result;
	}


	function update_user_details($userID){
		global $dbConnection;
		
		$query = "SELECT * FROM users WHERE user_id = $userID LIMIT 1" ;
		$result = mysqli_query($dbConnection,$query);
		
		if(!$result){
			die("Database query failed.");
		}
		return $result;
	}

	function display_error($error){

		$out = "<div class=\"alert alert-danger fade in\">";
        $out .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>";
        $out .= "<strong>Error!</strong>";
        $out .= $error;
    	$out .= "</div>";

    	//echo $out;
    	return $out;
	}

	

?>