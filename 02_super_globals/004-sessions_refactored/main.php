<?php  
	session_start();
	require_once("functions.php");

	if(!is_logged_in()) {
		header("Location: login.php");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main page</title>
	<script>
		window.onload = onloadFunctions;
		var onloadFunctions  = function() {
			logout();
		};

		function logout() {
			window.location = "logout.php";
		}
	</script>
</head>
<body>
	<div class="nav">
		<p><input type="button" onclick="logout();" value="Logout"></p>
		<p>Logout link: <a href="logout.php">Logout</a></p>
	</div>
	<div>
		<h1>Admin page</h1>
		<p>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
	</div>
</body>
</html>