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
$fbconfig['appUrl']="scrapper.odap.cf/index.php";
$fb = new Facebook\Facebook([
  'app_id' => '1687233988161207',
  'app_secret' => '15c0aa4edbd65f6a01ee26a9c07575c6',
  'default_graph_version' => 'v2.5',
]);
// login helper with redirect_uri
$helper = $fb->getRedirectLoginHelper('http://scrapper.odap.cf/fbconfig.php');
    //$helper = new FacebookRedirectLoginHelper('http://scrapper.odap.cf/fbconfig.php' );
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
  $loginUrl = $helper->getLoginUrl(array('redirect_uri' => $fbconfig['appUrl']));
 header("Location: ".$loginUrl);
}
?>
