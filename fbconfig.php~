<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
// added in v4.0.0
//require_once 'autoload.php';
/*use Facebook\FacebookSession;
use Facebook\Helpers\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
*/
// init app with app id and secret
$fbconfig['appUrl']="https://scrapper.odap.cf/fbconfig.php";
$fb = new Facebook\Facebook([
  'app_id' => '1687233988161207',
  'app_secret' => '15c0aa4edbd65f6a01ee26a9c07575c6',
  'default_graph_version' => 'v2.5',
]);
// login helper with redirect_uri
$helper = $fb->getRedirectLoginHelper();
   
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
// see if we have a session
//echo '<h3>Access Token</h3>';
//var_dump($accessToken->getValue());
if ( isset($accessToken)) { //handle the access token if logged in and process requests
// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
//echo '<h3>Metadata</h3>';
//var_dump($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('1687233988161207'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
    exit;
  }

//  echo '<h3>Long-lived</h3>';
  //var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;
//var_dump($_SESSION);
// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
//header('Location: https://example.com/members.php');
//up here

  // graph api request for user data, the real work goes here, fetch data and redirect user to index.php
/*  $request = new FacebookRequest(
  $_SESSION['fb_access_token'],
  'GET',
  '/me',
  array(
    'fields' => 'id,name,email,religion,political,education,age_range,birthday,hometown'
  )
);
$response = $request->execute();
*/
 $request = new FacebookRequest(
  $accessToken,
  'GET',
  '/me',
  array(
    'fields' => 'id,name,education,email,age_range,hometown,religion,political'
  )
);

$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */
/* handle the result */

     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	$fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
        $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
        $fbirthday = $graphObject->getProperty('birthday');//birthday
	$feducation = $graphObject->getProperty('education'); //array education
        $fpolitical = $graphObject->getProperty('political');//
        $fgender = $graphObject->getProperty('gender');//

	/* ---- Session Variables -----*/
        $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
        $_SESSION['EMAIL'] =  $femail;
	$_SESSION['BIRTHDAY'] =  $fbirthday;
 	$_SESSION['EDUCATION'] =  $feducation;
 	$_SESSION['POLITICAL'] =  $fpolitical;
 	$_SESSION['GENDER'] =  $fgender;
     
/* ---- header location after session ----*/
  header("Location: https://scrapper.odap.cf/index.php");
} else { //echo "Inside crap";
  $permissions = ['user_friends', 'email','user_religion_politics','user_hometown','user_education_history']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('https://scrapper.odap.cf/fbconfig.php',$permissions);
  echo $loginUrl;
 header("Location: ".$loginUrl);
}
?>
