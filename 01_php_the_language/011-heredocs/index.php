<?php  
$post = [
	"author"  => "Yovan Juggoo",
	"title"		   => "My awesome post",
	"body"  	   => "Here is the body",
	"publish_date" => "25-10-2016"
];

//bad
$email = "<h1>{$post['title']}</h1><div><p>By: {$post['author']}</p><p>Body: {$post['body']}</p><div>";
echo $email;

//still bad
$email = "<h1>{$post['title']}</h1>";
$email .= "<div>";
$email .= "<p>By: {$post['author']}</p>";
$email .= "<p>Body: {$post['body']}</p>";
$email .= "</div>";
echo $email;

//Still not good enough
$email = sprintf("<h1>%s</h1><div><p>%s</p><p>%s</p></div>", $post["title"], $post["author"], $post["body"]);
echo $email;

/*
	1. Heredocs are useful to create HTML and SQL statements.
	2. EOT stands for end-of-text
	3. No spaces are allowed before the closing EOT
	4. We can format our HTML code or SQL statements as we want.
	5. Many frameworks use the extract method to extract variable names from associative arrays. These variable names can be used in our markup.
 */
$email = <<<EOT
<h1>{$post["title"]}</h1>
<p>By: {$post["author"]}</p>
<p>Body: {$post["body"]}</p>
EOT;
echo $email;

extract($post);
$email = <<<EOT
<h1>{$title}</h1>
<p>By: {$author}</p>
<p>Body: {$body}</p>
EOT;
echo $email;

?>