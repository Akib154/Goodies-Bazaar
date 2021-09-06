<?php

function Connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "goodies";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    return $conn;
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
}

function getProducts(){
    $conn = Connect();
    $sql = "SELECT * from products";

    $result = $conn->query($sql);
    
    return $result;
}

function getCategories(){
  $conn = Connect();
  $sql = "SELECT * from categories";

  $result = $conn->query($sql);
  
  return $result;
}


//echo "Connected successfully";
?>