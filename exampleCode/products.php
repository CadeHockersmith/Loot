<?php

/* products.php
Stores info for products
*/

$searchtest = $_POST["user_search"];
$timesearch = $_POST["user_select"];

if(isset($searchtest)) {
    echo "This is set";
}

if(isset($timesearch)) {
    echo "This is also set";
}

// Define product information
$products = array(
	1 => array(
		'name' => 'Sneakers',
		'price' => 24.99,
		'category' => 'Shoes',
		'description' => 'Black sneakers. Good for walking or athletic activity'
	),
	2 => array(
		'name' => 'Armani Red Silk Shirt',
		'price' => 379.99,
		'category' => 'Shirts',
		'description' => 'Fancy Italian red silk shirt. Very spiffy. Sure to attract the ladiez'
	),
	3 => array(
		'name' => 'Samsung Constellation S17',
		'price' => 1399.99,
		'category' => 'Cell Phones',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	)
);

echo $products[$timesearch][$searchtest];

?>

<form method="post" action="products.php">

    <label for="user_search">Search</label>
    <input type="text" name="user_search" id="user_search"/>
    <select name="user_select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>

    <input type="submit" value="submit"/>
    
</form>