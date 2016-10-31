<?php  
	$first_name = isset($_POST["first_name"]) ? htmlspecialchars($_POST["first_name"]) : "";
	$last_name = isset($_POST["last_name"]) ? htmlspecialchars($_POST["last_name"]) : "";

	if (!empty($_POST)) {
		var_dump($_POST);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	<p>
		Your name is <?php echo "{$first_name} {$last_name}"; ?>
	</p>
</body>
</html>