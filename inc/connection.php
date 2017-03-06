<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lootDatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

/* Connecting Debugging Script
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

*/

?>
