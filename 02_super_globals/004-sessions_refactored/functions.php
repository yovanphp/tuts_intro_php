<?php
function is_logged_in() {
	return isset($_SESSION["username"]);
}

function is_valid_user($username, $password) {
	return $username === USER_NAME && $password === PASSWORD;
}