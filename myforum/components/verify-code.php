 <?php
 



	$digits = 4;
	$code=rand(pow(10, $digits-1), pow(10, $digits)-1);

	session_start();
	$_SESSION['code']=$code;


	$num=$_REQUEST['sp_contact_NO'];
	echo "Verification code to ".$num;
	
	
	echo $ip;;
	
	//header("location:http://124.43.73.165:9800/sendsms?phone=$num&text=$code&password=123456");
	
	$curl = curl_init();

	if (!$curl) 
	{
	echo "fail";
	}
	else
	{
	// Set some options - we are passing in a useragent too here
	
	curl_setopt($curl,CURLOPT_URL,"http://124.43.73.165:9800/sendsms?phone=$num&text=$code&password=123456");
	
	
	
	$urlContent = curl_exec($curl);

	// Close request to clear up some resources
	curl_close($curl);
	}


   
?>

<a href="http://localhost/php-login-advanced/controllers/form/verify-code-form.php/">verify</a>


