<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="tanmay" >
    <link rel="icon" href="favicon.ico">

    <title>CUSAT ODAP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
function loginredir() {
    window.location="fbconfig.php";
}
function logout() {
	window.location="logout.php"
}
</script>
  </head>

  <body role="document">
	
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ODAP CUSAT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="privacy_policy.html">Privacy Policy</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<?php if (isset($_SESSION['FBID'])): ?>      <!--  After user login  -->
    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
	<div class="row">         
		<div class="col-md-3"><img src="cusatlogo.jpg"></div>      
        <div class="col-md-9"><h2>Welcome to CUSAT </br>Open Data Anonymization Project</h2></div> </div>
        <p> This project is intended to gather data for academic research purposes only. </br> There is no business use of this data.</p>
      </div>


      <div class="page-header">
        <h1>Hi <?php echo $_SESSION['FULLNAME']; ?></h1>
      </div>
      <p>
        
        <button type="button" class="btn btn-lg btn-primary" onclick="logout()">Log Out</button>
      </p>
      


      <div class="page-header">
        <h1>Tables</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
           
            <tbody>
              <tr>
                <td>Facebook Id:</td>
                <td><?php echo $_SESSION['FBID']; ?></td>
              </tr>
              <tr>
                <td>Full Name:</td>
                <td><?php echo $_SESSION['FULLNAME']; ?></td>
              </tr>
              
              <tr>
                <td>Email id:</td>
                <td><?php echo $_SESSION['EMAIL']; ?></td>
              </tr>
              <tr>
                <td>Age:</td>
                <td><?php echo $_SESSION['AGE']['min']; ?></td>
              </tr>
              <tr>
                <td>Education:</td>
                <td><?php foreach($_SESSION['EDUCATION'] as $key=>$value){ echo $key => $value."\n" ;} ?></td>
              </tr>
              <tr>
                <td>Political:</td>
                <td><?php print_r($_SESSION['POLITICAL']); ?></td>
              </tr>
              <tr>
                <td>Religion:</td>
                <td><?php print_r($_SESSION['RELIGION']); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
       
      




    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </div>  
    <?php else: ?>   
  <!-- Before login --> 
	<div class="container theme-showcase">
	<div class="jumbotron">
	<div class="row">
	<div class="col-md-3"><img src="cusatlogo.jpg"></div>
	<div class="col-md-9" ><h2>Welcome to CUSAT </br> Open Data Anonymization Project</h2> </div> 
	</div>
        <p> This project is intended to gather data for academic research purposes only. </br> There is no business use of this data.</p>
	<h2>Login with Facebook</h2>
           Not Connected, please click to 
<!--	<div> <a href="fbconfig.php">Login with Facebook</a></div> -->
	<button type="button" class="btn btn-lg btn-primary" onclick="loginredir()">Login with Facebook</button>
    
    </div>
    </div>
         <?php endif ?>
         
         
         
      </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>   
      <div id = "contact" class="container">
		<div class="row">
		<div class="col-md-12">
		<h2> Contact Us</h2>      
      Email us at : tkpandey@hotmail.com</div></div>
	  <div class="row">
	  <div class="col-md-12">      
      Phone: +918893474813 </div></div>
      <div class="row">
	  <div class="col-md-12"> 
      University website: <a href="www.cusat.ac.in">cusat.ac.in</a> </div></div>
      </div>
  </body>
</html>
