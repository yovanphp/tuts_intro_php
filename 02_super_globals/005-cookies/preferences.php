<?php
	if($_SERVER["REQUEST_METHOD"] === "POST") {
		//var_dump($_POST);
		
		setcookie("fontSize", (int) $_POST["font_size"], time() + (60 * 60));
		setcookie("favoriteCategory", $_POST["favorite_category"], time() + (60 * 60));
		setcookie("screenWidth", $_POST["screen_width"], time() + (60 * 60));

	}
	$font_size = isset($_POST["font_size"]) ? (int) $_POST["font_size"] : (isset($_COOKIE["fontSize"]) ?  (int) $_COOKIE["fontSize"] : 16);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Preferences</title>
		<style>
			li {
				list-style: none;
				padding: 0;
				margin-bottom: 10px;
			}
			ul {
				padding: 0;
			}

			body {
				font-size: <?php echo htmlspecialchars($font_size)?>px;
			}
		</style>
	</head>
	<body>
		<form action="#" method="post">
			<ul>
				<li>
					<label for="font_size">Your preferred Font size?</label>
					<select name="font_size">
						<option value=""></option>
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option value="40">40</option>
					</select>
				</li>
				<li>
					<label for="favorite_category">Your favorite category?</label>
					<input type="text" name="favorite_category" id="favorite_category">
				</li>
				<li>
					<label for="screen_width">Your screen width?</label>
					<input type="text" name="screen_width" id="screen_width">
				</li>
			</ul>
			<input type="submit" value="Ok">
		</form>

		<div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, enim optio! Eligendi accusantium eveniet officiis quis iure, facilis, amet vitae perferendis, quia voluptatum laudantium qui odio est. Eligendi repellat nulla placeat provident ipsam, at voluptates recusandae deleniti harum. Qui odit vel itaque, recusandae nesciunt excepturi aliquid, illo quod hic molestias voluptates molestiae accusamus sapiente ipsa aliquam. Tempora, rerum tempore veritatis est recusandae error a nam ex iste dignissimos doloribus. Necessitatibus!
			</p>
		</div>
	</body>
</html>