
<?php
  session_start();
	$conn = new mysqli('localhost', 'root', '', 'proj');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>