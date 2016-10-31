<?php 
	function say_hello($message) {
		return "You said {$message}";
	}

	function formatPositions($position) {
		return ucwords(str_replace("_", " ", $position));
	}
?>