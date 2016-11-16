<?php
//setcookie("fontSize", 10, time()  - (60 * 3));
// echo "The cookie's value: {$_COOKIE['fontSize']}";

setcookie("prefs[fontSize]", 25);
setcookie("prefs[favoriteCategory]", "Advanced Programming");
setcookie("prefs[screenWidth]", 1400);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
	<style>
		p {
			font-size: <?php echo $_COOKIE["prefs"]["fontSize"]?>px;
		}
	</style>
</head>
<body>
	<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, repellat.</blockquote>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum velit aut in vero, animi explicabo eaque nulla dolorum commodi quae accusantium. Odio, recusandae.</p>

	<div>
		<ul>
			<?php if(isset($_COOKIE["prefs"])): 
				foreach($_COOKIE["prefs"] as $key => $value): ?>
					<li><?php echo htmlspecialchars($key) . ": " . htmlspecialchars($value) ?></li>
				<?php endforeach ?>
			<?php endif ?>
		</ul>
	</div>
</body>
</html>