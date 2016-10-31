<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
</head>
<body>
	<?php 
		$friends = ["Jane", "John", "Tom", "Christine"];

		for ($i = 0; $i < count($friends); $i++) {
			echo $friends[$i] . "<br>";
		}

		echo "<hr>";

		foreach ($friends as $friend) {
			echo $friend . "<br>";
		};

		echo "<hr>";

		$staff = [
			"ceo" => "Mark",
			"manager" => "Jean",
			"programmer" => "Paul",
			"senior_programmer" => "Pierre",
			"receptionist" => "Amanda"
		];

		function format($string) {
			return ucwords(str_replace("_", " ", $string));
		}
		foreach($staff as $position => $name) {
			echo format($position) . ": {$name}" . "<br>";
		};

		echo "<hr>";

		echo "<ul>";
		for($i = 0; $i < count($friends); $i++) {
			echo "<li>$friends[$i]</li>";
		}
		echo "</ul>";

		echo "<hr>";

		$count = 0;
		while($count < count($friends)) {
			echo "{$count}: {$friends[$count]}<br>";
			$count++;
		}
		echo "<hr>";
	?>
</body>
</html>