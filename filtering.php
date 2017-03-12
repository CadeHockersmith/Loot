<?php
	
	include "inc/connection.php";

	$userSearch = $_POST["user_search"];

	$newQuery = "SELECT * FROM lootData WHERE genre = " . "\"" . Sports . "\"";
?>

<head><link rel="stylesheet" href="assets/css/styles.css"><link rel="stylesheet" href="assets/css/productPage.css"></head>
<form method="post" action="index.php">

	<input type="text" name="user_search" id="user_search"/>

	<input type="submit" value="submit"/>

</form>


<div>

<?php

	$lootdata = $conn->query($newQuery);

	if(!$lootdata)
		die($conn->error);


	$lootrow = $lootdata->num_rows;

	for($j = 0; $j < $lootrow; ++$j) {

		$lootdata->data_seek($j);
		$lootrow = $lootdata->fetch_array(MYSQLI_ASSOC);


	
        echo "<div id='productBox'> 
        <img src=\"assets/img/caseArt/3DS/Pok%C3%A9mon-%20Alpha%20Sapphire.jpg\" height=\"240\" width=\"270\">
        <h1 id='productName'>
        title: " . $lootrow["title"] . 
            "</h1>" .
            "<div class='marginFixer'>" . 
            "<ul id='productList'>" .
            "<li class='productInfo'>".$lootrow["releaseDate"]."</li>".
            "<li class='productInfo'>Rated: ".$lootrow["rating"] . "</li>".
            "<li class='productInfo'>Platform: ".$lootrow["platform"] . "</li>".
            "</ul>".
            "<button id='productCost'>Buy For: $".$lootrow["cost"]. "</button>".
            
            "</ul>".
            "</div>".
            "</div>";
        
        

	}


?>

</div>