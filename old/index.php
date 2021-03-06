<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="https://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->

<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['FULLNAME']; ?></h1>
  <p>Thanks a lot for participating in our program.</p>
  <p>All the data we have gathered from your profile has been listed below. We assure you it shall not be made public.</p>
  <p>This data will be used for academic research purposes only.</p>
  <p>You may click the logout button to return to facebook.</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>

<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<i><?php var_dump($_SESSION) ?><i>
<div><a href="logout.php">Logout</a></div>
</ul>
    <?php else: ?>   
  <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected, please click to 
<div> <a href="fbconfig.php">Login with Facebook</a></div>
      </div>
         <?php endif ?>
  </body>
</html>


