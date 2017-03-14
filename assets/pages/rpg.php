<?php
	
	include "../../inc/connection.php";

	$userSearch = $_POST["user_search"];

	$newQuery = "SELECT * FROM lootData WHERE genre = " . "\"" . RPG . "\"";
?>

<head><link rel="stylesheet" href="../css/styles.css"><link rel="stylesheet" href="../css/productPage.css"></head>
 
<nav id="mainNav">
            <ul>
                <li id="homeLink"><a href="../../index.php" style="font-size: 20em;">LØØŦ</a></li>
                 <li><a href="arcade.php">Arcade</a></li>
                <li><a href="platformer.php">Platformer</a></li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="rpg.php">RPG</a></li>
                <li><a href="suggest.html">Suggestions</a></li>
            </ul>
            </nav>
<?php

        include "../../inc/filtering.php";
?>


</div>