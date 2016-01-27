<?php 
	require_once "./dbconf.php";
	session_start();
	$con=mysql_connect($host,$username,$pass)or die("Could not connect to Server");
	@mysql_select_db("$database")or die(mysql_error()."Could not select DataBase");
	$query = "SELECT * from `data` where `uid`=`$uid`";

?>