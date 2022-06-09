<head><head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet"> 
</head></head>
<style>
    fieldset{
        border-radius:10px;
        background-color:ivory;
        width:40%;
        font-family: 'Audiowide', cursive;
    }
</style>
<style>
    h1{
        font-family: 'Audiowide', cursive;
    }
    html, body {
      text-align: center;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;

  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
}


@media screen and (max-width: 600px) {

}

.btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;

  text-transform: uppercase;

  font-weight: 700;
}
.btn:hover, .btn:focus {
  color: black;
  outline: 0;
}
.third {
  border-color: #3498db;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  -webkit-transition: all 150ms ease-in-out;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}

    *{padding:0;margin:0}.wrapper{height:30vh;display:flex;justify-content:center;align-items:center;}.checkmark__circle{stroke-dasharray: 166;stroke-dashoffset: 166;stroke-width: 2;stroke-miterlimit: 10;stroke: #7ac142;fill: none;animation: stroke 0.9s cubic-bezier(0.65, 0, 0.45, 1) forwards}.checkmark{width: 56px;height: 56px;border-radius: 50%;display: block;stroke-width: 2;stroke: #fff;stroke-miterlimit: 10;margin: 10% auto;box-shadow: inset 0px 0px 0px #7ac142;animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both}.checkmark__check{transform-origin: 50% 50%;stroke-dasharray: 48;stroke-dashoffset: 48;animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards}@keyframes stroke{100%{stroke-dashoffset: 0}}@keyframes scale{0%, 100%{transform: none}50%{transform: scale3d(1.1, 1.1, 1)}}@keyframes fill{100%{box-shadow: inset 0px 0px 0px 30px #7ac142}}
</style>

<html>
<body>
<?php 
$price;

if($_GET["name"] == "Aloe Barbadensis"){$price = "70";}
if($_GET["name"] == "Chlorophytum Comosum"){$price = "80";}
if($_GET["name"] == "Crassula Ovata"){$price = "100";}
if($_GET["name"] == "Dracaena Sanderiana"){$price = "130";}
if($_GET["name"] == "Epipremnum Aureum"){$price = "60";}
if($_GET["name"] == "Ficus Benjamina"){$price = "180";}
if($_GET["name"] == "Sansevieria trifasciata"){$price = "90";}
if($_GET["name"] == "Spathiphyllum Wallisii"){$price = "85";}

if($_GET["name"] == "aloe vera"){$price = "50";}
if($_GET["name"] == "anthurium"){$price = "70";}
if($_GET["name"] == "acrea palm"){$price = "85";}
if($_GET["name"] == "bamboo"){$price = "90";}
if($_GET["name"] == "ferns"){$price = "150";}
if($_GET["name"] == "grape ivy"){$price = "200";}
if($_GET["name"] == "money"){$price = "65";}
if($_GET["name"] == "peace lily"){$price = "70";}

if($_GET["name"] == "snake"){$price = "40";}
if($_GET["name"] == "song"){$price = "350";}
if($_GET["name"] == "india ferns"){$price = "150";}
if($_GET["name"] == "philodendron"){$price = "400";}
if($_GET["name"] == "sedum"){$price = "70";}
if($_GET["name"] == "thyme"){$price = "80";}
if($_GET["name"] == "mint"){$price = "50";}
if($_GET["name"] == "kira"){$price = "60";}

if($_GET["name"] == "zygopetalum orchid"){$price = "70";}
if($_GET["name"] == "english leaf"){$price = "120";}
if($_GET["name"] == "turkscape"){$price = "150";}
if($_GET["name"] == "himalayan bamboo"){$price = "200";}
?>

<center>
  <br><br><br>
    <fieldset>
        <h1>Name : <?php echo $_GET["name"]?> </h1><br>
        <h1>Price : <?php echo $price?></h1> <br>
        <h1>Quantity : <?php echo $quan = $_GET["quantity"]?> </h1><br><br><br><br>
        <h1>Total : <?php echo $quan * $price?> </h1><br>

        
        

</form>




</fieldset>
</center>
<div class="wrapper"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/> <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
    </svg>
    
</div>
<h1>Order Placed Successfully</h1>

</body><center>
<form action="welcome.php">
    <button class="btn third">Go to Plants</button>
</form>
</center>
</html> 

<?php

session_start();
$address = $_SESSION["addres"];

$plantname = $_GET['name'];

$totalprice = $quan * $price;
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "phpproject";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO order_info (order_name, price, address)
VALUES ('$plantname', '$totalprice', '$address')";

if ($conn->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();
?> 