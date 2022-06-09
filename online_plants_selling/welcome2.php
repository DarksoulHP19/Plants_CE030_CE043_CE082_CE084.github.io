<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/navigation_bar.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


<html>
<head>
<title>Plants</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="Indoor-plants_aloe-vera.webp" alt="aloe vera" width="200px" height="200px">
      <h3>Aloe Vera</h3>
      <p>Aloe is a cactus-like plant that grows in hot, dry climates. It is cultivated in subtropical regions around the world. It contains powerful antioxidants <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹50/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="aloe vera">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="Indoor-plants_anthurium.webp" alt="anthurium" width="200px" height="200px">
      <h3>Anthurium</h3>
      <p>Also called flamingo flower for their unique tropical shape, you can plant them year-round and they bloom throughout the year. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹70/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="anthurium">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="Indoor-plants_areca-palm.webp" alt="acrea palm" width="200px" height="200px">
      <h3>Areca Palm</h3>
      <p>One of the few palms that can tolerate trimming without harm, making it possible to keep mature plants indoors for their full lifespan of up to 10 years. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹85/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="acrea palm">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="Indoor-plants_bamboo.webp" alt="bamboo" width="200px" height="200px">
      <h3>Bamboo</h3>
      <p>Subfamily of tall treelike grasses of the family. Bamboo growth is fast and thick, and can quickly add a lovely and lush feature to the garden in no time. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹90/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="bamboo">Order</button>
      </form>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="Indoor-plants_ferns.webp" alt="ferns" width="200px" height="200px">
      <h3>Fern</h3>
      <p>Extremely diverse in habitat, form, and reproductive methods. Some are twining and vinelike; others float on the surface of ponds. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹150/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="ferns">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="Indoor-plants_grape-ivy.webp" alt="grape ivy" width="200px" height="200px">
      <h3>Grape Ivy</h3>
      <p>Can be planted and cablue for year-round indoors. Grows slowly, but can survive with the right care for up to 10 years, so it's a good vine to pick. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹200/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="grape ivy">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="Indoor-plants_money-plant.webp" alt="money" width="200px" height="200px">
      <h3>Money Plant</h3>
      <p>It grows naturally in partial shade beneath the canopy of other trees, so provide a similar environment for it in your home. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹65/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="money">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="Indoor-plants_peace-lily.webp" alt="peace lily" width="200px" height="200px">
      <h3>Liliy</h3>
      <p>With colorful, star-shaped flowers, lilies give star power to summer gardens.It’s best to plant these bulbs in late summer, you can also plant them in spring. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹70/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="peace lily">Order</button>
      </form>
    </div>
  </div>


  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="welcome.php" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="welcome.php" class="w3-bar-item w3-button w3-hover-black">1</a>
      <a href="welcome2.php" class="w3-bar-item w3-black w3-button">2</a>
      <a href="welcome3.php" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="welcome4.php" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="welcome3.php" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">
  <div class="w3-container w3-padding-32 w3-center">  
    
    <div class="w3-padding-32">
      <h4><b>Plants here like nowhere else</b></h4>
      <h6><i>Low Price, High Quality</i></h6>
      
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <?php require 'partials/footer.php'?>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "user_info";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM login WHERE name='' OR password=''OR address='' OR number='0'";
$sql2 = "DELETE FROM login WHERE emailtype=''";


if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error refining database record: " ;
}
if ($conn->query($sql2) === TRUE) {
  echo "";
} else {
  echo "Error refining database record: " ;
}


$conn->close();
?> 