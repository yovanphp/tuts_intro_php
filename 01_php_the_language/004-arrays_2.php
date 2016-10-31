<?php 
	$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
	array_push($days, "Sunday");
	//pushing into an array
	echo "<h1>Array after pushing</h1>";
	var_dump ($days);
	echo "<hr>";
	
	//removing last item from array
	echo "<h1>Remove last item in an array</h1>";
	$popped = array_pop($days);
	echo "pop(array) returns the last item removed: {$popped}";
	echo "<h1>Array after removing last item</h1>";
	var_dump ($days);
	echo "<hr>";
	
	//removing first item in an array
	echo "<h1>Remove first item in an array</h1>";
	$shifted = array_shift($days);
	echo "shift(array) returns the first item removed: {$shifted}";
	echo "<h1>Array after removing first item</h1>";
	var_dump ($days);
	echo "<hr>";
	
	//Adding at the beginning of an array
	echo "<h1>Add an item at the beginning an array</h1>";
	$popped = array_unshift($days, "Notaday");
	echo "unshit(array, item) returns the length of the array after it was unshifted, i.e before an item was added at the beginning: {$popped}";
	echo "<h1>Array after an item at the start</h1>";
	var_dump ($days);
	echo "<hr>";


	//Slicing beginning from the 4th element inclusive
	$sliced = array_slice($days, 3);
	echo "The sliced array: array_slice(\$days, 3)";
	var_dump($sliced);
	echo "<h1>Original array is untouched after slice: </h1>";
	var_dump($days);
	echo "<hr>";

	//Slicing an array is not destructive
	// slice 3 elements beginning from the 3rd element
	$sliced = array_slice($days, 2, 3);
	echo "The sliced array: array_slice(\$days, 2, 3)";
	var_dump($sliced);
	echo "<hr>";


	//Filtering arrays for example filtering items having a length >= 8. The second argument to the array_filter  function is a callback which returns items having a length greater or equal to 8.
	$filtered = array_filter($days, function ($item) {
		return strlen($item) >= 8;
	});
	echo "The filtered array: ";
	var_dump($filtered);
	echo "<hr>";



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operations on arrays</title>
</head>
<body>
	
</body>
</html>