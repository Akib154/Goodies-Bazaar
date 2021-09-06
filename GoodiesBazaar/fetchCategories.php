<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Categories</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>


<?php 

include 'connection.php';
echo "<h1>Categories:-</h1><br/>";
$cats = getCategories();
if($cats->num_rows > 0){
    foreach($cats as $c){
        echo "<div>";
        echo "<h1>ID: ".$c['cat_id']."</h1><br/>";
        echo "<h1>Name: ".$c['name']."</h1>"."<br/>";
        echo "</div><br/>";
    }
}

?>
    
</body>
</html>