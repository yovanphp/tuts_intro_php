<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact form</title>
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
	<form action="result.php" method="post">	
		<ul>
			<li>
				<label for="first_name">First name: </label>
				<input type="text" name="first_name">
			</li>
			<li>
				<label for="last_name">Last name: </label>
				<input type="text" name="last_name">
			</li>
		</ul>
		<input type="submit" value="Go">
	</form>
</body>
</html>