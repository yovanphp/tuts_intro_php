<?php 
	session_start();
	var_dump($_SESSION);
	if (isset($_SESSION["username"]))
		echo $_SESSION["username"] . "<br>";
	session_destroy();
	if (isset($_SESSION["username"]))
		echo "After running session_destroy() \$_SESSION[\"username\"]: {$_SESSION['username']}<br>";
	$_SESSION = [];
	echo "After running session_destroy() and reinitializing the superglobal \$_SESSION: <br>";
	var_dump($_SESSION);
?>