<?php 
class Person {
	public $first_name;
	public $last_name;
	public $age;

	public function __construct($first_name, $last_name, $age) {
		$this -> first_name = $first_name;
		$this -> last_name = $last_name;
		$this -> age = $age;
	}

	public function communicate($style="speech") {
		echo "Communicating with {$style}.<br>";
	}
}

$employee1 = new Person("Yovan", "Juggoo", "33");
$employee2 = new Person("Jane", "Doe", "16");

$employee1 -> communicate();
$employee2 -> communicate("telepathy");

//TODO: This code does not work.
echo "{$employee1->first_name} {$employee1->last_name} is {$employee1->age} years old.";

var_dump($employee1);
/*
If we want to use objects but don't want to write a class, we can use an empty generic class.
We can't define methods on this empty class though.
 */
$me = new stdClass;
$me -> first_name = "Yovan";
$me -> last_name = "Juggoo";
$me -> age = 33;
var_dump($me);

$p = [
	"first_name" => "Melanie",
	"last_name" => "Shaw",
	"age" => 25
];

var_dump($p);
var_dump((object)$p);

$var = '5';
echo gettype($var) . "<br>";
echo gettype((int)$var) . "<br>";
echo gettype((integer)$var) . "<br>";

?>