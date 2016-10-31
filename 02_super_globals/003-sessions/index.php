<?php  
	session_start();
	var_dump($_SESSION);
	if(isset($_SESSION["username"]))
		echo $_SESSION["username"];
	else $_SESSION["username"] = "Yovan Juggoo";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>
	<div>
		<p><a href="about.php">About page</a></p>
	</div>
</body>
</html>