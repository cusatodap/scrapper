<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1687233988161207',
  'app_secret' => '15c0aa4edbd65f6a01ee26a9c07575c6',
  'default_graph_version' => 'v2.5',
]);

$accessToken=$_SESSION['facebook_access_token'];
// Sets the default fallback access token so we don't have to pass it to each request
$fb->setDefaultAccessToken($accessToken);

try {
  $response = $fb->get('/me?fields=first_name,last_name,id,age_range,gender,timezone,email,political,hometown,education, religion');
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

echo 'Logged in as ' . $userNode->getName();



?>