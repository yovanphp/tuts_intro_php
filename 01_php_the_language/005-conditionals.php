<?php 
	$month = "February";

	if ($month === "February")
		echo "Correct month";
	elseif ($month === "January")
		echo "Yeah but that was last month";
	else echo "You have completely missed the month";

	echo "<br>";

	if($month == true)
		echo "\$month is a truthy value";

	// false, 0, 0.0, "0", NULL, array() are falsy values
	
	$price = 0.0;

	echo "<br>";

	// != checks for inequality but not for types.
	// !== checks for strict inequality
	if($price != true)
		echo "\$price is a falsy value";

	echo "<br>";

	switch ($month) {
		case "January":
			echo "January";
			break;
		case "February":
			echo "February";
			break;
		default:
			echo "Some other month";
			break;
	}

	echo "<br>";

	$month = "jan";
	$months = array(
			"jan"  => "January",
			"feb"  => "February",
			"mar"  => "March",
			"may"  => "May",
			"jul"  => "July",
			"sept" => "September",
			"oct"  => "October",
			"nov"  => "November",
			"dec"  => "December",
		);

	echo "The month key {$month} has the value {$months[$month]}<br>";

	echo "Accessing an undefined key in an associative error raises an error. For example \$months[\"undefined_key\"] gives an error<br>";
	echo "Error raised" . $months["undefined_key"] . "<br>";

	echo isset($months["apr"]) ? $months["undefined_key"] : $months["mar"];



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditionals</title>
</head>
<body>
	
</body>
</html>