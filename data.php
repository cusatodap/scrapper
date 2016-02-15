<?php
session_start();
$user = "cusatodap";
$pass = "cusatodap";
$host = "localhost";
$database = "cusatodap";
$con = mysql_connect($host, $user, $pass) or die("could not connect to database");
mysql_select_db($database) or die("could not select database");

$query = "INSERT INTO `main`(`fbid`, `name`, `email`, `age`, `hometown`, `education`, `political`, `religion`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";

?>