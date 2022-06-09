<div class="fon">
    <?php
session_start();
$address = $_SESSION["addres"];
$servername = "localhost";
$username = "root";
$passwor = '';
$dbname = "user_info";

$conn = new mysqli($servername, $username, $passwor, $dbname);


$disp = "SELECT * FROM order_info WHERE address='$address' ";
$result = mysqli_query($conn, $disp);
$num =  mysqli_num_rows($result);

if($num == 0){
    echo "You have no current orders.";
}
for ($x = 0; $x < $num; $x++){
    echo"<br>";
    $row = mysqli_fetch_assoc($result);
    echo "Your previous order was ". $row['order_name']. " of price ". $row['price']. " on date ". date("Y/m/d");
    echo "<hr>";
}

?>


</div>
<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet"> 
</head>

<style>
.fon{
    font-size: 40px;
    
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
  border-color: DarkSlateGrey;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  -webkit-transition: all 150ms ease-in-out;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}
</style>

<html>
    <title>Plants/History</title>
<form action="welcome.php">
    <button class="btn third">Go to Plants</button>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  
</html>