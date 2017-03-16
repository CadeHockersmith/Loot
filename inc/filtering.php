<?php
$lootdata = $conn->query($newQuery);

	if(!$lootdata)
		die($conn->error);


$lootrow = $lootdata->num_rows;
$repeatfix = $lootrow;
// Begin loop that runs through datbase.
	for($j = 0; $j < $repeatfix; ++$j) {

		$lootdata->data_seek($j);
		$lootrow = $lootdata->fetch_array(MYSQLI_ASSOC);

        // Output HTML 
         echo "<div id='productBox'>". 

        
        //Output Image
        "<img src=\"../img/caseArt/".$lootrow["platform"] ."/". $lootrow["title"] . ".jpg\"". "height=\"240\" width=\"270\">
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