<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
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
//load app configuration
$fb = new Facebook\Facebook([
  'app_id' => '1687233988161207',
  'app_secret' => '15c0aa4edbd65f6a01ee26a9c07575c6',
  'default_graph_version' => 'v2.5',
]);
// login helper with redirect_uri
   $helper = $fb->getRedirectLoginHelper();
   $permissions = ['name','email', 'user_likes','age_range','hometown','education','gender','political']; // optional
   $loginUrl = $helper->getLoginUrl('http://scrapper.odap.cf/tanmay/fbconfig.php', $permissions);

try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest(
  $session,
  'GET',
  '/me',
  array(
    'fields' => 'id,name,birthday,education,email,political,gender'
  )
);
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();

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
  header("Location: index.php");
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>
