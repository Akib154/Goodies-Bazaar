<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/content.css">

  <title>Categories Page</title>
</head>
<body>

<h3 class="t" style="color: orange; 	-webkit-text-stroke-width: 2px; text-align:center;">Goodies Bazaar</h3>

<h1>Categories :-</h1>
  <section class="header">


  <nav class ="navbar bg-dark">
<ul class ="navbar-nav">



    

          <?php 

include 'connection.php';
$cats = getCategories();
if($cats->num_rows > 0){
    foreach($cats as $c){
      
        echo "<li class='nav-item'>";
        echo "<a href='#'>".$c['name']."</a>";
        echo "</li>";
    }
}

?>
 </ul>
</nav>   
  </section>

  

  <script src="js/popper.min.js"></script>    
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
