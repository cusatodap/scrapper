<?php

// Working canvas APP, FB SDK 4.0
session_start();
 
// Load SDK Assets
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

$app_id = '1687233988161207';
$app_secret = '15c0aa4edbd65f6a01ee26a9c07575c6';
$app_namespace = 'cusatodap';
$app_scope = 'name,id,age_range,gender,user_location,email,political';


// Facebook APP keys
FacebookSession::setDefaultApplication($app_id,$app_secret);

// Helper for fb canvas authentication
$helper = new FacebookCanvasLoginHelper();

// see if  $_SESSION exists
if (isset($_SESSION) && isset($_SESSION['fb_token']))
{
	// create new fb session from saved fb_token
	$session = new FacebookSession($_SESSION['fb_token']);

	// validate the fb_token to make sure it's still valid
	try 
	{
    	    $session->validate();
	}
	catch (Exception $e)
	{
	    // catch any exceptions
	    $session = null;
	}
}
else
{
	// no $_SESSION exists
	try
	{
		// create fb session
		$session = $helper->getSession();
	}
	catch(FacebookRequestException $ex)
	{
		// When Facebook returns an error
		//print_r($ex);
		$session = null;
	}
	catch(\Exception $ex)
	{
		// When validation fails or other local issues
		//print_r($ex);
		$session = null;
	}
}



// check if 1 of the 2 methods above set $session
if (isset($session))
{
	// Lets save fb_token for later authentication through saved $_SESSION
	$_SESSION['fb_token'] = $session->getToken();

	// Logged in
	$fb_me = (new FacebookRequest(
	  $session, 'GET', '/me'
	))->execute()->getGraphObject();

	// We can get some info about the user
	$fb_location_name = $fb_me->getProperty('location')->getProperty('name');
	$fb_email = $fb_me->getProperty('email');
	$fb_uuid = $fb_me->getProperty('id');
}
else
{
	session_destroy();
	// We use javascript because of facebook bug https://developers.facebook.com/bugs/722275367815777
	// Fix from here: http://stackoverflow.com/a/23685616/796443
	// IF bug is fixed this line won't be needed, as app will ask for permissions onload without JS redirect.
	$oauthJS = "window.top.location = 'https://www.facebook.com/dialog/oauth?client_id=$app_id&redirect_uri=https://apps.facebook.com/$app_namespace/&scope=$app_scope';";
}

?>
