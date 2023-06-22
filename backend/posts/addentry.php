<?php
$mysqli = new mysqli("localhost", "username", "password", "summernote_example");
if ($mysqli->connect_errno) {
  die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

// Escape the form data to prevent SQL injection attacks
$title = $mysqli->real_escape_string($_POST['title']);
$content = $mysqli->real_escape_string($_POST['content']);

// Insert the data into the MySQL database
$query = "INSERT INTO notes (title, content) VALUES ('$title', '$content')";
if (!$mysqli->query($query)) {
  die("Failed to save note: " . $mysqli->error);
}

// Redirect the user back to the form
header("Location: index.php");

