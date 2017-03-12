<?php
	
	include "../../inc/connection.php";

	$userSearch = $_POST["user_search"];

	$newQuery = "SELECT * FROM lootData WHERE genre = " . "\"" . Platformer . "\"";
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

	$lootdata = $conn->query($newQuery);

	if(!$lootdata)
		die($conn->error);


	$lootrow = $lootdata->num_rows;

// Begin loop that runs through datbase.
	for($j = 0; $j < $lootrow; ++$j) {

		$lootdata->data_seek($j);
		$lootrow = $lootdata->fetch_array(MYSQLI_ASSOC);


	 //Output HTML Based on Datbase
        echo "<div id='productBox'>". 
        
        //Output Image
        "<img src=\"../img/caseArt/".$lootrow["platform"] ."/". $lootrow["title"] . "\"". "height=\"240\" width=\"270\">
        <h1 id='productName'>".  
            $lootrow["title"] . 
            "</h1>" .
            "<div class='marginFixer'>" . 
            "<ul id='productList'>" .
            "<li class='productInfo'>Released:".$lootrow["releaseDate"]."</li>".
            "<li class='productInfo'>Rated: ".$lootrow["rating"] . "</li>".
            "<li class='productInfo'>Platform: ".$lootrow["platform"] . "</li>".
            "</ul>".
            "<button id='productCost'>Buy For: $".$lootrow["cost"]. "</button>". //Adds Item to User's Cart
            
            "</ul>".
            "</div>".
            "</div>";
        
        

	}


?>

</div>