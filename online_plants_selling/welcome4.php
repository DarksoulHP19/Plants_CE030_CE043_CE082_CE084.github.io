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
      <img src="plant1.jpg" alt="zygopetalum orchid" width="200px" height="200px">
      <h3>Zygopetalum Orchid</h3>
      <p>A popular feature of many Zygopetalum orchids is its heady fragrance, which can fill a whole room. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹70/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="zygopetalum orchid">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="plant2.jpg" alt="english leaf" width="200px" height="200px">
      <h3>English Leaf</h3>
      <p>An evergreen perennial. Classified as a woody vine. Can act as a ground cover spreading horizontally but also a climber. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹120/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="english leaf">Order</button>
      </form>
    </div>
    <div class="w3-quarter">
      <img src="plant3.jpg" alt="turkscape" width="200px" height="200px">
      <h3>Turkscap</h3>
      <p>A native to southeastern U.S. and parts of Mexico. Named for the shape of its small flower, which resembles the Turkish hat. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹150/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="turkscape">Order</button>
      </form>

    </div>
    <div class="w3-quarter">
      <img src="plant4.jpg" alt="himalayan bamboo" width="200px" height="200px">
      <h3>Himalayan Bamboo</h3>
      <p>An Asian genus of mountain clumping bamboo in the grass family.Grows at lower altitudes of the Himalaya. <br><b><p style="padding: 2px; border: 2px solid blue;">Price: <i>₹200/-</i></b></p> </p>
      <form action="orderpage.php" method="get">
        <input type="number" name="quantity"> 
      <button name="name" type="submit" value="himalayan bamboo">Order</button>
      </form>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="welcome3.php" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="welcome.php" class="w3-bar-item w3-button w3-hover-black">1</a>
      <a href="welcome2.php" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="welcome3.php" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="welcome4.php" class="w3-bar-item w3-black w3-button">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
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