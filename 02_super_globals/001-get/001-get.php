<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>$_GET superglobal</title>
</head>
<body>
	<a href="personal_details.php?first_name=Yovan&profession=developer&last_name=Juggoo">My personal info</a>
	<p><?php echo htmlspecialchars("Please view source: <code>I printed special chars</code>") ?></p>
</body>
</html>