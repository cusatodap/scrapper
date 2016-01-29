<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1687233988161207',
  'app_secret' => '15c0aa4edbd65f6a01ee26a9c07575c6',
  'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['user_friends', 'email','user_religion_politics','user_hometown','user_education_history']; // optional
$loginUrl = $helper->getLoginUrl('http://scrapper.odap.cf/test/login-callback.php', $permissions);
?>
<html>
<head>
<title>
Welcome to CUSAT ODAP
</title>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1687233988161207";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-login-button" data-max-rows="2" data-size="large" data-show-faces="true" data-auto-logout-link="true">
<?php
//header("Location:https://scrapper.odap.cf/test/login-callback.php");
echo '<a href="' . $loginUrl . '">Log in with Fb!</a>';
?>
</div>
</body>
</html>