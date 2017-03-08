<?php
include("inc/connection.php");
include("inc/output.php");





?>

<html>
    <head><link rel="stylesheet" href="assets/css/styles.css"></head>

        <body>
        
            <nav >
            <ul id="mainNav">
                <li>Loot</li>
                 <li><a href="assets/pages/arcade.php">Arcade</a></li>
                <li><a href="assets/pages/platformer.php">Platformer</a></li>
                <li><a href="assets/pages/sports.php">Sports</a></li>
                <li><a href="assets/pages/rpg.php">RPG</a></li>
            </ul>
            </nav>
        </body>

</html>




<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>



</head>
<body>

    
<h1>Want to suggest a game?</h1>
<form method="post" action="process.php">
<label>Title</label>
<input type="text" name="title" />
<br />
<label>Release Date</label>
<input type="text" name="releaseDate" />
<br />
<label>Rating</label>
<input type="text" name="rating" />
<br />
<label>Cost</label>
<input type="text" name="cost" />
<br />
<label>Platform</label>
<input type="text" name="platform" />
<br />
<label>Genre</label>
<input type="text" name="genre" />


<br />
<input type="submit" value="Submit Form">
</form>
    



</body>
</html>





