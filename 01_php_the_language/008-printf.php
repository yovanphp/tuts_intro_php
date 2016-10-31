<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Printing</title>
</head>
<body>

<h1>Priting using printf</h1>
<p><?php printf("My name is Yovan. I am 33 years old.") ?></p>

<h1>Formatted printing using printf</h1>
<?php  
	$name = "Yovan";
	$age  = 33;
	printf("<p>My name is %s. I am %d years old.</p>", $name, $age);
?>

<h1>printf returns the number of characters</h1>
<?php  
	//printf returns the number of characters passed to the function.
	$greeting = printf("<p>My name is %s. I am %d years old.</p>", $name, $age);
	echo "<p>count: " . $greeting . "</p>";
?>

<h1>sprint returns the string passed to it</h1>
<?php
	//sprintf returns the string passed to the function.  
	$greeting = sprintf("<p>My name is %s. I am %d years old.</p>", $name, $age);
	echo "String passed: " . $greeting;
?>

<h1>sscanf used to capture the information passed to the string</h1>
<?php
	/*
		sscanf is used to capture and store data in an array. The data is splitted using a space.
		If there is a string we want to ignore, we can use character classes (here a string not starting with a comma). We still have to put the , after our regular expression. Only formatted characters will be stored in our array. So the comma is ignored.   
	 */
	$result = sscanf("June 7th, 2016", "%s %[^,], %d");
	var_dump($result);
?>

<h1>Using list to assign values in an array to variables</h1>
<?php  
	list($first_name, $last_name, $age) = ["Yovan", "Juggoo", "33"];
	echo "My name is {$first_name} ${last_name}. <br>";

	//we can hence use list to store the captured data from our string into variables.
	list($month, $day, $year) = sscanf("June 7th, 2016", "%s %[^,], %d");
	echo "The day is: " . $day . "<br>";
	echo "The month is: " . $month . "<br>";
	echo "The year is: " . $year . "<br>";
?>

<h1>We can directly assign values to variables using sscanf</h1>
<?php  
	sscanf("June 7th, 2016", "%s %[^,], %d", $m, $d, $y);
	echo "The day is: " . $d . "<br>";
	echo "The month is: " . $m . "<br>";
	echo "The year is: " . $y . "<br>";
?>
</body>
</html>