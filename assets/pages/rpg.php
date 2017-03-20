<?php
	
	include "../../inc/connection.php";
	
    $newQuery = "SELECT * FROM lootData WHERE genre = " . "\"" . RPG . "\"";

        include "../../inc/header.php";
        include "../../inc/filtering.php";
        include "../../inc/footer.php";
?>


