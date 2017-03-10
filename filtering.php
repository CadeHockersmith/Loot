<?php
	
	include "inc/connection.php";

	$userSearch = $_POST["user_search"];

	$newQuery = "SELECT * FROM lootData WHERE genre = " . "\"" . Action . "\"";
?>

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


		echo "<p>title: " . $lootrow["title"] . "</p>";
        
        

	}


?>

</div>