<?php  
$first_name = isset($_GET['first_name']) ? htmlspecialchars($_GET['first_name']) : '';
$profession = isset($_GET['profession']) ? htmlspecialchars($_GET['profession']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Details</title>
</head>
<body>
	<table>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Profession</th>
		</tr>
		<tr>
			<td><?php echo $first_name ?></td>
			<td><?php echo isset($_GET['last_name']) ? htmlspecialchars($_GET['last_name']) : ''?></td>
			<td><?php echo $profession ?></td>
		</tr>
	</table>
</body>
</html>