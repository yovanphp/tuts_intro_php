<?php
	session_start();
	require_once("config.php");
	require_once("functions.php");

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$username = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "";
		$password = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";
		if(is_valid_user($username, $password)) {
			$_SESSION["username"] = $username;
			header("Location: main.php");
		} 
		else $status = "Invalid credentials";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<style>
		ul {
			list-style: none;
			padding-left: 0;
		}

		li {
			margin-bottom: 10px;
		}

	</style>
</head>
<body>
	<?php if(isset($status)) :?>
		<div class="message">
			<p><?php echo $status ?></p>
		</div>
	<?php endif; ?>
	<div class="main_content">
		<form action="login.php" method="post">
			<ul>
				<li>
					<label for="username">User name</label><br>
					<input type="text" name="username" id="username">
				</li>
				<li>
					<label for="password">Password</label><br>
					<input type="password" name="password" id="password"></li>
				<li>
					<input type="submit" value="OK" name="ok">
				</li>
			</ul>
		</form>
	</div>
</body>
</html>