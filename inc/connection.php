<?php

	include("login.php");

	$conn = new mysqli($hn, $un, $pw, $dn);

	if($conn->connect_error)
		die("This was the error connecting: " . $conn->connect_error);

    $userSearch = $_POST["user_search"];

?>