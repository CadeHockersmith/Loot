<?php
	
	include "../../inc/connection.php";

	$userSearch = $_POST["user_search"];

	$newQuery = "SELECT * FROM lootData WHERE genre = " . "\"" . RPG . "\"";
?>

<head><link rel="stylesheet" href="../css/styles.css"><link rel="stylesheet" href="../css/productPage.css"></head>
 

<?php
        include "../../inc/header.php";
        include "../../inc/filtering.php";
?>


