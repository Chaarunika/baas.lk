<html>
<?php
session_start();
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
include '_database/database.php';

$fb = new Facebook\Facebook([
'app_id' => '405706082952850',
'app_secret' => '4db495f644b8175b9f91968047941582',
'default_graph_version' => 'v2.2',]);
$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // There was an error communicating with Graph
  echo $e->getMessage();
  exit;
}

 
 
 
if (isset($accessToken)) {
  // User authenticated your app!
  // Save the access token to a session and redirect
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  // Log them into your web framework here . . .
  

	$fb->setDefaultAccessToken($accessToken);
	$res = $fb->get( '/me?fields=id,name,email,picture' );
	$user = $res->getGraphObject();



	$id= $user->getProperty( 'id' );
	$name=$user->getProperty( 'name' );
	$email= $user->getProperty( 'email' );
	$arr = explode(' ',trim($name));
	$firstname= $arr[0]; 
	$lastname= $arr[1]; 
	$picture=$user->getProperty('picture' );
	$url= $picture->getProperty('url');
	
	$_SESSION['id']=$id;
	$_SESSION['email']=$email;
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	$_SESSION['url']=$url;
	
	$sql = "SELECT * FROM users where user_name=$id";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);

	if($id==$rws['user_name'])
	{
		
		$_SESSION['user_name']=$id;
		
		if($rws['user_catagory']=="sp")
		{
		header('Location:serviceprovider/home.php');
		}
		else if($rws['user_catagory']=="customer")
		{
		header('Location:customer/home.php');
		}
	}
	else
	{
	header('Location:facebook-signup.php');
	}


?>


	

<?php
  
	exit;
} elseif ($helper->getError()) {
  // The user denied the request
  // You could log this data . . .
  var_dump($helper->getError());
  var_dump($helper->getErrorCode());
  var_dump($helper->getErrorReason());
  var_dump($helper->getErrorDescription());
  // You could display a message to the user
  // being all like, "What? You don't like me?"
  exit;
}


 
// If they've gotten this far, they shouldn't be here
http_response_code(400);
exit;



?>
</html>