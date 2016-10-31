<?php 
	$first_name = "Yovan";
	$last_name = "Juggoo";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Variables</title>
	</head>
	<body>
		<div>
			<p>
				<?php echo "Hello World. " . "I am {$first_name} {$last_name}"?>
			</p>
			<p>
				Hello World. I am <?php echo "{$first_name} {$last_name}" ?>
			</p>
		</div>
	</body>
</html>