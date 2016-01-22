<?php
session_start(); 
?>
<?php 
// Load SDK Assets
require_once __DIR__ . '/vendor/autoload.php';
// Minimum required
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
$fbconfig['appUrl']="scrapper.odap.cf/index.php";
$fb = new Facebook\Facebook([
  'app_id' => '1687233988161207',
  'app_secret' => '15c0aa4edbd65f6a01ee26a9c07575c6',
  'default_graph_version' => 'v2.5',
]);
$app_namespace = 'cusatodap';



$canvasHelper = $fb->getCanvasHelper();

try {
  $accessToken = $canvasHelper->getAccessToken();
  $_SESSION['fb_token'] = $accessToken;
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

if (isset($accessToken)) {
  // Logged in.
	var_dump($accessToken);
	echo "logged in";
	// Lets save fb_token for later authentication through saved $_SESSION
//	$_SESSION['fb_token'] = $accessToken;
	try {
  	// Returns a `Facebook\FacebookResponse` object
 	 $response = $fb->get('/me?fields=id,name,hometown,birthday,education,email,political,gender', $accessToken);
	} 
	catch(Facebook\Exceptions\FacebookResponseException $e) {
  	echo 'Graph returned an error: ' . $e->getMessage();
  	exit;
	} 
	catch(Facebook\Exceptions\FacebookSDKException $e) {
 	 echo 'Facebook SDK returned an error: ' . $e->getMessage();
  	exit;
	}

	$user = $response->getGraphUser();
	echo 'Name: ' . $user['name'];
	echo '  id: '.$user['id'];
	echo 'Education:'.$user['education'];
	echo 'email: '.$user['email'];
	echo 'gender:'.$user['gender'];
	echo 'political; '.$user['political'];
	echo 'Hometown: '.$user['hometown'];
// OR
	// echo 'Name: ' . $user->getName()	;
	}
	else{
	
	$loginUrl = $fb->getLoginUrl(array('redirect_uri' => $fbconfig['appUrl']));
	header("Location: ".$loginUrl); 
	} 
?>

