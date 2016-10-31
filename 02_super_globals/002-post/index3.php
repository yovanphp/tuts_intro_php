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
	<?php  
		if($_SERVER["REQUEST_METHOD"] === "POST") {
			$message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : "";
		if(mail("yovan.juggoo@gmail.com", "Message for post #333", "Message: {$message}")) {
			$status = "Your message was sent successfully!";
		}
	} ?>

	<?php if(isset($status)) { ?>
		<div id="message">
			<p><?php echo $status ?></p>
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