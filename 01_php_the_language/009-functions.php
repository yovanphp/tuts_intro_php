<?php  

//We can give default values to our arguments if we don't want an error to occur when we run them without passing them the value of the argument. Any value we pass will override the default value.
function say_hello($name="Buddy", $position="Programmer") {
	return "Hello {$name}" . ". You are a {$position}";
}

function pretty_print($value) {
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}

function array_pluck_mine($key, $my_array) {
	$output = [];
	foreach($my_array as $main_items) {
		foreach($main_items as $main_items_key => $value) {
			if($main_items_key === $key)
				array_push($output, $value);
		}
	}
	return $output;
}

function array_pluck($key, $my_array) {
	$output = [];
	foreach($my_array as $main_items) {
		$output[] = $main_items[$key];
	}
	return $output;
}

/*
	The $key value is local to the function but not to the inner anonymous function.
	We must explicitly tell PHP that we want the function to use the parent function local variable.
 */
function array_map_pluck($key, $my_array) {
	return array_map(function($item) use($key){
		return $item[$key];
	}, $my_array);
}

echo "<p>" . say_hello("Yovan", "Team Leader") . "</p>";
echo "<p>" . say_hello("Natasha") . "</p>";
echo "<p>" . say_hello() . "</p>";

$teacher = ["name" => "Yovan Juggoo", "age" => 33, "subject" => "Electonics"];
pretty_print($teacher);

$friends = [
	["name" => "Yovan", "age" => 33, "position" => "Backend Developer"],
	["name" => "Jack", "age" => 25, "position" => "Teacher"],
	["name" => "Jane", "age" => 21, "position" => "HR Manager"]
];

//array_pluck_mine is very cluncky as it uses two foreach
echo "<h1>Using array_pluck_mine</h1>";
$friends_names = array_pluck_mine("name", $friends);
$friends_ages = array_pluck_mine("age", $friends);
pretty_print($friends_names);
pretty_print($friends_ages);

//array_pluck is better
echo "<h1>Using array_pluck</h1>";
$friends_names = array_pluck("name", $friends);
$friends_ages = array_pluck("age", $friends);
pretty_print($friends_names);
pretty_print($friends_ages);

//array_pluck is better
echo "<h1>Using array_map_pluck</h1>";
$friends_names = array_map_pluck("name", $friends);
$friends_ages = array_map_pluck("age", $friends);
pretty_print($friends_names);
pretty_print($friends_ages);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions</title>
</head>
<body>
	
</body>
</html>