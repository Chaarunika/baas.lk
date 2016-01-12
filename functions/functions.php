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


	function get_calendar_details($ID){
		global $dbConnection;
		
		$query = "SELECT * FROM calendar WHERE calendar_id = $ID" ;
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

	function get_recent_job_details(){
		global $dbConnection;
		
		$query = "SELECT * FROM postjob2 ORDER BY job_id DESC LIMIT 10" ;
		$result = mysqli_query($dbConnection,$query);
		
		if(!$result){
			die("Database query failed.");
		}
		return $result;
	}

	function get_recent_auction_details(){
		global $dbConnection;
		
		$query = "SELECT * FROM tblbiditems ORDER BY biditemid DESC LIMIT 10" ;
		$result = mysqli_query($dbConnection,$query);
		
		if(!$result){
			die("Database query failed.");
		}
		return $result;
	}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime, new DateTimeZone('Asia/Colombo'));
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function check_url($url) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    $headers = curl_getinfo($ch);
    curl_close($ch);

    return $headers['http_code'];
}

?>