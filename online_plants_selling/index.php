<?php
session_start();
$emailErr = $passErr = $addrErr = "";
$email = $passw = $address = $gmailErr = $numErr =  "";

if (isset($_POST['submit'])) {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  $email = $_POST['email'];

  if (strpos($email, "@gmail.com") == false) {
    $gmailErr = "Use google account only";
  }

  if (empty($_POST['numb'])) {
    $numErr = "Number is required.";
  } 
  
  if (empty($_POST['pwd'])) {
    $passErr = "Password is required";
  } 
    
  if (empty($_POST["address"])) {
    $addrErr = "Address is required";
  } 

  


$passw = $_POST['pwd'];
$num = $_POST['numb'];
$servername = "localhost";
$username = "root";
$passwor = '';
$dbname = "phpproject";
$address = $_POST['address'];
$_SESSION["addres"] = $address;
$emailtype="";
if(strpos($email, "@gmail.com") !== false){
  $emailtype = "gmail";
}

// Create connection
$conn = new mysqli($servername, $username, $passwor, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (name, password, country, address, emailtype, number)
VALUES ('$email', '$passw', 'India', '$address', '$emailtype', '$num')";

if($conn->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
else{
  echo "Logged In Successfully";

}

$conn->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>



<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plants/signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/signup/welcome.php">Plants</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/signup/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/signup/index.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/signup/contact.php"> Contact</a>
        </li>
      


      </ul>

    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>



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
  border-color: DarkSlateGrey;
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





<style>
input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 30px;
  box-sizing: border-box;
}

input[type=password] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 30px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 20%;
  background-color: DarkSlateGrey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

input[type=reset] {
  width: 20%;
  background-color: DarkSlateGrey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}



fieldset {
  border:1px solid;
  width: 50%;
  border-radius: 40px;
}

div {
  border-radius: 5px;

  padding: 20px;
}
.error {color: #FF0000;}


</style>

<form action = <?php echo $_SERVER['PHP_SELF']; ?> method="post">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=outline">

<center>
 <br><br><br>

<fieldset>

<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
  Email: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr; echo $gmailErr?></span>
  <br><br>


  Password: <input type="password" name="pwd">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  Number: <input type="text" name="numb">
  <span class="error">* <?php echo $numErr;?></span>
  <br><br>


  Address: <input type="text" name="address">
  <span class="error"><?php echo $addrErr;?></span>

  <br><br>
  <input type="submit" class="btn third" name="submit" value="Submit">  
</form>


</fieldset>

<form action="welcome.php">
    <button class="btn third">Go to Plants</button>
</form>



</center>


</form>





