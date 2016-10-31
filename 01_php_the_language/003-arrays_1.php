<?php 
	$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

	echo "<h1>With var_dump()</h1>";
	var_dump($months);

	echo "<h1>With echo()</h1>";
	echo $months;

	echo "<h1>With print_r()</h1>";
	echo "<pre>";
	print_r($months);
	echo "</pre>";
	
	echo $months[4];

	$tuts_sites = array("nettuts+", "psdtuts+", "webdesigntuts+", "wptuts+"); 

	$new_syntax = ["Monday", "Friday", "Saturday"];
	echo "<h1>Array using new syntax</h1>";
	var_dump ($new_syntax);

	$social_media_sites_associative_array = array (
		"facebook" => "https://www.facebook.com",
		"twitter" => "https://www.twitter.com",
		"linkedin" => "https://www.linkedin.com"
	);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
	<h1>Tuts+ Sites</h1>
	<ul>
	<?php 
		foreach ($tuts_sites as $site) {
			echo "<li><a href=\"#\">{$site}</a></li>";
		}
	?>
	</ul>

	<h1>Networking sites</h1>
	<ul>
	<?php 
		foreach ($social_media_sites_associative_array as $name => $url) {
			echo "<li><a href='{$url}'>" . ucwords($name) . "</a></li>"; 
		}
	?>
	</ul>
	
	<h1>Networking sites with endforeach</h1>
	<ul>
	<?php foreach ($social_media_sites_associative_array as $name => $url) : ?>
		<li>
			<a href="<?php echo $url ?>"><?php echo $name; ?></a>
		</li>
	<?php endforeach ?>
	</ul>
</body>
</html>