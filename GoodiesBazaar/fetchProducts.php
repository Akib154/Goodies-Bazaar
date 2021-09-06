<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Products</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>


<?php 

include 'connection.php';
echo "<h1>Products:-</h1><br/>";
$products = getProducts();
if($products->num_rows > 0){
    foreach($products as $p){
        echo "<div>";
        echo "<h1>ID: ".$p['item_id']."</h1><br/>";
        echo "<h1>Name: ".$p['name']."</h1>"."<br/>";
        echo "<h1>Description: ".$p['description']."</h1>"."<br/>";
        echo "<h1>Price: ".$p['price']."</h1>"."<br/>";
        echo "<h1>Image: ".$p['image']."</h1>"."<br/>";
        echo "<h1>Category ID: ".$p['cat_id']."</h1>"."<br/>";
        echo "<h1>Rating: ".$p['rating']."</h1>"."<br/>";
        echo "</div><br/>";
    }
}

?>
    
</body>
</html>