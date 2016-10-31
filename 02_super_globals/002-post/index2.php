<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Posting to the page itself</title>
	<style>
		ul {
			list-style: none;
			padding-left: 0;
		}

		li {
			margin-bottom: 10px;
		}

		textarea {
			height: 50px;
		}
	</style>
</head>
<body>
	<?php  if($_SERVER["REQUEST_METHOD"] === "POST") {?>
		<div>
			Your name is: <?php echo isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "" ?> <br>
			Your email is: <?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "" ?> <br>
			Your message is: <?php echo isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : "" ?> <br>
		</div>
	<?php } ?>
	<form action="#" method="post">
		<ul>
			<li>
				<label for="name">Name: </label>
				<input type="text" id="name" name="name">
			</li>
			<li>
				<label for="email">Email: </label>
				<input type="text" id="email" name="email">
			</li>
			<li>
				<label for="message">Message: </label>
				<textarea name="message" id="message"></textarea>
			</li>
		</ul>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>