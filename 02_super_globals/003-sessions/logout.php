<?php  
	session_start();
	session_destroy();
	$_SESSION = [];
	//delete cookie in another course
	header("Location: login.php");
?>