<?php
	session_start();
	
	define("USER_NAME", "yovan.juggoo@gmail.com");
	define("PASSWORD", "1234");

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$username = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "";
		$password = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";
		// Handle authentication
		if($username === USER_NAME && $password === PASSWORD) {
			// Set the username in the session and login
			$_SESSION["username"] = $username;
			// Redirect to main page
			header("Location: main.php");
		} else {
			$status = "Invalid credentials";
		}
	}

	/*If we have multiple forms on our page, the above code will not work.
	if(isset($_POST["ok"])) {
		echo "Posted 2 <br>";
	}*/

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