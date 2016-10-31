<?php  
	session_start();

	if(!isset($_SESSION["username"])) {
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
	</div>
	<div>
		<h1>Admin page</h1>
		<p>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
	</div>
</body>
</html>