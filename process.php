<?php
 //Including Repetitive Code
include("../../inc/connection.php");

// create a variable
$title=$_POST['title'];
$releaseDate=$_POST['releaseDate'];
$rating=$_POST['rating'];
$cost=$_POST['cost'];
$platform=$_POST['platform'];
$genre=$_POST['genre'];
 
//Execute the query

mysqli_query($conn . " INSERT INTO lootData(title,releaseDate,rating,cost,platform,genre)
				VALUES('$title','$releaseDate','$rating','$cost','$platform''$genre')");

if(mysqli_affected_rows($conn) > 0){
	echo "<p>Game Added</p>";
	echo "<a href="index.html">Go Back</a>";
} else {
	echo "Game NOT Added<br />";
	echo mysqli_error ($conn);
}

?>