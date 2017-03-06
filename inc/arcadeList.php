<?php
$sql = "SELECT title, releaseDate, rating, cost, platform, genre FROM lootData WHERE genre='arcade'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"]. " - Release Date: " . $row["releaseDate"]. " Rating:" . $row["rating"]. " Cost:$" . $row["cost"]. " Plaform:" . $row["platform"] . " Genre:" .$row["genre"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
